@if( count($errors) > 0 )
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="alert alert-danger alert-dismissable homeloader wow animated fadeInDown">
                <i class="fa fa-ban"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Oh!</strong> Por favor corrige los siguientes errores.<br>

                <ul>
                  @if( Auth::user()->state == 0 )
                    {{$e->'Usuario de baja'}}
                    <li>{{ $e }}</li>
                  @else
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
@endif
