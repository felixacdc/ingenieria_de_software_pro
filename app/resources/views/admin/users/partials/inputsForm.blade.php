<div class="form-group">
	<label for="">Usuario</label>
	{!!Form::text('user', null, array('class' => 'form-control', 'placeholder' => 'Inserte el Usuario', 'required' => 'required','id'=>'usuario', 'autocomplete'=>'off'))!!}
	<label for="" id="msg2" style="display:none;"></label>
</div>

<div class="form-group">
	<label for="">Password</label>
	{!!Form::password('password',  array('class' => 'form-control', 'placeholder' => 'Inserte el Password del usuario'))!!}
</div>

<div class="form-group">
	<label for="">Nombre</label>
	{!!Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Inserte el nombre completo', 'required' => 'required', 'autocomplete'=>'off'))!!}
</div>

<div class="form-group">
	<label for="">Dirección</label>
	{!!Form::text('address', null, array('class' => 'form-control', 'placeholder' => 'Inserte la dirección ', 'required' => 'required', 'autocomplete'=>'off'))!!}
</div>

<div class="form-group">

	<label for="">Correo Electrónico</label>
	{!!Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Inserte el Correo Electrónico','id'=>'correo', 'autocomplete'=>'off'))!!}
	<label for="" id="msg" style="display:none;"></label>
</div>

<div class="form-group">
	<label for="">Teléfono</label>
	{!!Form::text('phone', null, array('class' => 'form-control', 'placeholder' => 'Teléfono del usuario', 'autocomplete'=>'off'))!!}
</div>


<div class="form-group">
	{!!Form::label('tipo_usuario_id','Tipo Usuario:')!!}
	{!!Form::select('tipo_usuario_id', $type, null,['class' => 'form-control', 'id' => 'tipo_usuario_id'])!!}
</div>

<div class="form-group">
	{!!Form::label('centro_id','Centro:')!!}
	{!!Form::select('centro_id', $centro, null,['class' => 'form-control'])!!}
	{!! Form::radio('state', 1, true, ['class' => 'form-control op']) !!}
</div>
