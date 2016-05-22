<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paciente;
use App\antecedentes_obstetricos;
use App\embarazo_actual;
use App\Historia_clinica_general;
use App\Conclusion;

use App\Centro;

class ReportsController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPatient(Request $request, $field)
    {
        if ( !isset($request->begin_date) and !isset($request->final_date) ) {
          $patients = Paciente::where('centro_id', '=', $request->user()->centro_id)
                      ->where($field, '>', 0)
                      ->get();

          $fatherCenter = Centro::where('id', '=', $request->user()->centro_id)->get();
          $childrenCenter = Centro::where('padre', '=', $request->user()->centro_id)->get();

          $dataBallots[$fatherCenter[0]->centro] = $patients;

          foreach ($childrenCenter as $son) {
              $dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)
                      ->where($field, '>', 0)
                      ->get();
          }

        } else {
          $patients = Paciente::where('centro_id', '=', $request->user()->centro_id)
                      ->where($field, '>', 0)
                      ->whereHas('conclusion', function ($query) use ($request) {
                        $query->where('fecha', '>=', $request->begin_date)
                              ->where('fecha', '<=', $request->final_date);
                      })->get();

          $fatherCenter = Centro::where('id', '=', $request->user()->centro_id)->get();
          $childrenCenter = Centro::where('padre', '=', $request->user()->centro_id)->get();

          $dataBallots[$fatherCenter[0]->centro] = $patients;

          foreach ($childrenCenter as $son) {
              $dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)
                      ->where($field, '>', 0)
                      ->whereHas('conclusion', function ($query) use ($request) {
                        $query->where('fecha', '>=', $request->begin_date)
                              ->where('fecha', '<=', $request->final_date);
                      })->get();
          }
        }
        
        return view('admin.reports.index', compact('dataBallots'))
                    ->with('field', $field)
                    ->with('fecha_inicio', $request->begin_date)
                    ->with('fecha_fin', $request->final_date);

    }
}
