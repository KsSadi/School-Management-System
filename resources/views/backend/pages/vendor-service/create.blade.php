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

    $modal_title ='Vendor Service';
    $store_route = route('dashboard.vendor-service.store');
    $update_route='';
    if(isset($service)){
         $update_route = route('dashboard.vendor-service.update', $service->id);
         $data = $service;
    }
    $fetch_route = route('dashboard.vendor-service.list');
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
        <div class="col-span-12 md:col-span-6">
            <label for="vendor_id">Select Vendor</label>
            <select name="vendor_id" id="vendor_id" class="input w-full border mt-2" required>
                <option value="">Select Vendor</option>
                @foreach($vendors as $vendor)
                    <option @if(isset($data) && $data->vendor_id==$vendor->id) selected @endif value="{{$vendor->id}}">{{$vendor->name}}</option>
                @endforeach
            </select>
        </div>
    <div>
        <label class="flex flex-col sm:flex-row">{{ucfirst($modal_title)}} Name? (required)
            <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 2 characters</span>
        </label>
        <input type="text" name="name" @if(isset($data)) value="{{$data->name}}" @endif class="input w-full border mt-2"
               placeholder="Service Name" required>
    </div>

        <div class="col-span-12 md:col-span-6">
            <label for="location_id">Select Location</label>
            <select name="location_id" id="location_id" class="input w-full border mt-2" required>
                <option value="">Select Location</option>
                @foreach($locations as $location)
                    <option @if(isset($data) && $data->location_id==$location->id) selected @endif value="{{$location->id}}">{{$location->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Details
            </label>
            <input type="text" name="details" @if(isset($data)) value="{{$data->details}}"
                   @endif class="input w-full border "
                   placeholder="Details" >
        </div>
        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Type
            </label>
            <input type="text" name="type" @if(isset($data)) value="{{$data->type}}"
                   @endif class="input w-full border "
                   placeholder="Type" >
        </div>
        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Buying Price
            </label>
            <input type="number" name="buying_price" @if(isset($data)) value="{{$data->buying_price}}"
                   @endif class="input w-full border "
                   placeholder="" required>
        </div>
        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Selling Price
            </label>
            <input type="number" name="selling_price" @if(isset($data)) value="{{$data->selling_price}}"
                   @endif class="input w-full border "
                   placeholder="" required>
        </div>
        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Discount
            </label>
            <input type="number" name="discount" @if(isset($data)) value="{{$data->discount}}"
                   @endif class="input w-full border "
                   placeholder="" >
        </div>

        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Cover Image
            </label>
            <input type="file" name="cover_image"  class="form-control file border ">
        </div>
        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Image
            </label>
            <input type="file" name="image"  class="form-control file border ">
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
