<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Pueblo</th>
            <th>Escolaridad</th>
            <th>Ocupación</th>
            <th>Nombre de la comunidad</th>
            <th>Fecha de creación</th>
        </tr>
    </thead>
    <tbody>
      @foreach($dataQuery as  $key => $elemnt)
        @foreach($elemnt as $key => $value)
           <tr>
               <td>{{ $key+1 }} </td>
               <td>{{ $value->nombre_paciente }} </td>
               <td>{{ $value->edad_paciente }} </td>
               <td>{{ $value->pueblo_paciente }} </td>
               <td>{{ $value->escolaridad_paciente }} </td>
               <td>{{ $value->ocupacion_paciente }} </td>
               <td>{{ $value->nombre_comunidad }} </td>
               <td>{{ $value->dpi_paciente_com_esp }} </td>
           </tr>
        @endforeach
     @endforeach
    </tbody>
</table>
