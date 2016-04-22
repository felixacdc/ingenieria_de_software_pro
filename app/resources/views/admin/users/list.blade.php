@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Centros de Salud</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Usuario</th>
                                                <th>Nombre</th>
                                                <th>Direccion</th>
                                                <th>Telefono</th>
                                                <th>Centro</th>
                                                <th>Tipo Usuario</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($data as  $key => $usuario)
                                             <tr>
                                                 <td>{{ $key + 1   }}</td>
                                                 <td>{{ $usuario->user }} </td>
                                                 <td>{{ $usuario->name }} </td>
                                                 <td>{{ $usuario->address }} </td>
                                                 <td>{{ $usuario->phone }} </td>


                                             </tr>
                                         @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!!Html::script("js/datatables/jquery.dataTables.js")!!}
    {!!Html::script("js/datatables/dataTables.bootstrap.js")!!}

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
