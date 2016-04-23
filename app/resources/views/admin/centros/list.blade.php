@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Centros
                <small>Mantenimiento</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            @include('admin.partials.alertSuccess')
            @include('admin.partials.alertErrors')

            <div class="box box-primary">
                <div class="box-header">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6"><h3 class="box-title">Centros de Salud</h3></div>
                            <div class="col-md-6  text-right"><button type="button" name="create" class="btn btn-primary loadModal" data-toggle='modal' data-target='#generalModal' data-url="centros/create " data-title="Crear Centro">Crear Centro</button></div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre de Centro</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Tipo de Centro</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($data as  $key => $centro)
                             <tr>
                                 <td>{{ $key + 1   }}</td>
                                 <td>{{ $centro->centro }} </td>
                                 <td>{{ $centro->direccion }} </td>
                                 <td>{{ $centro->telefono }} </td>
                                 <td>{{ $centro->tipo_centro->tipo }} </td>
                                 <td class="text-center">
                                     <button type="button" name="edit" class="btn btn-info btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="centros/{{ $centro->id }}/edit" data-title="Actualizar Centro">Editar</button>
                                     {!!Form::open(['route' => ['admin.centros.destroy', $centro->id], 'method' => 'DELETE', 'class' => 'deleteForm'])!!}
                                        {!!Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm'])!!}
                                     {!!Form::close()!!}
                                 </td>

                             </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </aside><!-- /.right-side -->

    @include('admin.partials.modal')
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!!Html::script("js/datatables/jquery.dataTables.js")!!}
    {!!Html::script("js/datatables/dataTables.bootstrap.js")!!}
    {!!Html::script("js/admin/general.js")!!}

    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": false,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": false
            });
        });
    </script>
@endsection
