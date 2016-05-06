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
				},
                escolaridad_paciente: {
                    required: true
                },
                ocupacion_paciente: {
                    required: true
                },
				distancia_se_si_cercana: {
					required: true
				},
                tiempo_para_llegar: {
                    required: true
                },
                nombre_comunidad: {
                    required: true
                },
				dpi_paciente_com_esp: {
					required: true
				},
                fecha_ultima_regla: {
                    required: true
                },
                fecha_probable_parto: {
                    required: true
                },
				no_embarazos: {
					required: true
				},
                no_partos: {
                    required: true
                },
                no_cesarias: {
                    required: true
                },
				no_abortos: {
					required: true
				},
                no_hijos_vivos: {
                    required: true
                },
                no_hijos_muertos: {
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
				},
                escolaridad_paciente: {
                    required: "Por favor ingrese la escolaridad de la paciente."
                },
                ocupacion_paciente: {
                    required: "Por favor ingrese la ocupacion de la paciente."
                },
				distancia_se_si_cercana: {
					required: "Por favor ingrese la distancia en KM al servicio de salud más cercano."
				},
                tiempo_para_llegar: {
                    required: "Por favor ingrese el tiempo en horas para llegar."
                },
                nombre_comunidad: {
                    required: "Por favor ingrese el nombre de la comunidad."
                },
				dpi_paciente_com_esp: {
					required: "Por favor ingrese el No. de celular de señora, pareja o comunitario."
				},
                fecha_ultima_regla: {
                    required: "Por favor ingrese la fecha última regla."
                },
                fecha_probable_parto: {
                    required: "Por favor ingrese la fecha probable de parto."
                },
				no_embarazos: {
					required: "Por favor ingrese el No. de embarazos."
				},
                no_partos: {
                    required: "Por favor ingrese el No. de partos."
                },
                no_cesarias: {
                    required: "Por favor ingrese el No. de cesáreas."
                },
				no_abortos: {
					required: "Por favor ingrese el No. de abortos."
				},
                no_hijos_vivos: {
                    required: "Por favor ingrese el No. de hijos vivos."
                },
                no_hijos_muertos: {
                    required: "Por favor ingrese el No. de hijos muertos."
                }
            },
			submitHandler: function(form) {
				$("#createBoleta .btn-primary").prop('disabled', true);
				form.submit();
			}
    });

});
