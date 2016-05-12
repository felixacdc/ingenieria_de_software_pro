$(document).ready(function () {
var bandera=false;
    /**
    *
    * Funcion Ajax
    *
    **/
    function ValidationEmail(){
      $.ajax({
        url: 'UserExists/' + $( "#correo" ).val(),
        type: "get",
        data: {
           email:  $( "#correo" ).val()
         },
         success: function(response){
           if(response=='si'){
             $("#msg").html('El correo ya esta en Uso');
             $('#msg').css('display', 'block');
             $('#msg').css('color', '#f56954');
           }else {
             bandera=true;
             $('#msg').css('display', 'none');
           }
         }
      });
    }//Fin de la function



    $("#correo").focusout(function(){
        ValidationEmail();
    });

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
                  email: true,

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
                },


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
                            //remote:"ya esta en uso"
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
                if(bandera==true){
                  form.submit();//Envio los datos del formulario
                }
                ValidationEmail();


              }

    });



});
