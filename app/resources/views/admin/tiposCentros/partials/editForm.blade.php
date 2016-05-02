{!!Form::model($type, array('route' => ['admin.TiposCentros.update', $type->id], 'method' => 'PUT', 'class' => 'form-validate', 'id' => 'editForm'))!!}

    @include('admin.tiposCentros.partials.inputsForm')

	<div class="modal-footer">
		{!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>
{!! Form::close() !!}
