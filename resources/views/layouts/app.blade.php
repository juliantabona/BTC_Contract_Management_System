<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BTC Contract Management System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- App Compilled Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- App Custom Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
    </body>
</body>
</html>
