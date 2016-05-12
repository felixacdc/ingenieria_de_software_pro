{!!Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createForm'])!!}
    @include('admin.users.partials.inputsForm')
    <div class="modal-footer">
		{!!Form::submit('Registrar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>
{!!Html::script("js/admin/validateEmail.js")!!}
{!!Form::close()!!}



<script type="text/javascript">

</script>
