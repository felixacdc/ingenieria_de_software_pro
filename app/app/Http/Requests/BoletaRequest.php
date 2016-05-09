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
            # Validacion Antecedentes
            'adato1' => 'required',
            'adato2' => 'required',
            'adato3' => 'required',
            'adato4' => 'required',
            'adato5' => 'required',
            'adato6' => 'required',
            'adato7' => 'required',
        ];
    }
}
