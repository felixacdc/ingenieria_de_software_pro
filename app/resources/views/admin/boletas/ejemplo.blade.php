@extends('layouts.layoutAdmin')

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Boleta
                <small>Creacion de Boleta</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="nav-tabs-custom">

                <!-- TABS -->
                <ul class="nav nav-tabs">
                    <li class="active" role="presentation"><a href="#tabCourses">Crear Usuario</a></li>
                    <li role="presentation"><a href="#tabCourses2">Ver Usuarios</a></li>
                </ul>

                <div id="my-tab-content" class="tab-content">
                    <!-- Form Elements Profeciones-->
                    <div class="panel panel-default tab-pane in active animated rollIn retraso-1" id="tabCourses">
                        <h1>titulo 1</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>

                    <!-- Form Elements Profeciones-->
                    <div class="panel panel-default tab-pane in animated rollIn retraso-1" id="tabCourses2">
                        <h1>titulo 2</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </aside>
@endsection
