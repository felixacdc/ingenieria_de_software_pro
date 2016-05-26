@include('admin.reports.layouts.formDate')

<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>No. Registro</th>
            <th>Nombre Paciente</th>
            <th>Edad</th>
            <th>Pueblo</th>
            <th>Municipio</th>
            @yield('name')
            <th>Fecha de creación</th>
        </tr>
    </thead>
    @yield('tbody')
</table>
