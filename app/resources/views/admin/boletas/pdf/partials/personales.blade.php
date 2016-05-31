<div class="boletaHeader">
  <div class="boletaTitle">
    <strong>BOLETA DE REFERENCIA</strong>
  </div>
  <div class="boletaNumero">
    Númeo correlativo<input type ="text" value =" 54564">
  </div>
</div>
<div class="boletaBody">
  <div class="medicosTitle">
    <strong>Datos Personales</strong>
  </div>
  <div class="boletaBodyLeft">
    <div>
      <div class="label"><strong>Nombre:</strong></div>
      <div class="input"><input type = "text" value = "{{$data->nombre_paciente}}"></div>
    </div>
    <div>
      <div class="label"><strong>Edad:</strong></div>
      <div class="input"><input type = "text" value = "{{$data->edad_paciente}}"></div>
    </div>
    <div>
      <div class="label"><strong>Ocupacion:</strong></div>
      <div class="input"><input type = "text" value = "{{$data->ocupacion_paciente}}"></div>
    </div>
    <div>
      <div class="label"><strong>Pueblo:</strong> </div>
      <div class="input"><input type = "text" value = "{{$data->pueblo_paciente}}"></div>
    </div>
    <div>
      <div class="label"><strong>Escolaridad:</strong> </div>
      <div class="input"><input type = "text" value = "{{$data->escolaridad_paciente}}"></div>
    </div>
  </div>
  <div class="boletaBodyRight">
    <div>
      <div class="label"><strong>Nombre Cónyugue:</strong></div>
      @if($data->nombre_esposo=="")
      <div class="input"><input type = "text" value = "--------------------"></div>
      @else
      <div class="input"><input type = "text" value = "{{$data->nombre_esposo}}"></div>
      @endif
    </div>

    <div>
    <div class="label"><strong>Edad Cónyuge:</strong></div>
      @if($data->edad_esposo=="")
      <div class="input"><input type = "text" value = "--------------------"></div>
      @else
      <div class="input"><input type = "text" value = "{{$data->edad_esposo}}"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Ocupacion Cónyuge:</strong></div>
      @if($data->ocupacion_esposo=="")
      <div class="input"><input type = "text" value = "--------------------"></div>
      @else
      <div class="input"><input type = "text" value = "{{$data->ocupacion_esposo}}"></div>
      @endif

    </div>
    <div>
      <div class="label"><strong>Pueblo Cónyuge:</strong> </div>
      @if($data->pueblo_esposo=="")
      <div class="input"><input type = "text" value = "--------------------"></div>
      @else
      <div class="input"><input type = "text" value = "{{$data->pueblo_esposo}}"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Escolaridad Cónyuge:</strong> </div>
      @if($data->escolaridad_esposo=="")
      <div class="input"><input type = "text" value = "--------------------"></div>
      @else
      <div class="input"><input type = "text" value = "{{$data->escolaridad_esposo}}"></div>
      @endif
    </div>
  </div>
</div>
