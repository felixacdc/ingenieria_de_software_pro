@extends('layouts.layoutAdmin')

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              Usuarios
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
                              <div class="col-md-6"><h3 class="box-title">Usuarios</h3></div>
                              <div class="col-md-6  text-right"><button type="button" name="create" class="btn btn-primary loadModal" data-toggle='modal' data-target='#generalModal' data-url="users/create " data-title="Crear Usuario">Crear Usuario</button></div>
                          </div>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Correo Electrónico</th>
                                    <th>Centro</th>
                                    <th>Tipo Usuario</th>
                                    <th>Estado</th>
                                    <th>Operaciones</th>

                                </tr>
                            </thead>
                            <tbody>
                              @foreach($data as  $key => $usuario)
                                 <tr>
                                     <td>{{ $key+1 }} </td>
                                     <td>{{ $usuario->user }} </td>
                                     <td>{{ $usuario->name }} </td>
                                     <td>{{ $usuario->phone }} </td>
                                     <td>{{ $usuario->email }} </td>
                                     <td>{{ $usuario->centro->centro }} </td>
                                     <td>{{ $usuario->tipo->tipo }} </td>
                                     @if($usuario->state==0 )
                                     <td class="baja">De baja</td>
                                     @else
                                     <td>Activo</td>
                                     @endif
                                     <td class="text-center">
                                      <button type="button" name="edit" class="btn btn-info btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="users/{{ $usuario->id }}/edit" data-title="Actualizar Usuario">Editar</button>
                                      @if($usuario->state==0)
                                      <button type="button" name="delete" class="btn btn-success btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="users/{{ $usuario->id }}" data-title="Activar Usuario">Activar</button>
                                      @else
                                      <button type="button" name="delete" class="btn btn-danger btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="users/{{ $usuario->id }}" data-title="Eliminar Usuario">Eliminar</button>
                                      @endif
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
    {!!Html::script("js/jquery.validate.js")!!}

    <!-- page script -->
    <script type="text/javascript">
        $(function() {
            $("#example1").dataTable();
        });
    </script>
@endsection
