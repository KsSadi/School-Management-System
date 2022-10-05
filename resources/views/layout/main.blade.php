@extends('../layout/base')

@section('body')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&display=swap');
        *{
            font-family: 'IBM Plex Mono', monospace;
        }

         ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
             color: #a2a4a1 !important;
                opacity: .5; /* Firefox */

         }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: red!important;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
            color: red!important;
        }

        @if(session()->has('dark_mode') && session()->get('dark_mode')==1 )
        #dataTable_length{
            color: #fff!important;
        }
        #dataTable_filter>*{
            background-color: #1f2937!important;
            color: white!important;
        }
           #dataTable_info{
               color: #fff!important;
           }
              #dataTable_paginate{
                color: #fff!important;
              }



        @endif

    </style>

    <body class="main">
    <style>

        #dataTable_length label> select{
            width: 80px!important;
        }
    </style>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })


    </script>



        @yield('content')
        @include('../layout/components/dark-mode-switcher')
        @include('../layout/components/main-color-switcher')

        <!-- BEGIN: JS Assets-->

        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places"></script>

        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
        <!-- BEGIN: Modal Content -->
        <div id="programmatically-modal" data-tw-backdrop="static" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl p-2">
                <div class="modal-content">
                    <a data-tw-dismiss="modal" class="text-danger font-bold button-danger" href="javascript:;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    </a>
                    <div class="modal-body p-0 ">
                        <div class=" p-8" id="modalContent">

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- END: Modal Content -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        @yield('script')
    </body>
@endsection
