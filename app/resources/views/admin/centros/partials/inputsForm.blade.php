<<<<<<< HEAD
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
=======
{!!Form::model($center, array('route' => ['admin.centros.update', $center->id], 'method' => 'PUT'))!!}
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

	<div class="modal-footer">
		{!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>
{!! Form::close() !!}
>>>>>>> 02f4521dfd123663d84a3e675194aac05b51ed5c
