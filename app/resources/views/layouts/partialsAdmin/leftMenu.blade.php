<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/avatar.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hola, {{ Auth::user()->user }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="{{ url('admin') }}">
                    <i class="fa fa-dashboard"></i> <span> Inicio</span>
                </a>
            </li>
            @if( Auth::user()->tipo_usuario_id == 1 )

                <li>
                    <a href="{{ url('admin/users') }}">
                        <i class="fa fa-user"></i> <span> Crear Usuario</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/centros') }}">
                        <i class="fa fa-bell-o"></i> <span>Centros de Salud</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/TiposCentros') }}">
                        <i class="fa fa-circle-o-notch" aria-hidden="true"></i> <span>Tipos de Centro</span>
                    </a>
                </li>

            @endif

            <li>
                <a href="{{ url('admin/boleta') }}">
                    <i class="fa fa-plus"></i> <span> Crear Boleta</span>
                </a>
            </li>

            <li>
                <a href="{{ url('admin/TiposCentros') }}">
                    <i class="fa fa-list" aria-hidden="true"></i> <span>Registro</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
