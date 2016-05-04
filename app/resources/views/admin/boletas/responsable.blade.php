<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Persona Responsable</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                	{!!Form::label('ddato1','La presencia de algunas de las características anteriores hace necesaria la evaluación de la paciente por un médico, quien tomara la decisión de referirla o no a otro servicio de mayor complejidad:')!!}
                	{!!Form::select('ddato1', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    {!!Form::label('ddato2','Si la respuesta es SI, será referida a:')!!}
                	{!!Form::text('ddato2', null, array('class' => 'form-control', 'placeholder' => 'Si la respuesta es SI, será referida a'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('fecha_ultima_regla','Fecha  última regla:')!!}
                	{!!Form::date('fecha_ultima_regla', null, array('class' => 'form-control', 'placeholder' => 'Fecha  última regla', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('edad_paciente','Edad en años:')!!}
                	{!!Form::number('edad_paciente', null, array('class' => 'form-control', 'placeholder' => 'Edad en años', 'required' => 'required'))!!}
                </div>
            </div>
        </div>
    </div>
</div>
