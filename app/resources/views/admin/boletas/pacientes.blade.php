<div class="content back-white">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Datos Personales</h2>
            <div class="row">
                <div class="form-group col-md-8">
                    {!!Form::label('nombre_paciente','Nombre de la embarazada:')!!}
                	{!!Form::text('nombre_paciente', null, array('class' => 'form-control', 'placeholder' => 'Nombre de la embarazada', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('edad_paciente','Edad en años:')!!}
                	{!!Form::number('edad_paciente', null, array('class' => 'form-control', 'placeholder' => 'Edad en años', 'required' => 'required'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('pueblo_paciente','Pueblo:')!!}
                	{{-- {!!Form::select('pueblo_paciente', null, null, ['class' => 'form-control'])!!} --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    {!!Form::label('escolaridad_paciente','Escolaridad:')!!}
                	{!!Form::text('escolaridad_paciente', null, array('class' => 'form-control', 'placeholder' => 'Escolaridad', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('ocupacion_paciente','Ocupación:')!!}
                	{!!Form::text('ocupacion_paciente', null, array('class' => 'form-control', 'placeholder' => 'Ocupación', 'required' => 'required'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    {!!Form::label('nombre_esposo','Nombre de esposo o conviviente:')!!}
                	{!!Form::text('nombre_esposo', null, array('class' => 'form-control', 'placeholder' => 'Nombre de esposo o conviviente', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('edad_esposo','Edad en años:')!!}
                	{!!Form::number('edad_esposo', null, array('class' => 'form-control', 'placeholder' => 'Edad de esposo o conviviente', 'required' => 'required'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('pueblo_esposo','Pueblo:')!!}
                	{{-- {!!Form::select('pueblo_paciente', null, null, ['class' => 'form-control'])!!} --}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                	{!!Form::label('escolaridad_esposo','Escolaridad:')!!}
                	{!!Form::text('escolaridad_esposo', null, array('class' => 'form-control', 'placeholder' => 'Escolaridad', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('ocupacion_esposo','Ocupación:')!!}
                	{!!Form::text('ocupacion_esposo', null, array('class' => 'form-control', 'placeholder' => 'Ocupación', 'required' => 'required'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    {!!Form::label('distancia_se_si_cercana','Distancia en KM al servicio de salud más cercano:')!!}
                	{!!Form::number('distancia_se_si_cercana', null, array('class' => 'form-control', 'placeholder' => 'Distancia en KM al servicio de salud más cercano', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                    {!!Form::label('tiempo_para_llegar','Tiempo en horas para llegar:')!!}
                	{!!Form::number('tiempo_para_llegar', null, array('class' => 'form-control', 'placeholder' => 'Tiempo en horas para llegar', 'required' => 'required', 'step' => 'any'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                	{!!Form::label('nombre_comunidad','Nombre de la comunidad:')!!}
                	{!!Form::text('nombre_comunidad', null, array('class' => 'form-control', 'placeholder' => 'Nombre de la comunidad', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-6">
                	{!!Form::label('dpi_pasiente_com_esp','No. de celular de señora, pareja o comunitario:')!!}
                	{!!Form::text('dpi_pasiente_com_esp', null, array('class' => 'form-control', 'placeholder' => 'No. de celular de señora, pareja o comunitario', 'required' => 'required'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                	{!!Form::label('fecha_ultima_regla','Fecha  última regla:')!!}
                	{!!Form::date('fecha_ultima_regla', null, array('class' => 'form-control', 'placeholder' => 'Fecha  última regla', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('fecha_probable_parto','Fecha probable de parto:')!!}
                	{!!Form::date('fecha_probable_parto', null, array('class' => 'form-control', 'placeholder' => 'Fecha probable de parto', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('no_embarazos','No. de embarazos:')!!}
                	{!!Form::number('no_embarazos', null, array('class' => 'form-control', 'placeholder' => 'No. de embarazos', 'required' => 'required'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                	{!!Form::label('no_partos','No. de partos:')!!}
                	{!!Form::number('no_partos', null, array('class' => 'form-control', 'placeholder' => 'No. de partos', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('no_cesarias','No. de cesáreas:')!!}
                	{!!Form::number('no_cesarias', null, array('class' => 'form-control', 'placeholder' => 'No. de cesáreas', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('no_abortos','No. de abortos:')!!}
                	{!!Form::number('no_abortos', null, array('class' => 'form-control', 'placeholder' => 'No. de abortos', 'required' => 'required'))!!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                	{!!Form::label('no_hijos_vivos','No. de hijos vivos:')!!}
                	{!!Form::number('no_hijos_vivos', null, array('class' => 'form-control', 'placeholder' => 'No. de hijos vivos', 'required' => 'required'))!!}
                </div>
                <div class="form-group col-md-4">
                	{!!Form::label('no_hijos_muertos','No. de hijos muertos:')!!}
                	{!!Form::number('no_hijos_muertos', null, array('class' => 'form-control', 'placeholder' => 'No. de hijos muertos', 'required' => 'required'))!!}
                </div>
            </div>
            {{-- {!!Form::submit('Editar', array('class' => 'btn btn-primary'))!!} --}}
        </div>
    </div>
</div>
