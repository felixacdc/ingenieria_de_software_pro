<div class="form-group">
	<label for="">Usuario</label>
	{!!Form::text('user', null, array('class' => 'form-control', 'placeholder' => 'Inserte el Usuario', 'required' => 'required'))!!}
</div>

<div class="form-group">
	<label for="">Password</label>
	{!!Form::password('password',  array('class' => 'form-control', 'placeholder' => 'Inserte el Password del usuario'))!!}
</div>

<div class="form-group">
	<label for="">Nombre</label>
	{!!Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Inserte el nombre completo', 'required' => 'required'))!!}
</div>

<div class="form-group">
	<label for="">Direccion</label>
	{!!Form::text('address', null, array('class' => 'form-control', 'placeholder' => 'Inserte la direccion ', 'required' => 'required'))!!}
</div>

<div class="form-group">
	<label for="">Email</label>
	{!!Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Inserte el Correo Electronico'))!!}
</div>

<div class="form-group">
	<label for="">Telefono</label>
	{!!Form::text('phone', null, array('class' => 'form-control', 'placeholder' => 'Telefono del usuario'))!!}
</div>


<div class="form-group">
	{!!Form::label('tipo_usuario_id','Tipo Usuario:')!!}
	{!!Form::select('tipo_usuario_id', $type, null,['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('centro_id','Centro:')!!}
	{!!Form::select('centro_id', $centro, null,['class' => 'form-control'])!!}
</div>
