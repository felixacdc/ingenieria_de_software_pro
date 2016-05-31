<div class="boletaBody">
  <div class="medicosTitle">
    <strong>Historia Clínica General</strong>
  </div>
  <div class="boletaBodyLeft">
    <div>
      <div class="label"><strong>Diabetes:</strong></div>
      @if($data->cdato1 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Enfermedad del corazón:</strong></div>
      @if($data->cdato3 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Consumo de drogas incluido alcohol y tabaco:</strong></div>
      @if($data->cdato5 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Por favor, especifique:</strong> </div>
      @if($data->cdato7 == "")
        <div class="input"><input type = "text" value ="-------------"></div>
      @else
      <div class="input"><input type = "text" value = "{{$data->cdato7}}"></div>
      @endif
    </div>

  </div>
  <div class="boletaBodyRight">
    <div>
      <div class="label"><strong>Enfermedad renal:</strong> </div>
      @if($data->cdato2 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Hipertensión arterial:</strong></div>
      @if($data->cdato4 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
    <div>
      <div class="label"><strong>Cualquier otra enfermedad o afección médica severa:</strong></div>
      @if($data->cdato6 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif
    </div>
  </div>
</div>
