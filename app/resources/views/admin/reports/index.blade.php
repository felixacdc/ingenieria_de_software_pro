@extends('layouts.layoutAdmin')

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Reportes
                <small>Datos del reporte</small>
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
                            <div class="col-md-6">
                              <h3 class="box-title">

                                @if( $type == 0 )
                                  {{trans('fields.' . $field)}}
                                @elseif( $type == 1)
                                  {{trans('fields.' . $field . 'A')}}
                                @elseif( $type == 2)
                                  {{trans('fields.' . $field . 'B')}}
                                @elseif( $type == 3)
                                  {{trans('fields.' . $field . 'C')}}
                                @endif

                              </h3>
                            </div>
                            <div class="col-md-6 text-right">
                              {!! Form::open(['route' => 'admin/generate/report/pdf', 'method' => 'GET']) !!}
                                {!! Form::hidden('field', $field) !!}
                                {!! Form::hidden('fecha_inicio', $fecha_inicio) !!}
                                {!! Form::hidden('fecha_fin', $fecha_fin) !!}
                                {!! Form::hidden('condicion', $condicion) !!}
                                {!! Form::hidden('number', $number) !!}
                                {!! Form::hidden('type', $type) !!}
                                {!! Form::submit('Crear PDF', array('class' => 'btn btn-primary')) !!}
                              {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <p style="padding-left: 10px;">
                              @if( isset($condicion) and isset($number) and $type == 0)
                                {{trans('fields.' . $condicion)}}
                                {{ $number }}
                              @endif

                              @if( isset($fecha_inicio) and isset($fecha_fin))
                                del {{ $fecha_inicio }}
                                al {{ $fecha_fin }}
                              @endif

                              @if( isset($actualCenter) )
                                @foreach($centers as $key => $value)
                                  @if( $key == $actualCenter)
                                    <strong> {{ $value }}</strong>
                                  @endif
                                @endforeach
                              @endif
                            </p>
                          </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  @if( $type == 0 )
                    @include('admin.reports.partials.contentListPatients')
                  @elseif( $type == 1)
                    @include('admin.reports.partials.contentListObstetricHistory')
                  @elseif( $type == 2)
                    @include('admin.reports.partials.contentListCurrentPregnancy')
                  @elseif( $type == 3)
                    @include('admin.reports.partials.contentListClinicHistory')
                  @endif
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section>
    </aside>
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    {!!Html::script("js/datatables/jquery.dataTables.js")!!}
    {!!Html::script("js/datatables/dataTables.bootstrap.js")!!}
    {!!Html::script("js/jquery.validate.js")!!}
    {!!Html::script("js/admin/reports.js")!!}

    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
        });
    </script>
@endsection
