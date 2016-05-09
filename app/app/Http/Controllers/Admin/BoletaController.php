<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\BoletaRequest;

use App\Paciente;
use App\antecedentes_obstetricos;
use App\embarazo_actual;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/boletas/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BoletaRequest $request)
    {
        // dd($request);
        // $this::savePatient($request);
        // $this::saveObstetricalHistory($request);
        $this::saveCurrentPregnancy($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public static function savePatient($request)
    {
        $patient = new Paciente;

        $patient->nombre_paciente = $request->nombre_paciente;
        $patient->edad_paciente = $request->edad_paciente;
        $patient->pueblo_paciente = $request->pueblo_paciente;
        $patient->escolaridad_paciente = $request->escolaridad_paciente;
        $patient->ocupacion_paciente = $request->ocupacion_paciente;
        $patient->nombre_esposo = $request->nombre_esposo;
        $patient->edad_esposo = $request->edad_esposo;
        $patient->pueblo_esposo = $request->pueblo_esposo;
        $patient->escolaridad_esposo = $request->escolaridad_esposo;
        $patient->ocupacion_esposo = $request->ocupacion_esposo;
        $patient->distancia_se_si_cercana = $request->distancia_se_si_cercana;
        $patient->tiempo_para_llegar = $request->tiempo_para_llegar;
        $patient->nombre_comunidad = $request->nombre_comunidad;
        $patient->dpi_paciente_com_esp = $request->dpi_paciente_com_esp;
        $patient->fecha_ultima_regla = $request->fecha_ultima_regla;
        $patient->fecha_probable_parto = $request->fecha_probable_parto;
        $patient->no_embarazos = $request->no_embarazos;
        $patient->no_partos = $request->no_partos;
        $patient->no_cesarias = $request->no_cesarias;
        $patient->no_abortos = $request->no_abortos;
        $patient->no_hijos_vivos = $request->no_hijos_vivos;
        $patient->no_hijos_muertos = $request->no_hijos_muertos;
        $patient->user_id = $request->user_id;
        $patient->centro_id = $request->centro_id;

        dd($patient);
    }

    public static function saveObstetricalHistory($request)
    {
        $obstetrical = new antecedentes_obstetricos;

        $obstetrical->dato1 = $request->adato1;
        $obstetrical->dato2 = $request->adato2;
        $obstetrical->dato3 = $request->adato3;
        $obstetrical->dato4 = $request->adato4;
        $obstetrical->dato5 = $request->adato5;
        $obstetrical->dato6 = $request->adato6;
        $obstetrical->dato7 = $request->adato7;

        dd($obstetrical);
    }

    public static function saveCurrentPregnancy($request)
    {
        $currentPregnancy = new embarazo_actual;

        $currentPregnancy->dato1 = $request->bdato1;
        $currentPregnancy->dato2 = $request->bdato2;
        $currentPregnancy->dato3 = $request->bdato3;
        $currentPregnancy->dato4 = $request->bdato4;
        $currentPregnancy->dato5 = $request->bdato5;
        $currentPregnancy->dato6 = $request->bdato6;
        $currentPregnancy->dato7 = $request->bdato7;
        $currentPregnancy->dato8 = $request->bdato8;
        $currentPregnancy->dato9 = $request->bdato9;
        $currentPregnancy->dato10 = $request->bdato1;
        $currentPregnancy->dato11 = $request->bdato1;
        $currentPregnancy->dato12 = $request->bdato1;

        dd($currentPregnancy);
    }
}
