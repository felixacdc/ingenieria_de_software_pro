{!!Form::open(['route' => 'admin.centros.store', 'method' => 'POST', 'class' => 'form-validate', 'id' => 'createForm'])!!}

    @include('admin.centros.partials.inputsForm')

    <div class="modal-footer">
		{!!Form::submit('Registrar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>

{!!Form::close()!!}
