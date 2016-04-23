<div class="form-group">
	<label for="">Nombre</label>
	{!!Form::text('centro', null, array('class' => 'form-control', 'placeholder' => 'Inserta el Nombre del centro'))!!}
</div>
<div class="form-group">
	<label for="">Direccion</label>
	{!!Form::text('direccion', null, array('class' => 'form-control', 'placeholder' => 'Inserta la direccion del centro'))!!}
</div>

<div class="form-group">
	<label for="">Telefono</label>
	{!!Form::text('telefono', null, array('class' => 'form-control', 'placeholder' => 'Inserta el telefono del centro'))!!}
</div>

<div class="form-group">
	{!!Form::label('tipo_centro_id','Tipo de Centro:')!!}
	{!!Form::select('tipo_centro_id', $type, null,['class' => 'form-control'])!!}
</div>
