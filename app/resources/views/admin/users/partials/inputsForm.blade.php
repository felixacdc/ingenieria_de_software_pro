<div class="form-group">
	<label for="">Usuario</label>
	{!!Form::text('user', null, array('class' => 'form-control', 'placeholder' => 'Inserte el Usuario'))!!}
</div>
<div class="form-group">
	<label for="">Password</label>
	{!!Form::password('password',  array('class' => 'form-control', 'placeholder' => 'Inserte el Password del usuario'))!!}
</div>

<div class="form-group">
	<label for="">Nombre</label>
	{!!Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Inserte el nombre completo'))!!}
</div>

<div class="form-group">
	<label for="">Direccion</label>
	{!!Form::text('address', null, array('class' => 'form-control', 'placeholder' => 'Inserte la direccion '))!!}
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


<script type="text/javascript">
    $("#createForm, #editForm").validate({
        rules: {
                user: {
                    required: true
                },
                password: {
                    required: true
                },
								name: {
                    required: true
                },
								address: {
                    required: true
                },

								phone: {
									digits: true,
							        minlength: 8,
									maxlength: 8
								},
				        centro_id: {
                    required: true
                },
								tipo_usuario_id: {
										required: true
								}
            },
            messages: {
                user: {
                    required: "Por favor ingrese el Usuario."
                },

                password: {
                    required: "Por favor ingrese la Contraseña."
                },

								name: {
										required: "Por favor ingrese el Nombre."
								},

								address: {
										required: "Por favor ingrese la Direccion."
								},
								phone: {
									digits: "Por favor ingrese solo numeros",
									minlength: "El telefono debe contener 8 caracteres.",
									maxlength: "El telefono debe contener 8 caracteres."
								},
		            centro_id: {
		                required: "Por favor ingrese el Centro al que pertenece"
				        },

								tipo_usuario_id: {
		                required: "Por favor ingrese el Tipo de Usuario"
				        }
            }
    });
</script>
