<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Antecedentes Obstétricos</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('adato1','Muerte fetal o muerte neonatal previas:')!!}
                	{!!Form::select('adato1', config('cboOptions'), null, ['class' => 'form-control', 'required' => 'required', 'autocomplete'=>'off'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('adato2','Antecedentes de 3 o más abortos espontáneos consecutivos:')!!}
                	{!!Form::select('adato2', config('cboOptions'), null, ['class' => 'form-control', 'required' => 'required', 'autocomplete'=>'off'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('adato3','Antecedentes de 3 o más gestas:')!!}
                	{!!Form::select('adato3', config('cboOptions'), null, ['class' => 'form-control', 'required' => 'required', 'autocomplete'=>'off'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('adato4','Peso al nacer del último bebe < 2500 g. (5 lb. 8 onz.):')!!}
                	{!!Form::select('adato4', config('cboOptions'), null, ['class' => 'form-control', 'required' => 'required', 'autocomplete'=>'off'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('adato5','Peso al nacer del último bebe > 4500 g. (9 lb. 4 onz.):')!!}
                	{!!Form::select('adato5', config('cboOptions'), null, ['class' => 'form-control', 'required' => 'required', 'autocomplete'=>'off'])!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('adato6','Antecedentes de hipertensión o preclampsia/eclampsia:')!!}
                	{!!Form::select('adato6', config('cboOptions'), null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('adato7','Cirugías previas en el tacto reproductivo (miomectomia, conización, cesáreas o cerclaje cervical):')!!}
                	{!!Form::select('adato7', config('cboOptions'), null, ['class' => 'form-control', 'required' => 'required', 'autocomplete'=>'off'])!!}
                </div>
            </div>
            {{-- <div class="row">
                <div class="form-group col-md-12 text-right">
                    <a href="#tabData1" data-id="menuItem1" data-toggle="tab" class="btn btn-primary nextButton"><i class="fa fa-arrow-left"></i></a>
                    <a href="#tabData3" data-id="menuItem3" data-toggle="tab" class="btn btn-primary nextButton"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
