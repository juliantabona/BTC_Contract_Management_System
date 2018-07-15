<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BTC Contract Management System') }}</title>

    <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('css/plugins/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/pace/themes/custom/custom-pace.css') }}">
    <!-- endinject -->

    <!-- App Compilled Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- App Custom Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Current Page Additional Styles -->
    @yield('style')

</head>
<body>
    <body>
        <div id="app">
            <main class="py-4">
                <!-- container-scroller -->
                <div class="container-scroller">
                    <!-- Top menu with logo, profile and message icons -->
                    @include('layouts/topmenu/default-topmenu')
                    <div class="container-fluid page-body-wrapper">
                        <div class="row row-offcanvas row-offcanvas-right">
                            <!-- Right sidebar with instant settings -->
                            @include('layouts/sidebar/default-right-settings') 
                            @include('layouts/sidebar/default-right-todolist')
                            <!-- Left sidebar with navigation menus -->
                            @include('layouts/sidebar/default-left-menu')
                            <!-- Dashboard content -->
                            <div class="content-wrapper" style="min-height: 2956.38px;">
                                @include('layouts/alerts/default-top-alerts') 
                                @yield('content')
                            </div>
                            <!-- partial:partials/_footer.html -->
                            @include('layouts/footer/default-footer')
                        </div>
                    </div>
                </div>
            </main>
        </div>    
        <script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiMwMDYyMzAiLCJ3ZWIiOnsiYm90SWQiOiI1YjQ4Zjk1ZjdiZDFjNDAwOTJiYTA5YmUiLCJ0aGVtZSI6IiMwMDYyMzAiLCJsYWJlbCI6IkJUQyBTdXBwb3J0In0sIndlbGNvbWVUZXh0IjoiQXNrIGFueXRoaW5nIPCfmYIifQ==" async defer></script>
    </body>
</body>

    <!-- Scripts -->

    <!-- plugins:js -->
    <script src="{{ asset('js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- endinject -->

    <!-- inject:js -->
    <script src="{{ asset('js/custom/off-canvas.js') }}"></script>
    <script src="{{ asset('js/custom/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/custom/misc.js') }}"></script>
    <script src="{{ asset('js/custom/settings.js') }}"></script>
    <script src="{{ asset('js/custom/todolist.js') }}"></script>
    <!-- endinject -->

    <!-- Current Page Additional JS -->
    @yield('js')

</html>
