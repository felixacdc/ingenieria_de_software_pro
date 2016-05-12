<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            <th>Centro</th>
            <th>antecedentes</th>
            <th>embarazo_actual</th>
            <th>historia_clinica_general</th>
            <th>Conclusion</th>
        </tr>
    </thead>
    <tbody>
      @foreach($patients as  $key => $patient)
         <tr>
             <td>{{ $key+1 }} </td>
             <td>{{ $patient->nombre_paciente }} </td>
             <td>{{ $patient->edad_paciente }} </td>
             <td>{{ $patient->pueblo_paciente }} </td>
             <td>{{ $patient->escolaridad_paciente }} </td>
             <td>{{ $patient->ocupacion_paciente }} </td>
             <td>
                 @if($patient->antecedentes)
                    {{ $patient->antecedentes->dato1 }}
                 @endif
             </td>
             <td>
                 @if($patient->embarazoActual)
                    {{ $patient->embarazoActual->dato1 }}
                 @endif
             </td>
             <td>
                 @if($patient->historiaClinica)
                    {{ $patient->historiaClinica->dato1 }}
                 @endif
             </td>
             <td>
                 @if($patient->conclusion)
                    {{ $patient->conclusion->fecha }}
                 @endif
             </td>
         </tr>
     @endforeach
    </tbody>
</table>
