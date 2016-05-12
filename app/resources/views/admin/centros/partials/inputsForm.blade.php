<div class="form-group">
	<label for="">Nombre</label>
	{!!Form::text('centro', null, array('class' => 'form-control', 'placeholder' => 'Inserta el Nombre del centro', 'required' => 'required'))!!}
</div>
<div class="form-group">
	<label for="">Dirección</label>
	{!!Form::text('direccion', null, array('class' => 'form-control', 'placeholder' => 'Inserta la dirección del centro', 'required' => 'required'))!!}
</div>

<div class="form-group">
	<label for="">Teléfono</label>
	{!!Form::text('telefono', null, array('class' => 'form-control', 'placeholder' => 'Inserta el teléfono del centro'))!!}
</div>

<div class="form-group">
	{!!Form::label('tipo_centro_id','Tipo de Centro:')!!}
	{!!Form::select('tipo_centro_id', $type, null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('distrito','Es un distrito:')!!} <br>
	{!!Form::radio('distrito', true, true)!!}&nbsp;&nbsp;
	<label>Si</label>&nbsp;&nbsp;
	{!!Form::radio('distrito', false)!!}&nbsp;&nbsp;
	<label>No</label>
</div>

<div class="form-group" id="divFather">
	{!!Form::label('padre','Distrito:')!!}
	{!!Form::select('padre', $fathers, null, ['class' => 'form-control'])!!}
</div>

<script type="text/javascript">
	$(document).ready(function () {
		hiddenFather();
		$('input:radio[name=distrito]').change(hiddenFather);
	});

	function hiddenFather(){
		if( $('input:radio[name=distrito]:checked').val() == true )
			$("#divFather").fadeOut();
		else
			$("#divFather").fadeIn();

	}

    $("#createForm, #editForm").validate({
        rules: {
                centro: {
                    required: true
                },
                direccion: {
                    required: true
                },
				telefono: {
					digits: true,
			        minlength: 8,
					maxlength: 8
				},
                tipo_centro_id: {
                    required: true
                },
				padre: {
					required: true
				}
            },
            messages: {
                centro: {
                    required: "Por favor ingrese el centro."
                },
                direccion: {
                    required: "Por favor ingrese la dirección."
                },
				telefono: {
					digits: "Por favor ingrese solo numeros",
					minlength: "El teléfono debe contener 8 caracteres.",
					maxlength: "El teléfono debe contener 8 caracteres."
				},
                tipo_centro_id: {
                    required: "Por favor ingrese el tipo de centro."
                },
                padre: {
                    required: "Por favor seleccione un centro."
                }
            },
			submitHandler: function(form) {
				$("#generalModal .btn-primary").prop('disabled', true);
				form.submit();
			}
    });
</script>
