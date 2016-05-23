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
      @foreach($dataBallots as  $key => $elemnt)
        @foreach($elemnt as $key => $ballot)
           <tr>
               <td>{{ $key + 1 }} </td>
               <td>{{ $ballot->nombre_paciente }} </td>
               <td>{{ $ballot->edad_paciente }} </td>
               <td>{{ $ballot->pueblo_paciente }} </td>
               <td>{{ $ballot->escolaridad_paciente }} </td>
               <td>{{ $ballot->ocupacion_paciente }} </td>
               <td>{{ $ballot->nombre_comunidad }} </td>
               <td>{{ $ballot->conclusion->fecha }} </td>
           </tr>
        @endforeach
     @endforeach
    </tbody>
</table>
