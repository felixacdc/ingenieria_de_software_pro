<div class="boletaBody">
  <div class="medicosTitle">
    <strong>Antecedentes Obstétricos</strong>
  </div>
  <div class="boletaBodyLeft">
    <div>
      <div class="label"><strong>Muerte fetal o muerte neonatal previas:</strong></div>
      @if($data->adato1 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif</td>
    </div>
    <div>
      <div class="label"><strong>Antecedentes de 3 o más abortos espontáneos consecutivos:</strong></div>
      @if($data->adato2 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif</td>
    </div>
    <div>
      <div class="label"><strong>Antecedentes de 3 o más gestas:</strong></div>
      @if($data->adato3 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif</td>
    </div>
    <div>
      <div class="label"><strong>Peso al nacer del último bebe < 2500 g. (5 lb. 8 onz.):</strong> </div>
      @if($data->adato4 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif</td>
    </div>

  </div>
  <div class="boletaBodyRight">
    <div>
      <div class="label"><strong>Peso al nacer del último bebe > 4500 g. (9 lb. 4 onz.):</strong> </div>
      @if($data->adato5 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif</td>
    </div>
    <div>
      <div class="label"><strong>Antecedentes de hipertensión o preclampsia/eclampsia:</strong></div>
      @if($data->adato6 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif</td>
    </div>
    <div>
      <div class="label"><strong>Cirugías previas en el tacto reproductivo (miomectomia, conización, cesáreas o cerclaje cervical):</strong></div>
      @if($data->adato7 == 1)
        <div class="input"><input type = "text" value = "Si"></div>
      @else
      <div class="input"><input type = "text" value = "No"></div>
      @endif</td>
    </div>
  </div>
</div>
