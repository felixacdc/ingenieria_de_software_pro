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

<<<<<<< HEAD
            <div class="box">
=======
            <div class="box box-primary">
>>>>>>> 02f4521dfd123663d84a3e675194aac05b51ed5c
                <div class="box-header">
                    <h3 class="box-title">Centros de Salud</h3>
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
<<<<<<< HEAD
                                     <button type="button" name="edit" class="btn btn-info btn-sm" data-toggle='modal' data-target='#editModal' data-url="{{ url('admin') }}" onclick="edit(this)" id="{{ $centro->id }}">Editar</button>
=======
                                     <button type="button" name="edit" class="btn btn-info btn-sm editModal" data-toggle='modal' data-target='#editModal' data-url="centros/{{ $centro->id }}/edit" data-title="Actualizar Centro">Editar</button>
>>>>>>> 02f4521dfd123663d84a3e675194aac05b51ed5c
                                     <button type="button" name="delete" class="btn btn-danger btn-sm">Eliminar</button>
                                 </td>

                             </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </aside><!-- /.right-side -->

    @include('admin.centros.partials.modal')
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!!Html::script("js/datatables/jquery.dataTables.js")!!}
    {!!Html::script("js/datatables/dataTables.bootstrap.js")!!}
    {!!Html::script("js/admin/center.js")!!}

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
