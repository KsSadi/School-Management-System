<!-- BEGIN: Data List -->

<table id="dataTable" class="table table-report -mt-2">
    <thead>
    <tr>
        <th>#</th>

        <th class="whitespace-no-wrap">Name</th>


        @if( auth('admin')->user() && ( auth('admin')->user()->can('category.edit') || auth('admin')->user()->can('category.delete')))
            <th class="text-center whitespace-no-wrap">ACTIONS</th>
        @endif
    </tr>
    </thead>
    <tbody>

    @foreach ($districts as $district)
        <tr class="intro-x">
            <td>{{$loop->index+1}}</td>

            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $district->name }}</span>

            </td>

            @if( auth('admin')->user() && ( auth('admin')->user()->can('district.edit') || auth('admin')->user()->can('district.delete')))
                <td class="table-report__action w-56">
                    <div class="flex  items-center">
                    @if( auth('admin')->user() && ( auth('admin')->user()->can('district.edit')))
                       <button class="flex items-center editElement mr-3"
                               value="{{route('dashboard.district.edit',$district->id)}}">
                           <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                       </button>
                       @endif
                        @if( auth('admin')->user() && ( auth('admin')->user()->can('district.delete')))
                       <button class="flex items-center text-danger deleteElement"
                               value="{{route('dashboard.district.destroy',$district->id)}}">
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
