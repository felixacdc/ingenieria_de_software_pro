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
                edad_paciente: {
                    required: true,
                    digits: true
                },
                edad_esposo: {
                    digits: true
                },
				distancia_se_si_cercana: {
					required: true,
                    digits: true
				},
                tiempo_para_llegar: {
                    required: true,
                    digits: true
                },
                fecha_ultima_regla: {
                    required: true,
                    date: true
                },
                fecha_probable_parto: {
                    required: true,
                    date: true
                },
				no_embarazos: {
					required: true,
                    digits: true
				},
                no_partos: {
                    required: true,
                    digits: true
                },
                no_cesarias: {
                    required: true,
                    digits: true
                },
				no_abortos: {
					required: true,
                    digits: true
				},
                no_hijos_vivos: {
                    required: true,
                    digits: true
                },
                no_hijos_muertos: {
                    required: true,
                    digits: true
                }
            },
            messages: {
                nombre_paciente: {
                    required: "Por favor ingrese el nombre de la paciente."
                },
                edad_paciente: {
                    required: "Por favor ingrese la edad de la paciente.",
                    digits: "Por favor ingrese solo numeros"
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
                edad_esposo: {
                    digits: "Por favor ingrese solo numeros"
                },
				distancia_se_si_cercana: {
					required: "Por favor ingrese la distancia en KM al servicio de salud más cercano.",
                    digits: "Por favor ingrese solo numeros"
				},
                tiempo_para_llegar: {
                    required: "Por favor ingrese el tiempo en horas para llegar.",
                    digits: "Por favor ingrese solo numeros"
                },
                nombre_comunidad: {
                    required: "Por favor ingrese el nombre de la comunidad."
                },
				dpi_paciente_com_esp: {
					required: "Por favor ingrese el No. de celular de señora, pareja o comunitario."
				},
                fecha_ultima_regla: {
                    required: "Por favor ingrese la fecha última regla.",
                    date: "Por favor ingrese una fecha"
                },
                fecha_probable_parto: {
                    required: "Por favor ingrese la fecha probable de parto.",
                    date: "Por favor ingrese una fecha"
                },
				no_embarazos: {
					required: "Por favor ingrese el No. de embarazos.",
                    digits: "Por favor ingrese solo numeros"
				},
                no_partos: {
                    required: "Por favor ingrese el No. de partos.",
                    digits: "Por favor ingrese solo numeros"
                },
                no_cesarias: {
                    required: "Por favor ingrese el No. de cesáreas.",
                    digits: "Por favor ingrese solo numeros"
                },
				no_abortos: {
					required: "Por favor ingrese el No. de abortos.",
                    digits: "Por favor ingrese solo numeros"
				},
                no_hijos_vivos: {
                    required: "Por favor ingrese el No. de hijos vivos.",
                    digits: "Por favor ingrese solo numeros"
                },
                no_hijos_muertos: {
                    required: "Por favor ingrese el No. de hijos muertos.",
                    digits: "Por favor ingrese solo numeros"
                },
                adato1: {
                    required: "Por favor seleccione una opción."
                },
				adato2: {
					required: "Por favor seleccione una opción."
				},
                adato3: {
                    required: "Por favor seleccione una opción."
                },
                adato4: {
                    required: "Por favor seleccione una opción."
                },
				adato5: {
					required: "Por favor seleccione una opción."
				},
                adato6: {
                    required: "Por favor seleccione una opción."
                },
                adato7: {
                    required: "Por favor seleccione una opción."
                },
                bdato1: {
                    required: "Por favor seleccione una opción."
                },
				bdato2: {
					required: "Por favor seleccione una opción."
				},
                bdato3: {
                    required: "Por favor seleccione una opción."
                },
                bdato4: {
                    required: "Por favor seleccione una opción."
                },
				bdato5: {
					required: "Por favor seleccione una opción."
				},
                bdato6: {
                    required: "Por favor seleccione una opción."
                },
                bdato7: {
                    required: "Por favor seleccione una opción."
                },
                bdato8: {
                    required: "Por favor seleccione una opción."
                },
                bdato9: {
                    required: "Por favor seleccione una opción."
                },
				bdato10: {
					required: "Por favor seleccione una opción."
				},
                bdato11: {
                    required: "Por favor seleccione una opción."
                },
                bdato12: {
                    required: "Por favor seleccione una opción."
                },
                cdato1: {
                    required: "Por favor seleccione una opción."
                },
				cdato2: {
					required: "Por favor seleccione una opción."
				},
                cdato3: {
                    required: "Por favor seleccione una opción."
                },
                cdato4: {
                    required: "Por favor seleccione una opción."
                },
				cdato5: {
					required: "Por favor seleccione una opción."
				},
                cdato6: {
                    required: "Por favor seleccione una opción."
                }
            },
			submitHandler: function(form) {
				$("#createBoleta .btn-primary").prop('disabled', true);
				form.submit();
			}
    });

});
