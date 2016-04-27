{!!Form::open(['route' => ['admin.centros.destroy', $id], 'method' => 'DELETE'])!!}
    
   {!!Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm'])!!}
{!!Form::close()!!}
