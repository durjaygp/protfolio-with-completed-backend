<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('backEnd')}}/assets/images/logo/favicon.png">
    <link href="{{asset('backEnd')}}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- page css -->
    <link href="{{asset('backEnd')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="{{asset('backEnd')}}/assets/css/app.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backEnd') }}/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ asset('backEnd') }}/dist/css/dropify.min.css">



</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            @include('admin.include.header')
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('admin.include.sidebar')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">
                    @yield('content')
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                @include('admin.include.footer')
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="{{asset('backEnd')}}/assets/js/vendors.min.js"></script>


    <!-- page js -->
    <script src="{{asset('backEnd')}}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{asset('backEnd')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('backEnd')}}/assets/js/pages/dashboard-project.js"></script>

    <!-- Core JS -->
    <script src="{{asset('backEnd')}}/assets/js/app.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src="{{asset('backEnd')}}/summernote/summernote-bs4.min.js"></script>
    <script src="{{asset('backEnd')}}/dist/js/dropify.min.js"></script>

    <script src="{{asset('backEnd')}}/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('backEnd')}}/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('backEnd')}}/assets/js/pages/e-commerce-order-list.js"></script>


    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });

    </script>
    <script>
        $('#description').summernote({
            placeholder: 'Please Write Your Post Content',
            tabsize: 2,
            height: 300
        });
    </script>
    <script>
        $('.dropify').dropify();
    </script>




</body>
</html>
