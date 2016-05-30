@extends('admin.reports.layouts.layoutContentList')

@section('addItems')
  <div class="form-group col-md-3">
    {!!Form::label('condition','Condicion:')!!}
    {!!Form::select('condition', config('optionsSelectReports'), null, ['class' => 'form-control', 'required' => 'required'])!!}
  </div>
  <div class="form-group col-md-3">
    {!!Form::label('number','Numero:')!!}
    {!!Form::number('number', null, array('class' => 'form-control', 'placeholder' => 'Numero', 'required' => 'required'))!!}
  </div>
@endsection

@section('centerCondition')
  @if( Auth::user()->tipo_usuario_id == 1 )
    <div class="form-group col-md-6">
      {!!Form::label('searchCenter','Centro:')!!}
      {!!Form::select('searchCenter', $centers, null, ['class' => 'form-control', 'required' => 'required'])!!}
    </div>
  @endif
@endsection

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
             <td>{{ $ballot->no_registro }}</td>
             <td>{{ $ballot->nombre_paciente }} </td>
             <td>{{ $ballot->edad_paciente }} </td>
             <td>{{ $ballot->pueblo_paciente }} </td>
             <td>{{ $ballot->municipio }} </td>
             <td>{{ $ballot->$field }} </td>
             <td>{{ date("d/m/Y", strtotime($ballot->conclusion->fecha)) }} </td>
         </tr>
       @endforeach
     @endforeach
   </tbody>

@endsection
