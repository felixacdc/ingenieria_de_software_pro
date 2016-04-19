@include('layouts.partialsAdmin.head')

@yield('styles')

    </head>
    <body class="skin-blue">

        @include('layouts.partialsAdmin.header')

        <div class="wrapper row-offcanvas row-offcanvas-left">

            @include('layouts.partialsAdmin.leftMenu')

            @yield('content')

        </div><!-- ./wrapper -->

    @include('layouts.partialsAdmin.scripts')

    @yield('scripts')

    </body>
</html>
