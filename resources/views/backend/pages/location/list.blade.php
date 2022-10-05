<!-- BEGIN: Data List -->
<table id="dataTable" class="table table-report -mt-2">
    <thead>
    <tr>
        <th>#</th>
        <th class="whitespace-no-wrap" width="10%">Img</th>

        <th class="whitespace-no-wrap">Name</th>
        <th class=" whitespace-no-wrap">Address</th>
        <th class=" whitespace-no-wrap">District</th>


        @if( auth('admin')->user() && ( auth('admin')->user()->can('location.edit') || auth('admin')->user()->can('location.delete')))
            <th class="text-center whitespace-no-wrap">ACTIONS</th>
        @endif
    </tr>
    </thead>
    <tbody>

    @foreach ($locations as $location)
        <tr class="intro-x">
            <td>{{$loop->index+1}}</td>
            <td class="w-40">
                <div class="flex">
                    <div class="w-10 h-10 image-fit">
                        <img alt="" class="tooltip rounded-full"
                             src="{{asset('uploads/location')}}/{{$location->image}}"
                             title="Uploaded at {{$location->created_at}}">
                    </div>

                </div>
            </td>


            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $location->name }}</span>

            </td>
            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $location->address }}</span>
            </td>
            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $location->district->name }}</span>
            </td>



            @if( auth('admin')->user() && ( auth('admin')->user()->can('location.edit') || auth('admin')->user()->can('location.delete')))
                <td class="table-report__action w-56">
                    <div class="flex  items-center">
                    @if( auth('admin')->user() && ( auth('admin')->user()->can('location.edit')))
                       <button class="flex items-center editElement mr-3"
                               value="{{route('dashboard.location.edit',$location->id)}}">
                           <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                       </button>
                       @endif
                        @if( auth('admin')->user() && ( auth('admin')->user()->can('location.delete')))
                       <button class="flex items-center text-danger deleteElement"
                               value="{{route('dashboard.location.destroy',$location->id)}}">
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
