@extends('layouts.layoutAdmin')

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Boleta
                <small>Creación de Boleta</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="nav-tabs-custom" id="tabs">

                <!-- TABS -->
                <ul class="nav nav-tabs">
                    <li class="active" id="menuItem1" role="presentation"><a href="#tabData1" data-toggle="tab" class="nexttab">Datos Personales</a></li>
                    <li role="presentation" id="menuItem2"><a href="#tabData2" data-toggle="tab" class="nexttab">Antecedentes Obstétricos</a></li>
                    <li role="presentation" id="menuItem3"><a href="#tabData3" data-toggle="tab" class="nexttab">Embarazo Actual</a></li>
                    <li role="presentation" id="menuItem4"><a href="#tabData4" data-toggle="tab" class="nexttab">Historia Clínica General</a></li>
                    <li role="presentation" id="menuItem5"><a href="#tabData5" data-toggle="tab" class="nexttab">Persona Responsable</a></li>
                </ul>
                {!!Form::open(['route' => 'admin.boleta.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createBoleta'])!!}
                    <div id="my-tab-content" class="tab-content">

                        <!-- Datos Personales-->
                        <div class="tab-pane in active animated zoomIn" id="tabData1">
                            @include('admin.boletas.pacientes')
                        </div>
                        <!-- Antecedentes Obstétricos-->
                        <div class="tab-pane in animated zoomIn" id="tabData2">
                            @include('admin.boletas.antecedentes')
                        </div>
                        <!-- Embarazo Actual-->
                        <div class="tab-pane in animated zoomIn" id="tabData3">
                            @include('admin.boletas.embarazoactual')
                        </div>
                        <!-- Historia Clínica General-->
                        <div class="tab-pane in animated zoomIn" id="tabData4">
                            @include('admin.boletas.historiaclinica')
                        </div>
                        <!-- Persona Responsable-->
                        <div class="tab-pane in animated zoomIn" id="tabData5">
                            @include('admin.boletas.responsable')
                        </div>
                    </div>
                {!!Form::close()!!}
            </div>
        </section>
    </aside>
@endsection

@section('scripts')
    {!!Html::script("js/jquery.validate.js")!!}
    {!!Html::script("js/admin/boleta.js")!!}
@endsection
