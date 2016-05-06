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

            <div class="box box-primary">
                <div class="box-header">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6"><h3 class="box-title">Crear Boleta</h3></div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    {!!Form::open(['route' => 'admin.boleta.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createBoleta'])!!}
                        @include('admin.boletas.pacientes')
                        @include('admin.boletas.antecedentes')
                        @include('admin.boletas.embarazoactual')
                        @include('admin.boletas.historiaclinica')
                        @include('admin.boletas.responsable')
                    {!!Form::close()!!}
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section>
    </aside>
@endsection

@section('scripts')
    {!!Html::script("js/jquery.validate.js")!!}
    {!!Html::script("js/admin/boleta.js")!!}
@endsection
