@extends('admin.reports.layouts.layoutContentList')

@section('name')
  <th>{{trans('fields.' . $field)}}</th>
@endsection

@section('tbody')

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

@endsection
