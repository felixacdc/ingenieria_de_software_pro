{!!Form::model($user, array('route' => ['admin.users.update', $user->id], 'method' => 'PUT', 'class' => 'form-validate', 'id' => 'editForm'))!!}

    @include('admin.users.partials.inputsForm')

	<div class="modal-footer">
		{!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>
{!! Form::close() !!}


<script type="text/javascript">
    $("#createForm, #editForm").validate({
        rules: {
                user: {
                    required: true
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
				name: {
					required: "Por favor ingrese el Nombre."
				},

				address: {
					required: "Por favor ingrese la Direccion."
				},
                email:
                {
                    email: "Por favor ingrese un correo electronico valido."
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
            },
		submitHandler: function(form) {
				$("#generalModal .btn-primary").prop('disabled', true);
				form.submit();
			}
    });
</script>
