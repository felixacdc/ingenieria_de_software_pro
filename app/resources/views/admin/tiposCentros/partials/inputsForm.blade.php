<div class="form-group">
	<label for="">Tipo de Centro</label>
	{!!Form::text('tipo', null, array('class' => 'form-control', 'placeholder' => 'Inserte el Tipo de Centro', 'required' => 'required'))!!}
</div>

<script type="text/javascript">
	    $("#createForm, #editForm").validate({
        rules: {
                tipo:
                {
                    required: true
                },

            },
            messages: {
                tipo: {
                    required: "Por favor ingrese este campo."
                },
            },

			submitHandler: function(form) {
				$("#generalModal .btn-primary").prop('disabled', true);
				form.submit();
			}
    });
</script>
