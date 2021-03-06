<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Datos Personales</h2>
            <hr>
            <div class="row">
              <div class="form-group col-md-4">
                  {!!Form::label('no_registro','No. de Registro:')!!}
                  {!!Form::text('no_registro', null, array('class' => 'form-control', 'placeholder' => 'No. de Registro', 'required' => 'required', 'autocomplete'=>'off'))!!}
              </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    {!!Form::label('nombre_paciente','Nombre de la embarazada:')!!}
                	{!!Form::text('nombre_paciente', null, array('class' => 'form-control', 'placeholder' => 'Nombre de la embarazada', 'required' => 'required', 'autocomplete'=>'off'))!!}
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('edad_paciente','Edad en años:')!!}
                	{!!Form::number('edad_paciente', null, array('class' => 'form-control', 'placeholder' => 'Edad en años', 'required' => 'required', 'autocomplete'=>'off'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    {!!Form::label('ocupacion_paciente','Ocupación:')!!}
                  {!!Form::text('ocupacion_paciente', null, array('class' => 'form-control', 'placeholder' => 'Ocupación', 'required' => 'required', 'autocomplete'=>'off'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('pueblo_paciente','Pueblo:')!!}
                	{!!Form::select('pueblo_paciente', config('pueblos'), null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    {!!Form::label('escolaridad_paciente','Escolaridad:')!!}
                	{!!Form::text('escolaridad_paciente', null, array('class' => 'form-control', 'placeholder' => 'Escolaridad', 'required' => 'required', 'autocomplete'=>'off'))!!}
                </div>

            </div>
            <h2>Datos Conyuge</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-8">
                    {!!Form::label('nombre_esposo','Nombre de esposo o conviviente:')!!}
                	{!!Form::text('nombre_esposo', null, array('class' => 'form-control', 'placeholder' => 'Nombre de esposo o conviviente', 'autocomplete'=>'off'))!!}
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('edad_esposo','Edad en años:')!!}
                	{!!Form::number('edad_esposo', null, array('class' => 'form-control', 'placeholder' => 'Edad de esposo o conviviente', 'autocomplete'=>'off'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                  {!!Form::label('ocupacion_esposo','Ocupación:')!!}
                  {!!Form::text('ocupacion_esposo', null, array('class' => 'form-control', 'placeholder' => 'Ocupación', 'autocomplete'=>'off'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('pueblo_esposo','Pueblo:')!!}
                	{!!Form::select('pueblo_esposo', config('pueblos'), null, ['class' => 'form-control'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                	{!!Form::label('escolaridad_esposo','Escolaridad:')!!}
                	{!!Form::text('escolaridad_esposo', null, array('class' => 'form-control', 'placeholder' => 'Escolaridad', 'autocomplete'=>'off'))!!}
                </div>
            </div>
            <h2>Datos Complementarios</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                    {!!Form::label('distancia_se_si_cercana','Distancia en KM al servicio de salud más cercano:')!!}
                	{!!Form::number('distancia_se_si_cercana', null, array('class' => 'form-control', 'placeholder' => 'Distancia en KM al servicio de salud más cercano', 'required' => 'required', 'step' => 'any', 'autocomplete'=>'off'))!!}
                </div>
                <div class="form-group col-md-6">
                    {!!Form::label('tiempo_para_llegar','Tiempo en horas para llegar:')!!}
                	{!!Form::number('tiempo_para_llegar', null, array('class' => 'form-control', 'placeholder' => 'Tiempo en horas para llegar', 'required' => 'required', 'step' => 'any', 'autocomplete'=>'off'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('nombre_comunidad','Nombre de la comunidad:')!!}
                	{!!Form::text('nombre_comunidad', null, array('class' => 'form-control', 'placeholder' => 'Nombre de la comunidad', 'required' => 'required', 'autocomplete'=>'off'))!!}
                </div>
                <div class="form-group col-md-6">
                	{!!Form::label('dpi_pasiente_com_esp','No. DPI de señora, pareja o comunitario:')!!}
                	{!!Form::text('dpi_paciente_com_esp', null, array('class' => 'form-control', 'placeholder' => 'No. de celular de señora, pareja o comunitario', 'required' => 'required', 'autocomplete'=>'off'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  {!!Form::label('municipio','Municipio:')!!}
                  {!!Form::select('municipio', config('municipiosSelect'), null, ['class' => 'form-control', 'required' => 'required'])!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                	{!!Form::label('fecha_ultima_regla','Fecha  última regla:')!!}
                	{!!Form::date('fecha_ultima_regla', null, array('class' => 'form-control', 'placeholder' => 'Fecha  última regla', 'required' => 'required', 'id' => 'fecha_ultima_regla'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('fecha_probable_parto','Fecha probable de parto:')!!}
                	{!!Form::date('fecha_probable_parto', null, array('class' => 'form-control', 'placeholder' => 'Fecha probable de parto', 'required' => 'required', 'id' => 'fecha_probable_parto'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('no_embarazos','No. de embarazos:')!!}
                	{!!Form::number('no_embarazos', null, array('class' => 'form-control', 'placeholder' => 'No. de embarazos', 'required' => 'required', 'id' => 'no_embarazos', 'autocomplete'=>'off'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                	{!!Form::label('no_partos','No. de partos:')!!}
                	{!!Form::number('no_partos', null, array('class' => 'form-control', 'placeholder' => 'No. de partos', 'required' => 'required', 'id' => 'no_partos', 'autocomplete'=>'off'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('no_cesarias','No. de cesáreas:')!!}
                	{!!Form::number('no_cesarias', null, array('class' => 'form-control', 'placeholder' => 'No. de cesáreas', 'required' => 'required', 'id' => 'no_cesarias', 'autocomplete'=>'off'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('no_abortos','No. de abortos:')!!}
                	{!!Form::number('no_abortos', null, array('class' => 'form-control', 'placeholder' => 'No. de abortos', 'required' => 'required', 'id' => 'no_abortos', 'autocomplete'=>'off'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                	{!!Form::label('no_hijos_vivos','No. de hijos vivos:')!!}
                	{!!Form::number('no_hijos_vivos', null, array('class' => 'form-control', 'placeholder' => 'No. de hijos vivos', 'required' => 'required', 'id' => 'no_hijos_vivos', 'autocomplete'=>'off'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('no_hijos_muertos','No. de hijos muertos:')!!}
                	{!!Form::number('no_hijos_muertos', null, array('class' => 'form-control', 'placeholder' => 'No. de hijos muertos', 'required' => 'required', 'id' => 'no_hijos_muertos', 'autocomplete'=>'off'))!!}
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="centro_id" value="{{Auth::user()->centro_id}}">
            {{-- <div class="row">
                <div class="form-group col-md-12 text-right">
                    <a href="#tabData2" data-id="menuItem2" data-toggle="tab" class="btn btn-primary nextButton"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
