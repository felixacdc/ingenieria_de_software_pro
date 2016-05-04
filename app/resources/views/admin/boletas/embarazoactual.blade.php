<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Embarazo Actual</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('adato1','Muerte fetal o muerte neonatal previas:')!!}
                	{!!Form::select('adato1', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('adato2','Antecedentes de 3 o más abortos espontáneos consecutivos:')!!}
                	{!!Form::select('adato2', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('adato3','Antecedentes de 3 o más gestas:')!!}
                	{!!Form::select('adato3', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('adato4','Peso al nacer del último bebe < 2500 g. (5 lb. 8 onz.):')!!}
                	{!!Form::select('adato4', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('adato5','Peso al nacer del último bebe > 4500 g. (9 lb. 4 onz.):')!!}
                	{!!Form::select('adato5', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('adato6','Antecedentes de hipertensión o preclampsia/eclampsia:')!!}
                	{!!Form::select('adato6', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('adato7','Cirugías previas en el tacto reproductivo (miomectomia, conización, cesáreas o cerclaje cervical):')!!}
                	{!!Form::select('adato7', ['0' => 'No', '1' => 'Si'], null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            {{-- {!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!} --}}
        </div>
    </div>
</div>
