<div class="firmas">
	<div class="firmasLesf">

	</div>
	<div class="firmasRight">

	</div>
	<div class="firmaFoother">
		La presencia de algunas de las características anteriores hace necesaria la evaluación de la paciente por un médico, quien tomara la decisión de referirla o no a otro servicio de mayor complejidad:
	</div>
</div>

<div class="">

    <div class="bodyContra">
        <div class="trileft">
            <div class="leftBodyContra leftBodyContraDo">
                <strong>Nombre del Paciente:</strong>
            </div>
            <div class="rightBodyContra rightBodyContraDos">
                <input type = "text" value = "{{$data->nombre_paciente}}">
            </div>
        </div>
        <div class="tricenter">
					@if($data->ddato1 == 1)
						  Respuesta: <input type = "text" value = "Si">
					@else
					  	Respuesta: <input type = "text" value = "No">
					@endif

        </div>


    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Si la respuesta es SI, será referida a:</strong>
        </div>
        <div class="rightBodyContra">
					@if($data->ddato2 == " ")
							<input type = "text" value = "-------">
					@else
						  <input type = "text" value = "{{$data->ddato2}}">
					@endif
        </div>
    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Fecha:</strong>
        </div>
        <div class="rightBodyContra">
					@if($data->dFecha == " ")
							<input type = "text" value = "-------">
					@else
							<input type = "text" value = "{{$data->dFecha}}">
					@endif
        </div>
    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Nombre:</strong>
        </div>
        <div class="rightBodyContra">
					@if($data->dNombre == " ")
							<input type = "text" value = "-------">
					@else
							<input type = "text" value = "{{$data->dNombre}}">
					@endif
        </div>
    </div>
		<br><br><br><br><br>
    <div class="firmas">
        <div class="firmasLesf firmasLesfDos">
            <input type = "text" value = "*" class = "oculto">
            <div>
                <strong>Nombre y firma y cargo del responsable de la atencion</strong>
            </div>
        </div>
        <div class="firmasRight firmasRightDos">
            <input type = "text"value= "*" class = "oculto">
            <div>
                <strong>Firma</strong>
            </div>
        </div>

    </div>
</div>
