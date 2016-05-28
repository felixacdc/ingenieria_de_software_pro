function valTypeUser(value, element, param) {
    if ( ($('#tipo_usuario_id').val() == 1 && value == 1) || ($('#tipo_usuario_id').val() != 1 && value != 1) ) {
        return true;
    }
    else {
        return false;
    }
}

$.validator.addMethod("valTypeUser", valTypeUser, "El centro general solo puede ser asignado a un Super Administrador.");

$(document).ready(function () {
    /**
    *
    * validacion
    *
    **/
    $("#createForm").validate({
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

                email:{
                    email: true,
                },
                phone:{
                    digits: true,
                    minlength: 8,
                    maxlength: 8
                },
                centro_id:{
                    required: true,
                    valTypeUser: true
                },
                tipo_usuario_id: {
                    required: true
                },
            },///Fin de Reglas
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
                centro_id:{
                    required: "Por favor ingrese el Centro al que pertenece"
                },
                tipo_usuario_id:{
                    required: "Por favor ingrese el Tipo de Usuario"
                  }
            },///fin de messages
            submitHandler: function(form){
              $('#msg').css('display', 'none');
              $('#msg2').css('display', 'none');
              $("#createForm .btn-primary").prop('disabled', true);
              /**
              *
                Inicio de Ajax User
              *
              **/
              $.ajax({
                url:  'UserExists/'+ $('#usuario').val(),
                type:  "get",
                success:function(response){
                  if(response=='si'){
                    $("#msg2").html('El Usuario ya esta en Uso');
                    $('#msg2').css('display', 'inline');
                    $('#msg2').css('color', '#f56954');
                    $("#createForm .btn-primary").prop('disabled', false);
                  }else if( $( "#correo" ).val() != "" ){
                    /**
                    *
                        Ajax Valida Email
                    *
                    **/
                    $.ajax({
                      url: 'EmailExists/' + $( "#correo" ).val(),
                      type: "get",
                       success: function(response){
                         if(response=='si'){
                           $("#msg").html('El correo ya esta en Uso');
                           $('#msg').css('display', 'inline');
                           $('#msg').css('color', '#f56954');
                           $("#createForm .btn-primary").prop('disabled', false);
                         }//Fin de else Principal
                         else{

                           $('#msg').css('display', 'none');
                            form.submit();
                         }
                       }
                    });

                    /**
                    *
                      Fin de Ajax Email
                    *
                    **/


                  } else {
                      $("#createForm .btn-primary").prop('disabled', true);
                      form.submit();
                  }

                }
              });
              /**
              *
                Fin de Ajax User
              *
              **/


            }///Fin Funcion Submit
          });



});
