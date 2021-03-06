<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BoletaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            # validacion pacientes
            'no_registro' => 'required',
            'nombre_paciente' => 'required',
            'edad_paciente' => 'required|numeric',
            'pueblo_paciente' => 'required',
            'escolaridad_paciente' => 'required',
            'ocupacion_paciente' => 'required',
            'edad_esposo' => 'numeric',
            'distancia_se_si_cercana' => 'required|numeric',
            'tiempo_para_llegar' => 'required|numeric',
            'nombre_comunidad' => 'required',
            'dpi_paciente_com_esp' => 'required',
            'fecha_ultima_regla' => 'required|date',
            'fecha_probable_parto' => 'required|date',
            'no_embarazos' => 'required|numeric',
            'no_partos' => 'required|numeric',
            'no_cesarias' => 'required|numeric',
            'no_abortos' => 'required|numeric',
            'no_hijos_vivos' => 'required|numeric',
            'no_hijos_muertos' => 'required|numeric',
            'user_id' => 'required',
            'centro_id' => 'required',
            # Validacion Antecedentes
            'adato1' => 'required',
            'adato2' => 'required',
            'adato3' => 'required',
            'adato4' => 'required',
            'adato5' => 'required',
            'adato6' => 'required',
            'adato7' => 'required',
            # Validacion Embarazo actual
            'bdato1' => 'required',
            'bdato2' => 'required',
            'bdato3' => 'required',
            'bdato4' => 'required',
            'bdato5' => 'required',
            'bdato6' => 'required',
            'bdato7' => 'required',
            'bdato8' => 'required',
            'bdato9' => 'required',
            'bdato10' => 'required',
            'bdato11' => 'required',
            'bdato12' => 'required',
            # Validacion Historia Clinica
            'cdato1' => 'required',
            'cdato2' => 'required',
            'cdato3' => 'required',
            'cdato4' => 'required',
            'cdato5' => 'required',
            'cdato6' => 'required',
            # Validacion Responsable
            'ddato1' => 'required',
            'dFecha' => 'required|date',
            'dNombre' => 'required',
        ];
    }
}
