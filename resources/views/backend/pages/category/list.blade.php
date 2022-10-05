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

    @foreach ($categories as $category)
        <tr class="intro-x">
            <td>{{$loop->index+1}}</td>

            <td>
                <span href="" class="font-medium whitespace-no-wrap">{{ $category->name }}</span>

            </td>

            @if( auth('admin')->user() && ( auth('admin')->user()->can('category.edit') || auth('admin')->user()->can('category.delete')))
                <td class="table-report__action w-56">
                    <div class="flex  items-center">
                    @if( auth('admin')->user() && ( auth('admin')->user()->can('category.edit')))
                       <button class="flex items-center editElement mr-3"
                               value="{{route('dashboard.category.edit',$category->id)}}">
                           <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                       </button>
                       @endif
                        @if( auth('admin')->user() && ( auth('admin')->user()->can('category.delete')))
                       <button class="flex items-center text-danger deleteElement"
                               value="{{route('dashboard.category.destroy',$category->id)}}">
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
