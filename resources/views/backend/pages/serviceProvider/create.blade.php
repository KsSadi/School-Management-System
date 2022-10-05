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

    $modal_title ='Service Provider';
    $store_route = route('dashboard.serviceProvider.store');
    $update_route='';
    if(isset($serviceProvider)){
         $update_route = route('dashboard.serviceProvider.update', $serviceProvider->id);
         $data = $serviceProvider;
    }
    $fetch_route = route('dashboard.serviceProviders.list');
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

            <h2>Personal Information</h2>
            <hr>
        </div>
    <div>
        <label class="flex flex-col sm:flex-row">{{ucfirst($modal_title)}} Name? (required)
            <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 2 characters</span>
        </label>
        <input type="text" name="name" @if(isset($data)) value="{{$data->name}}" @endif class="input w-full border mt-2"
               placeholder="Mr Karim Sheikh" required>
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

        <div class="col-span-12 md:col-span-6">
            <label for="nid" class="flex flex-col sm:flex-row">National ID ?
            </label>
            <input type="text" id="nid" name="nid" @if(isset($data)) value="{{$data->nid}}"
                   @endif class="input w-full border "
                   placeholder="nid" >
        </div>

        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Father Name ?
            </label>
            <input type="text" name="father" @if(isset($data)) value="{{$data->father}}"
                   @endif class="input w-full border "
                   placeholder="Father Name" >
        </div>

        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Mother Name ?
            </label>
            <input type="text" name="mother" @if(isset($data)) value="{{$data->mother}}"
                   @endif class="input w-full border "
                   placeholder="Mother Name" >
        </div>

        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Address
            </label>
            <input type="text" name="address" @if(isset($data)) value="{{$data->address}}"
                   @endif class="input w-full border "
                   placeholder="Address" >
        </div>

        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Blood Group
            </label>
            @php
            $bloods = ['A+','A-','B+','B-','O+','O-','AB+','AB-'];
            @endphp
           <select name="blood">
               <option value="">Unknown</option>
               @foreach($bloods as $blood)
                <option @if(isset($data) && $data->blood==$blood) selected @endif value="{{$blood}}">{{$blood}}</option>
                @endforeach
           </select>
        </div>

        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Service Provider Image
            </label>
            <input type="file" name="image"  class="form-control file border ">
        </div>
        <div class="col-span-12   text-xl font-semibold">

          <h2>Service Details</h2>
          <hr>
      </div>
        <div class="col-span-12 md:col-span-6 md:col-sm-12">
            <label class="flex flex-col sm:flex-row">Vehicle Name
            </label>
            <input type="text" name="vehicle_name" @if(isset($data)) value="{{$data->vehicle_name}}"
                   @endif class="input w-full border "
                   placeholder="Toyota abc" >
        </div>
        <!-- Registration No -->
        <div class="col-span-12 md:col-span-6 md:col-sm-12">
            <label class="flex flex-col sm:flex-row">Registration No
            </label>
            <input type="text" name="registration_number" @if(isset($data)) value="{{$data->registration_number}}"
                   @endif class="input w-full border "
                   placeholder="Registration No" >
        </div>

        <!-- Driving License number  -->
        <div class="col-span-12 md:col-span-6 md:col-sm-12">
            <label class="flex flex-col sm:flex-row">Driving License number
            </label>
            <input type="text" name="driving_license_number" @if(isset($data)) value="{{$data->driving_license_number}}"
                   @endif class="input w-full border "
                   placeholder="Driving License number" >
        </div>
        <!-- Driver Name -->
        <div class="col-span-12 md:col-span-6 md:col-sm-12">
            <label class="flex flex-col sm:flex-row">Driver Name
            </label>
            <input type="text" name="driver_name" @if(isset($data)) value="{{$data->driver_name}}"
                   @endif class="input w-full border "
                   placeholder="Driver Name" >
        </div>
        <!-- Helper Name   -->
        <div class="col-span-12 md:col-span-6 md:col-sm-12">
            <label class="flex flex-col sm:flex-row">Helper Name
            </label>
            <input type="text" name="helper_name" @if(isset($data)) value="{{$data->helper_name}}"
                   @endif class="input w-full border "
                   placeholder="Helper Name" >
        </div>





        <div class="col-span-12 md:col-span-6">
            <label class="" for="password">Password?
            </label>
            <input id="password" type="password" name="password" class=" form-input w-full border " autocomplete="off"
                   placeholder="password">
        </div>
        <div class="col-span-12 md:col-span-6">
            <label class="flex flex-col sm:flex-row">Confirm Password?
            </label>
            <input type="password" name="password_confirmation" class="input w-full border"
                   placeholder="password" @if(!isset($data)) required @endif>
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
