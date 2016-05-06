$(document).ready(function () {

    /**
    *
    * Botones de siguiente y anterior
    *
    **/

    $('.nextButton').click(function () {
        var id = $(this).data( "id" );
        $(".nav-tabs li").removeClass('active');
        $("#" + id).addClass('active');
    });

    /**
    *
    * Validacion de boleta
    *
    **/

    $("#createBoleta").validate({
        rules: {
                nombre_paciente: {
                    required: true
                },
                edad_paciente: {
                    required: true
                },
				pueblo_paciente: {
					required: true
				}
            },
            messages: {
                nombre_paciente: {
                    required: "Por favor ingrese el nombre de la paciente."
                },
                edad_paciente: {
                    required: "Por favor ingrese la edad de la paciente."
                },
				pueblo_paciente: {
					required: "Por favor ingrese el pueblo de la paciente."
				}
            },
			submitHandler: function(form) {
				$("#createBoleta .btn-primary").prop('disabled', true);
				form.submit();
			}
    });

});
