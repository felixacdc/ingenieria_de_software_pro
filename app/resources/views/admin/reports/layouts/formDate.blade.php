<div class="content">
  {!!Form::open(['route' => Route::current()->getName(), 'method' => 'GET', 'class' => 'form-validate', 'id' => 'Reports'])!!}
    <div class="row">
      <div class="form-group col-md-3">
        {!!Form::label('begin_date','Fecha inicial:')!!}
        {!!Form::date('begin_date', \Carbon\Carbon::now(), array('class' => 'form-control', 'placeholder' => 'Fecha  última regla', 'required' => 'required', 'id' => 'begin_date'))!!}
      </div>
      <div class="form-group col-md-3">
        {!!Form::label('final_date','Fecha final:')!!}
        {!!Form::date('final_date', \Carbon\Carbon::now(), array('class' => 'form-control', 'placeholder' => 'Fecha  última regla', 'required' => 'required'))!!}
      </div>

      @yield('addItems')
      @yield('centerCondition')

      <div class="form-group col-md-6 text-right">
        <br>
        {!!Form::submit('Buscar', array('class' => 'btn btn-primary'))!!}
      </div>

    </div>
  {!!Form::close()!!}
</div>
