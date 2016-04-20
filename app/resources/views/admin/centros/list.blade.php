@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Inicio
                <small>Estas en la pagina de inicio</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
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
                                                <th>Nombre de Centro</th>
                                                <th>Tipo de Centro</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($data as  $key => $centro)
                                             <tr>
                                                 <td>{{ $key + 1   }}</td>
                                                 <td>{{ $centro->centro }} </td>
                                                 <td>{{ $centro->tipo_centro->tipo }} </td>

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
