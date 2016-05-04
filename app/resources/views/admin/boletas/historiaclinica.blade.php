<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Historia Clínica General</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('cdato1','Diabetes:')!!}
                	{!!Form::select('cdato1', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('cdato2','Enfermedad renal:')!!}
                	{!!Form::select('cdato2', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('cdato3','Enfermedad del corazón:')!!}
                	{!!Form::select('cdato3', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('cdato4','Hipertensión arterial:')!!}
                	{!!Form::select('cdato4', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('cdato5','Consumo de drogas incluido alcohol y tabaco:')!!}
                	{!!Form::select('cdato5', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('cdato6','Cualquier otra enfermedad o afección médica severa:')!!}
                	{!!Form::select('cdato6', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    {!!Form::label('cdato7','Por favor, especifique::')!!}
                	{!!Form::textarea('cdato7', null, array('class' => 'form-control', 'placeholder' => 'Nombre de la embarazada', 'rows' => '4', 'cols' => '50', 'required' => 'required'))!!}
                </div>
            </div>
            {{-- {!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!} --}}
        </div>
    </div>
</div>
