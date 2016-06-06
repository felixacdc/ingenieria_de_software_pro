@include('layouts.partialsFrond.head')
  <body class="login-img3-body">

    <div id="element" class="introLoading" style="font-size: 80px;"></div>

    <div class="container">

      @yield('content')

    </div>

    @include('layouts.partialsFrond.scripts')


    <script type="text/javascript">
        $( "#send" ).submit(function( event ) {
            $("#send .btn-primary").prop('disabled', true);
        });
    </script>
  </body>
</html>
