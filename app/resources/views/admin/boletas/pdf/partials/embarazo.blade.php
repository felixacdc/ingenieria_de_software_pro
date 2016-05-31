<div class="boletaBody">
  <div class="medicosTitle">
    <strong>Embarazo Actual</strong>
  </div>
  <div class="boletaBodyLeft">
    <div>
      <div class="label"><strong>Diagnostico o sospecha de embarazo múltiple:</strong></div>
      @if($data->bdato1 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Más de 35 años:</strong></div>
      @if($data->bdato3 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Hemorragia vaginal sin importar cantidad:</strong></div>
      @if($data->bdato5 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Presión arterial diastólica de 90 mm Hg o más durante el registro de datos:</strong> </div>
      @if($data->bdato7 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Desnutrición u obesidad:</strong></div>
      @if($data->bdato9 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Sintomatología urinaria:</strong></div>
      @if($data->bdato11 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>

  </div>
  <div class="boletaBodyRight">
    <div>
      <div class="label"><strong>Menos de 20 años:</strong></div>
      @if($data->bdato2 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Paciente Rh (-):</strong></div>
      @if($data->bdato4 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>VIH positivo o sífilis positivo:</strong></div>
      @if($data->bdato6 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Anemia clínica o de laboratorio:</strong> </div>
      @if($data->bdato8 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Dolor abdominal:</strong></div>
      @if($data->bdato10 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Ictericia:</strong></div>
      @if($data->bdato12 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
  </div>
</div>
