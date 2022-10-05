<!-- BEGIN: Data List -->

<table id="dataTable" class="table table-report -mt-2">
    <thead>
    <tr>
        <th>#</th>
        <th class="whitespace-no-wrap" width="10%">Img</th>
        <th class="whitespace-no-wrap">Name</th>
        <th class=" whitespace-no-wrap">Email</th>
        <th class=" whitespace-no-wrap">Phone</th>
        <th class=" whitespace-no-wrap">Details</th>

        @if( auth('admin')->user() && ( auth('admin')->user()->can('vendor.edit') || auth('admin')->user()->can('vendor.delete')))
            <th class="text-center whitespace-no-wrap">ACTIONS</th>
        @endif
    </tr>
    </thead>
    <tbody>

    @foreach ($vendors as $vendor)
        <tr class="intro-x">
            <td>{{$loop->index+1}}</td>
            <td class="w-40">
                <div class="flex">
                    <div class="w-10 h-10 image-fit">
                        <img alt="" class="tooltip rounded-full"
                             src="{{asset('uploads/vendor')}}/{{$vendor->image}}"
                             title="Uploaded at {{$vendor->created_at}}">
                    </div>

                </div>
            </td>
            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $vendor->name }}</span>

            </td>
            <td class="">
                {{ $vendor->email }}
            </td>
            <td class="">
                {{ $vendor->phone }}
            </td>
            <td class="">
                {{ $vendor->details }}
            </td>
            @if( auth('admin')->user() && ( auth('admin')->user()->can('vendor.edit') || auth('admin')->user()->can('vendor.delete')))
                <td class="table-report__action w-56">
                    <div class="flex  items-center">

                        <button class="flex items-center editElement mr-3"
                                value="{{route('dashboard.vendor.edit',$vendor->id)}}">
                            <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </button>

                        <button class="flex items-center text-danger deleteElement"
                                value="{{route('dashboard.vendor.destroy',$vendor->id)}}">
                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                        </button>
                    </div>

                </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>

<!-- END: Data List -->
