<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\BoletaRequest;

use App\Paciente;
use App\antecedentes_obstetricos;
use App\embarazo_actual;
use App\Historia_clinica_general;
use App\Conclusion;

use App\Centro;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->tipo_usuario_id != 1) {
            $patients = Paciente::where('centro_id', '=', $request->user()->centro_id)->get();
            $children = Centro::where('padre', '=', $request->user()->centro_id)->get();

            $dataBallots['father'] = $patients;

            foreach ($children as $son) {
                $dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)->get();
            }

          return view('admin/boletas/list', compact('dataBallots'));
        } else {
          return \back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/boletas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BoletaRequest $request)
    {
        $number = $this::correlativeNumber($request);
        $idPatient = $this::savePatient($request, $number);
        $this::saveObstetricalHistory($request, $idPatient);
        $this::saveCurrentPregnancy($request, $idPatient);
        $this::saveClinicHistory($request, $idPatient);
        $this::saveConclusion($request, $idPatient);

        return redirect('/admin/boleta/create')->with('message', 'Boleta creada correctamente.');
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

    public static function savePatient($request, $number)
    {
        $patient = new Paciente;

        $patient->no_registro = $request->no_registro;
        $patient->no_boleta = $number;
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
        $patient->municipio=$request->municipio;
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
        $patient->save();
        return $patient->id;
    }

    public static function saveObstetricalHistory($request,$idPatient)
    {
        $obstetrical = new antecedentes_obstetricos;

        $obstetrical->dato1 = $request->adato1;
        $obstetrical->dato2 = $request->adato2;
        $obstetrical->dato3 = $request->adato3;
        $obstetrical->dato4 = $request->adato4;
        $obstetrical->dato5 = $request->adato5;
        $obstetrical->dato6 = $request->adato6;
        $obstetrical->dato7 = $request->adato7;
        $obstetrical->pacientes_id = $idPatient;
        $obstetrical->save();
    }

    public static function saveCurrentPregnancy($request, $idPatient)
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
        $currentPregnancy->dato10 = $request->bdato10;
        $currentPregnancy->dato11 = $request->bdato11;
        $currentPregnancy->dato12 = $request->bdato12;
        $currentPregnancy->pacientes_id = $idPatient;

        $currentPregnancy->save();
    }

    public static function saveClinicHistory($request, $idPatient)
    {
        $clinicHistory = new Historia_clinica_general;

        $clinicHistory->dato1 = $request->cdato1;
        $clinicHistory->dato2 = $request->cdato2;
        $clinicHistory->dato3 = $request->cdato3;
        $clinicHistory->dato4 = $request->cdato4;
        $clinicHistory->dato5 = $request->cdato5;
        $clinicHistory->dato6 = $request->cdato6;
        $clinicHistory->dato7 = $request->cdato7;
        $clinicHistory->paciente_id = $idPatient;

        $clinicHistory->save();
    }

    public static function saveConclusion($request, $idPatient)
    {
        $conclusion = new Conclusion;

        $conclusion->evaluacion_medica = $request->ddato1;
        $conclusion->referido_a = $request->ddato2;
        $conclusion->fecha = $request->dFecha;
        $conclusion->nombre = $request->dNombre;
        $conclusion->paciente_id = $idPatient;

        $conclusion->save();
    }

    public function weekReport(Request $request)
    {
      if ($request->user()->tipo_usuario_id != 1) {
        return view('admin/boletas/weekReport');
      } else {
        return \back();
      }
    }

    public function dataWeekReport(Request $request)
    {
      $patients = Paciente::where('centro_id', '=', $request->user()->centro_id)
                  ->whereHas('conclusion', function ($query) use ($request) {
                    $query->where('fecha', '>=', $request->begin_date)
                          ->where('fecha', '<=', $request->final_date);
                  })->get();

      $fatherCenter = Centro::where('id', '=', $request->user()->centro_id)->get();
      $childrenCenter = Centro::where('padre', '=', $request->user()->centro_id)->get();

      $dataBallots[$fatherCenter[0]->centro] = $patients;

      foreach ($childrenCenter as $son) {
          $dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)
                      ->whereHas('conclusion', function ($query) use ($request) {
                        $query->where('fecha', '>=', $request->begin_date)
                              ->where('fecha', '<=', $request->final_date);
                      })->get();
      }

      ini_set('max_execution_time', 600);

      $pdf = \PDF::loadView('admin.boletas.pdf.createpdf',
      [
        'dataBallots' => $dataBallots,
        'request' => $request,
        'actualCenter' => $fatherCenter[0]->centro
      ])->setPaper('Legal')->setOrientation('landscape');

      return $pdf->stream();
    }

    public static function correlativeNumber($request)
    {
      $number = Paciente::where('centro_id', '=', $request->user()->centro_id)->count();
      $number++;
      return $number;
    }
}
