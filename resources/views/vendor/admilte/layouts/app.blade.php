<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- AdminLTE CSS -->
    <link href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Sidebar -->
        @include('vendor.adminlte.partials.sidebar')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-0">Welcome to AdminLTE</h1>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <p>Welcome to your Laravel AdminLTE dashboard!</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('vendor.adminlte.partials.footer')
    </div>

    <!-- AdminLTE JS -->
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
