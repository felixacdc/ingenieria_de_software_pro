<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>No. Registro</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Pueblo</th>
            <th>Municipio</th>
            <th>Nombre de la comunidad</th>
            <th>Fecha de creación</th>
        </tr>
    </thead>
    <tbody>
      <?php $num = 0; ?>
      @foreach($dataBallots as  $key => $elemnt)
        @foreach($elemnt as $key => $ballot)
           <tr>
               <td>{{ $num = $num +1 }} </td>
               <td>{{ $ballot->no_registro }} </td>
               <td>{{ $ballot->nombre_paciente }} </td>
               <td>{{ $ballot->edad_paciente }} </td>
               <td>{{ $ballot->pueblo_paciente }} </td>
               <td>{{ $ballot->municipio }} </td>
               <td>{{ $ballot->nombre_comunidad }} </td>
               <td>{{ date('d/m/Y', strtotime($ballot->conclusion->fecha)) }} </td>
           </tr>
        @endforeach
     @endforeach
    </tbody>
</table>
