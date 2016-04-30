{!!Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createForm'])!!}

    @include('admin.users.partials.inputsForm')

    <div class="modal-footer">
		{!!Form::submit('Registrar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>

{!!Form::close()!!}


<script type="text/javascript">
    $("#createForm, #editForm").validate({
        rules: {
                user: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
				name: {
                    required: true
                },
				address: {
                    required: true
                },
                email:
                {
                    email: true
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
                    required: "Por favor ingrese la Contraseña.",
                    minlength: "La contraseña debe contener 8 caracteres como mínimo."
                },
				name: {
						required: "Por favor ingrese el Nombre."
				},

				address: {
						required: "Por favor ingrese la Dirección."
				},
                email:
                {
                    email: "Por favor ingrese un correo electrónico valido."
                },
				phone: {
					digits: "Por favor ingrese solo numeros",
					minlength: "El teléfono debe contener 8 caracteres.",
					maxlength: "El teléfono debe contener 8 caracteres."
				},
                centro_id: {
	                required: "Por favor ingrese el Centro al que pertenece"
			    },
				tipo_usuario_id: {
	                required: "Por favor ingrese el Tipo de Usuario"
			    }
            },
		submitHandler: function(form) {
				$("#generalModal .btn-primary").prop('disabled', true);
				form.submit();
			}
    });
</script>
