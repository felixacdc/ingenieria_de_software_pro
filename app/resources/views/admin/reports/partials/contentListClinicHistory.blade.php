@extends('admin.reports.layouts.layoutContentList')

@section('name')
  <th>{{trans('fields.' . $field . 'C')}}</th>
@endsection

@section('centerCondition')
  @if( Auth::user()->tipo_usuario_id == 1 )
    <div class="form-group col-md-6">
      {!!Form::label('searchCenter','Centro:')!!}
      {!!Form::select('searchCenter', $centers, null, ['class' => 'form-control', 'required' => 'required'])!!}
    </div>
  @endif
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
             <td>
               @if( $ballot->historiaClinica->$field == 1 )
                 Si
               @else
                 No
               @endif
             </td>
             <td>{{ $ballot->conclusion->fecha }} </td>
         </tr>
       @endforeach
     @endforeach
   </tbody>

@endsection