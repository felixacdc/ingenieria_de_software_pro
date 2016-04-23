{!!Form::model($center, array('route' => ['admin.centros.update', $center->id], 'method' => 'PUT'))!!}

    @include('admin.centros.partials.inputsForm')

	<div class="modal-footer">
		{!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!}
		<button type="button" class="btn btn-danger" data-dismiss="modal">cerrar</button>
	</div>
{!! Form::close() !!}
