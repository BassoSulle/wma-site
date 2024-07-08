<!DOCTYPE html>
<html lang="{% block language %}en{% endblock %}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="en">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#2d4a84">
        <meta name="apple-mobile-web-app-status-bar-style" content="#2d4a84">

        <title> WMA | Mwanzo
        </title>

        <!-- favicons -->
        {{-- <link rel="icon" href="{{asset('static/asset/images/favicon.ico')}}" type="image/x-icon"> --}}
        <link rel="icon" href="{{ asset('static/asset/images/logo.png') }}" type="image/png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap">

        <!-- Stylesheet  -->
        <link rel="stylesheet" href="{{ asset('static/asset/css/master.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/asset/css/custom.css') }}">

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
        <!-- Inside the <head> section of your HTML template -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


    </head>

    <body>

        {{-- nav bar --}}
        @include('layout.sw.navbar')

        {{-- content --}}

        <div>

            @yield('content')

        </div>
        <!--WE USE THIS BASE_LAYOUT FOR EXTENDING THE OTHER LAYOUTS OF THE HTML TEMPLATE-->

        {{-- footer --}}

        @include('layout.sw.footer')

        <input type="hidden" id="base_url" value="/">
        <script src="{{ asset('static/asset/js/jquery.min.js') }}"></script>
        <script src="{{ asset('static/asset/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('static/asset/js/slick.min.js') }}"></script>
        <script src="{{ asset('static/asset/js/datatables.min.js') }}"></script>
        <script src="{{ asset('static/asset/js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('static/asset/js/custom.min.js') }}"></script>
        <script src="{{ asset('static/asset/js/language_switch.js') }}"></script>
        <script src="{{ asset('static/admin/js/visitors-counter/client.min.js') }}"></script>
        <script src="{{ asset('static/admin/js/visitors-counter/visitors.logs.js') }}"></script>
        <script src="{{ asset('static/asset/js/set_cookie.js') }}"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
    </body>
    <!-- **************WELL GOODLUCK*********bassoelibariki56@gmail.com********** -->

</html>
