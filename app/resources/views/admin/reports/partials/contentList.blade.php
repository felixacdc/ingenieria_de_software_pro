<div class="content">
  {!!Form::open(['route' => Route::current()->getName(), 'method' => 'GET', 'class' => 'form-validate', 'id' => 'weekReport'])!!}
    <div class="row">
      <div class="form-group col-md-6">
        {!!Form::label('begin_date','Fecha inicial:')!!}
        {!!Form::date('begin_date', \Carbon\Carbon::now(), array('class' => 'form-control', 'placeholder' => 'Fecha  última regla', 'required' => 'required'))!!}
      </div>
      <div class="form-group col-md-6">
        {!!Form::label('final_date','Fecha final:')!!}
        {!!Form::date('final_date', \Carbon\Carbon::now(), array('class' => 'form-control', 'placeholder' => 'Fecha  última regla', 'required' => 'required'))!!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12 text-right">
        {!!Form::submit('Buscar', array('class' => 'btn btn-primary'))!!}
      </div>
    </div>
  {!!Form::close()!!}
</div>

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
