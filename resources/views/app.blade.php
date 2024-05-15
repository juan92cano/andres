@include('includes/header')
    <!-- Cierra sesion en 6 minutos (360 segundos) -->
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 30 }}; url={{ route('logout_time') }}">
    <body>
        @include('layouts/flash-messages')
        @yield('content')
    </body>
@include('includes/footer')