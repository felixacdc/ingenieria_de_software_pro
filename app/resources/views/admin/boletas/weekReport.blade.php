@extends('layouts.layoutAdmin')

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Reporte
                <small>Reporte Semanal</small>
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
                            <div class="col-md-6"><h3 class="box-title">Reporte Semanal</h3></div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  @include('admin.boletas.partials.contentWeekReport')
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section>
    </aside>
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!!Html::script("js/datatables/jquery.dataTables.js")!!}
    {!!Html::script("js/datatables/dataTables.bootstrap.js")!!}

    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
        });
    </script>
@endsection
