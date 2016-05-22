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

    @yield('condition')

  {!!Form::close()!!}
</div>