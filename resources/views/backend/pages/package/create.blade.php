<!-- Create Function goes here -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- form -->
@php

    $modal_title ='Tour Package';
    $store_route = route('dashboard.package.store');
    $update_route='';
    if(isset($package)){
         $update_route = route('dashboard.package.update', $package->id);
         $data = $package;
    }
    $fetch_route = route('dashboard.package.list');
@endphp
<div class="intro-y text-primary text-center text-xl md:text-3xl font-bold text-left pt-4 pb-2 mb-2 border-b-2 ">
    @isset($data)
        Update
    @else
        Create New
    @endif {{$modal_title}}
</div>
<form class="validate-form text-base "
      id="submitForm"
      autocomplete="off"
      @if(isset($data))
          action="{{$update_route}}"
      @else
          action="{{$store_route}}"
    @endif
>
    @if(isset($data))
        <input type="hidden" name="_method" value="PUT">
    @endif
    @csrf
        <div class="col-span-12 mb-2  text-xl font-semibold">


            <hr>
        </div>
    <div>
        <label class="flex flex-col sm:flex-row">{{ucfirst($modal_title)}} Name? (required)
            <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 2 characters</span>
        </label>
        <input type="text" name="name" @if(isset($data)) value="{{$data->name}}" @endif class="input w-full border mt-2"
               placeholder="Ena Poribohon" required>
    </div>

    <div class="grid grid-cols-12 space-y-2 gap-2 mt-3">
        <div class="col-span-12 md:col-span-6">
            <label for="category">Select Category</label>
            <select name="category_id" id="category" class="input w-full border mt-2">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option @if(isset($data)  && $data->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-span-12 md:col-span-6">
            <label for="district_id">Select District</label>
            <select name="district_id" id="district_id" class="input w-full border mt-2">
                <option value="">Select District</option>
                @foreach($districts as $district)
                    <option @if(isset($data) && $data->district_id==$district->id) selected @endif value="{{$district->id}}">{{$district->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Email?
            </label>
            <input type="email" name="email" @if(isset($data)) value="{{$data->email}}"
                   @endif class="input w-full border "
                   placeholder="example@gmail.com" required>

        </div>

        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Phone?
            </label>
            <input type="text" name="phone" @if(isset($data)) value="{{$data->phone}}"
                   @endif class="input w-full border "
                   placeholder="01700000000" required>
        </div>

        <div class="col-span-12 md:col-span-12">
            <label for="details" class="flex flex-col sm:flex-row">Details ?
            </label>
            <textarea name="details" id="details" cols="30" rows="5" class="input w-full border mt-2"
                      placeholder="Details">@if(isset($data)){{$data->details ?? ''}}@endif</textarea>

        </div>



        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Address
            </label>
            <input type="text" name="address" @if(isset($data)) value="{{$data->address}}"
                   @endif class="input w-full border "
                   placeholder="Address" >
        </div>



        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row"> Image
            </label>
            <input type="file" name="image"  class="form-control file border ">
        </div>
        <div class="col-span-12   text-xl font-semibold">


          <hr>
      </div>



    </div>


    <div class="flex flex-row-reverse mt-2">
        <button type="submit" class="btn btn-primary w-full shadow-md mr-2 ">@isset($data)
                Update
            @else
                Create
            @endif  {{$modal_title}} </button>

    </div>
</form>
<!-- end form -->

<script>
    $(document).ready(function () {
        const el = document.querySelector("#programmatically-modal");
        const modal = tailwind.Modal.getOrCreateInstance(el);
        const hideModal = () => modal.hide();

        $("#submitForm").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: form.attr('action'),
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    if (data.status) {
                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })
                        hideModal();
                        location.reload();
                        fetchListData("{{$fetch_route}}");

                    } else {
                        console.log(data);
                        Toast.fire({
                            icon: 'error',
                            title: 'Something went wrong'
                        })
                    }
                },
                error: function (data) {
                    if (data.status == 422) {
                        Toast.fire({
                            icon: 'error',
                            title: 'Validation Error'
                        });
                        var errors = data.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            var input = '[name=' + key + ']';
                            $(input + '+.validation-error-text').remove();
                            $(input).after('<p class="validation-error-text text-danger">' + value + '</p>');
                        });
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Something went wrong'
                        })
                    }

                }
            });
        });

        $('#extendDetails').click(function () {
            $(this).hide();
            $('#organizerDetails').show();
        });
        const fetchListData = (url) => {
            $.ajax({
                data: {},
                method: 'GET',
                url: url,
                success: function (data) {
                    if (data.status) {
                        $("#listContainer").html(data.html);
                        new DataTable("#dataTable", {});
                    }
                },
                error: function (data) {
                    console.log(data);
                }


            })
        }

    });

</script>
