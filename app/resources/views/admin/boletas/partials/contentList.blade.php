<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('children','Seleccione el centro que desa consultar:')!!}
                	{!!Form::select('children', $data, null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
        </div>
    </div>
</div>
