<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        @livewireStyles
        <x-master.css />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}"> @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <x-master.navbar />
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->

            <x-master.left-sidebar />
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                {{isset($header) ? $header : ""}}

                <!-- Main content -->
                {{$slot}}
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <x-master.footer />

            <x-master.right-sidebar />
        </div>
        <!-- ./wrapper -->
        @stack('modals')
        @livewireScripts
        <x-master.js />

        @stack("js")
    </body>

</html>