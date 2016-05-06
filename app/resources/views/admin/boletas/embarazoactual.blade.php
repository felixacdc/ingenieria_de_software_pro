<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Embarazo Actual</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('bdato1','Diagnostico o sospecha de embarazo múltiple:')!!}
                	{!!Form::select('bdato1', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('bdato2','Menos de 20 años:')!!}
                	{!!Form::select('bdato2', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('bdato3','Más de 35 años:')!!}
                	{!!Form::select('bdato3', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('bdato4','Paciente Rh (-):')!!}
                	{!!Form::select('bdato4', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('bdato5','Hemorragia vaginal sin importar cantidad:')!!}
                	{!!Form::select('bdato5', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('bdato6','VIH positivo o sífilis positivo:')!!}
                	{!!Form::select('bdato6', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('bdato7','Presión arterial diastólica de 90 mm Hg o más durante el registro de datos:')!!}
                	{!!Form::select('bdato7', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('bdato8','Anemia clínica o de laboratorio:')!!}
                	{!!Form::select('bdato8', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('bdato9','Desnutrición u obesidad:')!!}
                	{!!Form::select('bdato9', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('bdato10','Dolor abdominal:')!!}
                	{!!Form::select('bdato10', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('bdato11','Sintomatología urinaria:')!!}
                	{!!Form::select('bdato11', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('bdato12','Ictericia:')!!}
                	{!!Form::select('bdato12', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            {{-- <div class="row">
                <div class="form-group col-md-12 text-right">
                    <a href="#tabData2" data-id="menuItem2" data-toggle="tab" class="btn btn-primary nextButton"><i class="fa fa-arrow-left"></i></a>
                    <a href="#tabData4" data-id="menuItem4" data-toggle="tab" class="btn btn-primary nextButton"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
