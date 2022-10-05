<!-- BEGIN: Data List -->

<table id="dataTable" class="table table-report -mt-2">
    <thead>
    <tr>
        <th>#</th>
        <th class="whitespace-no-wrap" width="10%">Img</th>
        <th class="whitespace-no-wrap">Name</th>
        <th class=" whitespace-no-wrap">Email</th>
        <th class=" whitespace-no-wrap">Phone</th>
        <th class=" whitespace-no-wrap">NID</th>
        <th class=" whitespace-no-wrap">ID Card</th>

        @if( auth('admin')->user() && ( auth('admin')->user()->can('serviceProvider.edit') || auth('admin')->user()->can('serviceProvider.delete')))
            <th class="text-center whitespace-no-wrap">ACTIONS</th>
        @endif
    </tr>
    </thead>
    <tbody>

    @foreach ($allLocalServiceProviders as $serviceProvider)
        <tr class="intro-x">
            <td>{{$loop->index+1}}</td>
            <td class="w-40">
                <div class="flex">
                    <div class="w-10 h-10 image-fit">
                        <img alt="" class="tooltip rounded-full"
                             src="{{asset('uploads/serviceProvider')}}/{{$serviceProvider->image}}"
                             title="Uploaded at {{$serviceProvider->created_at}}">
                    </div>

                </div>
            </td>
            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $serviceProvider->name }}</span>

            </td>
            <td class="">
                {{ $serviceProvider->email }}
            </td>
            <td class="">
                {{ $serviceProvider->phone }}
            </td>
            <td class="">
                {{ $serviceProvider->nid }}
            </td>
            <td class="">
                <a href="{{route('print-id', $serviceProvider->id)}}" class="btn btn-primary btn-sm"><i data-feather="printer" class="w-4 h-4 mr-1"></i> Print</a>
            </td>
            @if( auth('admin')->user() && ( auth('admin')->user()->can('serviceProvider.edit') || auth('admin')->user()->can('serviceProvider.delete')))
                <td class="table-report__action w-56">
                    <div class="flex  items-center">

                        <button class="flex items-center editElement mr-3"
                                value="{{route('dashboard.serviceProvider.edit',$serviceProvider->id)}}">
                            <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </button>

                        <button class="flex items-center text-danger deleteElement"
                                value="{{route('dashboard.serviceProvider.destroy',$serviceProvider->id)}}">
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
