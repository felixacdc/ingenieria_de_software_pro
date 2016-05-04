<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Antecedentes Obstétricos</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('pueblo_paciente','Muerte fetal o muerte neonatal previas:')!!}
                	{!!Form::select('pueblo_paciente', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('pueblo_paciente','Antecedentes de 3 o más abortos espontáneos consecutivos:')!!}
                	{!!Form::select('pueblo_paciente', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('pueblo_paciente','Antecedentes de 3 o más gestas:')!!}
                	{!!Form::select('pueblo_paciente', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('pueblo_paciente','Peso al nacer del último bebe < 2500 g. (5 lb. 8 onz.):')!!}
                	{!!Form::select('pueblo_paciente', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('pueblo_paciente','Peso al nacer del último bebe > 4500 g. (9 lb. 4 onz.):')!!}
                	{!!Form::select('pueblo_paciente', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('pueblo_paciente','Antecedentes de hipertensión o preclampsia/eclampsia:')!!}
                	{!!Form::select('pueblo_paciente', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('pueblo_paciente','Cirugías previas en el tacto reproductivo (miomectomia, conización, cesáreas o cerclaje cervical):')!!}
                	{!!Form::select('pueblo_paciente', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            {{-- {!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!} --}}
        </div>
    </div>
</div>
