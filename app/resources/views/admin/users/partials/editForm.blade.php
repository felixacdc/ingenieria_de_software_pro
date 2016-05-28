{!!Form::model($user, array('route' => ['admin.users.update', $user->id], 'method' => 'PUT', 'class' => 'form-validate', 'id' => 'editForm'))!!}

    @include('admin.users.partials.inputsForm')

	<div class="modal-footer">
		{!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>

{!! Form::close() !!}

{!! Form::hidden('id', $user->id, ['id' => 'user_id']) !!}

<script type="text/javascript">

    function valTypeUser(value, element, param) {
      if ( ($('#tipo_usuario_id').val() == 1 && value == 1) || ($('#tipo_usuario_id').val() != 1 && value != 1) ) {
          return true;
      }
      else {
          return false;
      }
    }

    $.validator.addMethod("valTypeUser", valTypeUser, "El centro general solo puede ser asignado a un Super Administrador.");

    $("#editForm").validate({
        rules: {
                user:{
                    required: true
                },
                password: {
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
                            required: true,
                            valTypeUser: true
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
				//$("#generalModal .btn-primary").prop('disabled', true);
        /**
        *
            Ajax Valida Email en editar
        *
        **/
        $.ajax({
          url: 'EmailUpdate/' + $( "#correo" ).val() + '/' + $('#user_id').val(),
          type: "get",
          data:{
             email:  $( "#correo" ).val()
           },
           success: function(response){
             if(response=='si'){
               $("#msg").html('El correo ya esta en Uso');
               $('#msg').css('display', 'inline');
               $('#msg').css('color', '#f56954');

             }//Fin de else Principal
             else{
               alert('hola');
               $('#msg').css('display', 'none');
                //form.submit();
             }
           }
        });

        /**
        *
          Fin de Ajax Email
        *
        **/
				//form.submit();
			}
    });
</script>
