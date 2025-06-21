<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        @yield('title')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/css/custom.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        @stack('css')
    </head>

    <body data-layout="horizontal">

    @include('admin.header.header')

        <div id="layout-wrapper">
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
            @yield('body')
                </div> 
            </div> 
        </div>
        </div>

        <script src="{{ asset('assets/js/jquery.min.js') }} "></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
            @stack('script')
    </body>
</html>
