<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{!empty($title_page) ? $title_page:''}} UNIVERSITAS UDAYANA</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('mazer/dist/assets/css/bootstrap.css')}}">
    <link rel="icon" href="{{asset('images/udayana.png')}}">
    <link rel="stylesheet" href="{{asset('mazer/dist/assets/vendors/iconly/bold.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('mazer/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('mazer/dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('mazer/dist/assets/images/favicon.svg')}}" type="image/x-icon">


    {{-- Custom --}}
    <link rel="stylesheet" href="{{asset('css/customadmin.css')}}">
    {{-- Datatables --}}
    <link rel="stylesheet" href="{{asset('mazer/dist/assets/vendors/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('mazer/dist/assets/vendors/fontawesome/all.min.css')}}">

    {{-- ChartCSS --}}
    <link rel="stylesheet" href="{{asset('mazer/dist/assets/vendors/chartjs/Chart.min.css')}}">

    {{-- WYSIWYG --}}
    <link rel="stylesheet" href="{{asset('mazer/dist/assets/vendors/summernote/summernote-lite.min.css')}}">

</head>

<body>

    @include('admin/layouts/navbar')
    @include('admin/layouts/header')
    @yield('content')
    @include('admin/layouts/footer')



    <!-- Core -->
    <script src="{{asset('mazer/dist/assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('mazer/dist/assets/vendors/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('mazer/dist/assets/vendors/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('mazer/dist/assets/vendors/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}">
    </script>


    <script src="{{asset('mazer/dist/assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}">
    </script>
    <script src="{{asset('mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('mazer/dist/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('mazer/dist/assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('mazer/dist/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('mazer/dist/assets/js/mazer.js')}}"></script>
    <script src="{{asset('mazer/dist/assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('mazer/dist/assets/js/pages/ui-chartjs.js')}}"></script>


    {{-- Datatable JS --}}
    <script src="{{asset('mazer/dist/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>

    {{-- WYSIWYG JS --}}
    <script src="{{asset('mazer/dist/assets/vendors/summernote/summernote-lite.min.js')}}"></script>

    {{-- Sweet Alert --}}
    <script src="{{asset('mazer/dist/assets/js/extensions/sweetalert2.js')}}"></script>
    <script src="{{asset('mazer/dist/assets/vendors/sweetalert2/sweetalert2.all.min.js')}}"></script>


    <script>
        // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    @stack('js')
</body>

</html>