@include('layouts.partialsAdmin.head')
    </head>
    <body class="skin-blue">

        @include('layouts.partialsAdmin.header')
        <div class="wrapper row-offcanvas row-offcanvas-left">

            @include('layouts.partialsAdmin.leftMenu')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Blank page
                        <small>it all starts here</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

    @include('layouts.partialsAdmin.scripts')

    </body>
</html>
