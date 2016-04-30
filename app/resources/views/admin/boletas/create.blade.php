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
                    <li class="active" role="presentation"><a href="#tabData1" data-toggle="tab">Datos Personales</a></li>
                    <li role="presentation"><a href="#tabData2" data-toggle="tab">Antecedentes Obstétricos</a></li>
                    <li role="presentation"><a href="#tabData3" data-toggle="tab">Embarazo Actual</a></li>
                    <li role="presentation"><a href="#tabData4" data-toggle="tab">Historia Clínica General</a></li>
                    <li role="presentation"><a href="#tabData5" data-toggle="tab">Persona Responsable</a></li>
                </ul>

                <div id="my-tab-content" class="tab-content">
                    <!-- Datos Personales-->
                    <div class="tab-pane in active animated flipInX" id="tabData1">
                        <h1>titulo 1</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <!-- Antecedentes Obstétricos-->
                    <div class="tab-pane in animated flipInX" id="tabData2">
                        <h1>titulo 2</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <!-- Embarazo Actual-->
                    <div class="tab-pane in animated flipInX" id="tabData3">
                        <h1>titulo 3</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <!-- Historia Clínica General-->
                    <div class="tab-pane in animated flipInX" id="tabData4">
                        <h1>titulo 4</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <!-- Persona Responsable-->
                    <div class="tab-pane in animated flipInX" id="tabData5">
                        <h1>titulo 5</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </aside>
@endsection
