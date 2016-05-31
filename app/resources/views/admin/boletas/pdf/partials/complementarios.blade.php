<div class="boletaBody">
  <div class="medicosTitle">
    <strong>Datos Complementarios</strong>
  </div>
  <div class="boletaBodyLeft">
    <div>
      <div class="label"><strong>Distancia al SS más cercano:</strong></div>
      <div class="input"><input type = "text" value = "{{$data->distancia_se_si_cercana}} Km."></div>
    </div>
    <div>
      <div class="label"><strong>Tiempo en horas para llegar:</strong></div>
      <div class="input"><input type = "text" value = "{{$data->tiempo_para_llegar}} Hrs."></div>
    </div>
    <div>
      <div class="label"><strong>Nombre de la comunidad:</strong></div>
      <div class="input"><input type = "text" value = "{{$data->nombre_comunidad}}"></div>
    </div>
    <div>
      <div class="label"><strong>Celular de señora, pareja o comunitario:</strong> </div>
      <div class="input"><input type = "text" value = "{{$data->dpi_paciente_com_esp}}"></div>
    </div>
    <div>
      <div class="label"><strong>Municipio:</strong> </div>
      <div class="input"><input type = "text" value = "{{$data->municipio}}"></div>
    </div>
    <div>
      <div class="label"><strong>Fecha última regla:</strong></div>
      <div class="input"><input type = "text" value = "{{ date("d/m/Y", strtotime($data ->fecha_ultima_regla)) }}"></div>

    </div>
    <div>
      <div class="label"><strong>Fecha probable de parto:</strong></div>
      <div class="input"><input type = "text" value = "{{ date("d/m/Y", strtotime($data ->fecha_probable_parto)) }}"></div>
    </div>

  </div>
  <div class="boletaBodyRight">
    <div>
      <div class="label"><strong>No. de embarazos:</strong></div>
      <div class="input"><input type = "text" value = "{{$data->no_embarazos}} Embarazos"></div>
    </div>
    <div>
      <div class="label"><strong>No. de partos:</strong> </div>
      <div class="input"><input type = "text" value = "{{$data->no_partos}} Partos"></div>
    </div>
    <div>
      <div class="label"><strong>No. de cesáreas:</strong></div>
      <div class="input"><input type = "text" value = "{{$data->no_cesarias}} Cesáreas"></div>
    </div>
    <div>
      <div class="label"><strong>No. de abortos:</strong> </div>
      <div class="input"><input type = "text" value = "{{$data->no_abortos}} Abortos"></div>
    </div>
    <div>
      <div class="label"><strong>No. de hijos vivos:</strong> </div>
      <div class="input"><input type = "text" value = "{{$data->no_hijos_vivos}} Hijos Vivos"></div>
    </div>
    <div>
      <div class="label"><strong>No. de hijos muertos:</strong> </div>
      <div class="input"><input type = "text" value = "{{$data->no_hijos_muertos}} Hijos Muertos"></div>
    </div>

  </div>
</div>
