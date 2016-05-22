<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Pueblo</th>
            <th>Escolaridad</th>
            <th>Ocupación</th>
            <th>{{trans('fields.' . $field)}}</th>
            <th>Fecha de creación</th>
        </tr>
    </thead>
    <tbody>
      <?php $num = 0; ?>
      @foreach($dataBallots as  $centers => $elemnt)
        @foreach($elemnt as $key => $ballot)
           <tr>
               <td>{{ $num = $num +1 }} </td>
               <td>{{ $ballot->nombre_paciente }} </td>
               <td>{{ $ballot->edad_paciente }} </td>
               <td>{{ $ballot->pueblo_paciente }} </td>
               <td>{{ $ballot->escolaridad_paciente }} </td>
               <td>{{ $ballot->ocupacion_paciente }} </td>
               <td>{{ $ballot->$field }} </td>
               <td>{{ $ballot->conclusion->fecha }} </td>
           </tr>
        @endforeach
     @endforeach
    </tbody>
</table>
