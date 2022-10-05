<!-- BEGIN: Data List -->
<table id="dataTable" class="table table-report -mt-2">
    <thead>
    <tr>
        <th>#</th>
        <th class="whitespace-no-wrap" width="10%">Img</th>

        <th class="whitespace-no-wrap">Name</th>
        <th class=" whitespace-no-wrap">Location</th>
        <th class=" whitespace-no-wrap">Buying Price</th>
        <th class=" whitespace-no-wrap">Selling Price</th>



        @if( auth('admin')->user() && ( auth('admin')->user()->can('vendor-service.edit') || auth('admin')->user()->can('vendor-service.delete')))
            <th class="text-center whitespace-no-wrap">ACTIONS</th>
        @endif
    </tr>
    </thead>
    <tbody>

    @foreach ($services as $service)
        <tr class="intro-x">
            <td>{{$loop->index+1}}</td>
            <td class="w-40">
                <div class="flex">
                    <div class="w-10 h-10 image-fit">
                        <img alt="" class="tooltip rounded-full"
                             src="{{asset('uploads/service')}}/{{$service->image}}"
                             title="Uploaded at {{$service->created_at}}">
                    </div>

                </div>
            </td>


            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $service->name }}</span>

            </td>
            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $service->location->name }}</span>
            </td>
            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $service->buying_price}}</span>
            </td>
            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $service->selling_price}}</span>
            </td>



            @if( auth('admin')->user() && ( auth('admin')->user()->can('vendor-service.edit') || auth('admin')->user()->can('vendor-service.delete')))
                <td class="table-report__action w-56">
                    <div class="flex  items-center">
                    @if( auth('admin')->user() && ( auth('admin')->user()->can('vendor-service.edit')))
                       <button class="flex items-center editElement mr-3"
                               value="{{route('dashboard.vendor-service.edit',$service->id)}}">
                           <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                       </button>
                       @endif
                        @if( auth('admin')->user() && ( auth('admin')->user()->can('vendor-service.delete')))
                       <button class="flex items-center text-danger deleteElement"
                               value="{{route('dashboard.vendor-service.destroy',$service->id)}}">
                           <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                       </button>
                          @endif
                   </div>

               </td>
           @endif
       </tr>
   @endforeach
   </tbody>
</table>

<!-- END: Data List -->
