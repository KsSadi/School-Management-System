@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Service Provider</title>
@endsection

@section('subcontent')

    <h2 class="intro-y text-lg font-medium mt-10">Service Provider  List </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-6 flex flex-wrap sm:flex-nowrap items-center mt-2">
            @if( auth('admin')->user() && ( auth('admin')->user()->can('serviceProvider.create')))
                <button class="btn btn-primary shadow-md mr-2" type="button" id="addNew">Add New Service Provider</button>
            @endif
        </div>
        <div class="intro-y col-span-6 flex flex-wrap sm:flex-nowrap  mt-2">

            <a href="{{route("print-id-bulk")}}" target="_blank"
               class="text-white rounded py-2 px-5 float-right flex btn-primary justify-between --print-button">
                Print All ID Card
                <span class="w-6 ml-2">
                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                </span>
            </a>

        </div>


        <div id="listContainer" class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            @include('backend.pages.serviceProvider.list')
        </div>

    </div>


    <script>

        $(document).ready(function () {
            new DataTable("#dataTable", {});
            const fetchListData = (url) => {
                $.ajax({
                    data: {},
                    method: 'GET',
                    url: url,
                    success: function (data) {
                        if (data.status) {
                            $("#listContainer").html(data.html);
                            new DataTable({
                                responsive: true
                            })
                                .columns.adjust()
                                .responsive.recalc();

                        }
                    },
                    error: function (data) {
                        console.log(data);
                    }
                })
            }

            const globalModal = $("#globalModal");
            const modalContent = $("#modalContent");
            const el = document.querySelector("#programmatically-modal");
            const modal = tailwind.Modal.getOrCreateInstance(el);
            const hideModal = () => modal.hide();
            $(document).on('click', '.editElement', function () {

                let url = $(this).val();
                ajaxGet(url, 'GET', {}, showData)

            });
            $(document).on('click', '.deleteElement', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    let url = $(this).val();
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "_method": "DELETE",

                        },
                        success: function (data) {
                            $("#listContainer").html(data.html);
                            if (data.status == 'success') {
                                fetchListData("{{route('dashboard.serviceProviders.list')}}");
                                Swal.fire(
                                    'Deleted!',
                                    data.message,
                                    'success'
                                )

                            } else {
                                Swal.fire(
                                    'Error!',
                                    data.message,
                                    'error'
                                )
                            }
                        }
                    });
                })


            });

            function showData(response) {
                modal.show();
                if (response.status) {
                    modalContent.html(response.data);
                }
            }

            $("#addNew").on('click', () => {
                let url = "{{route('dashboard.serviceProvider.create')}}";
                ajaxGet(url, 'GET', {}, showData);
            });


            const ajaxGet = (url, method, data, callbackFunction) => {
                $.ajax({
                    type: method,
                    url: url,
                    data: data,
                    success: callbackFunction,
                    error: function (data) {
                        console.log(data);
                    }
                });
            }

        });


    </script>
@endsection



