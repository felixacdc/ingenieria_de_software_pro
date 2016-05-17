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
            <th>No. de celular</th>
        </tr>
    </thead>
    <tbody>
      {{-- @foreach($dataQuery as  $key => $elemnt)
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
     @endforeach --}}

       @foreach($patients as  $key => $patient)
           <tr>
               <td>{{ $key+1 }} </td>
               <td>{{ $patient->nombre_paciente }} </td>
               <td>{{ $patient->edad_paciente }} </td>
               <td>{{ $patient->pueblo_paciente }} </td>
               <td>{{ $patient->escolaridad_paciente }} </td>
               <td>{{ $patient->ocupacion_paciente }} </td>
               <td>{{ $patient->nombre_comunidad }} </td>
               <td>{{ $patient->dpi_paciente_com_esp }} </td>
           </tr>
       @endforeach
    </tbody>
</table>
