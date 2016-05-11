<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('children','Seleccione el centro que desa consultar:')!!}
                	{!!Form::select('children', $data, null, ['class' => 'form-control'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {!!Form::label('begin_date','Fecha inicial:')!!}
                	{!!Form::date('begin_date', null, array('class' => 'form-control', 'placeholder' => 'Fecha  última regla', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('final_date','Fecha final:')!!}
                	{!!Form::date('final_date', null, array('class' => 'form-control', 'placeholder' => 'Fecha  última regla', 'required' => 'required'))!!}
                </div>
            </div>
            <div class="content-report">

            </div>
            <div class="row">
                <div class="form-group col-md-12 text-right">
                    <a href="#" class="btn btn-primary nextButton">Buscar</a>
                </div>
            </div>
        </div>
    </div>
</div>
