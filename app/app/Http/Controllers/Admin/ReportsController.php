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
    public function showPatient(Request $request, $field, $type = 0)
    {
        if ( !isset($request->begin_date) and !isset($request->final_date) ) {

          switch ($type) {
            case 0:
              $patients = Paciente::where('centro_id', '=', $request->user()->centro_id)
                          ->where($field, '>', 0)
                          ->get();
              break;
            case 1:
              $patients = Paciente::where('centro_id', '=', $request->user()->centro_id)
                          ->whereHas('embarazoActual', function ($query) use ($field){
                            $query->where($field, '=', 1);
                          })->get();
              break;

            default:
              return \back();
              break;
          }

          $fatherCenter = Centro::where('id', '=', $request->user()->centro_id)->get();
          $childrenCenter = Centro::where('padre', '=', $request->user()->centro_id)->get();

          $dataBallots[$fatherCenter[0]->centro] = $patients;

          foreach ($childrenCenter as $son) {
              switch ($type) {
                case 0:
                  $dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)
                          ->where($field, '>', 0)
                          ->get();
                  break;

                case 1:
                  $dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)
                              ->whereHas('embarazoActual', function ($query) use ($field){
                                $query->where($field, '=', 1);
                              })->get();
                  break;
                default:
                  return \back();
                  break;
              }
          }

        } else {

          switch ($type) {
            case 0:
              $patients = Paciente::where('centro_id', '=', $request->user()->centro_id)
                          ->where($field, '>', 0)
                          ->whereHas('conclusion', function ($query) use ($request) {
                            $query->where('fecha', '>=', $request->begin_date)
                                  ->where('fecha', '<=', $request->final_date);
                          })->get();
              break;
            case 1:
              $patients = Paciente::where('centro_id', '=', $request->user()->centro_id)
                          ->whereHas('embarazoActual', function ($query) use ($field){
                            $query->where($field, '=', 1);
                          })
                          ->whereHas('conclusion', function ($query) use ($request) {
                            $query->where('fecha', '>=', $request->begin_date)
                                  ->where('fecha', '<=', $request->final_date);
                          })->get();
              break;
            default:
              return \back();
              break;
          }

          $fatherCenter = Centro::where('id', '=', $request->user()->centro_id)->get();
          $childrenCenter = Centro::where('padre', '=', $request->user()->centro_id)->get();

          $dataBallots[$fatherCenter[0]->centro] = $patients;

          foreach ($childrenCenter as $son) {

            switch ($type) {
              case 0:
                $dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)
                        ->where($field, '>', 0)
                        ->whereHas('conclusion', function ($query) use ($request) {
                          $query->where('fecha', '>=', $request->begin_date)
                                ->where('fecha', '<=', $request->final_date);
                        })->get();
                break;
              case 1:
                $dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)
                            ->whereHas('embarazoActual', function ($query) use ($field){
                              $query->where($field, '=', 1);
                            })
                            ->whereHas('conclusion', function ($query) use ($request) {
                              $query->where('fecha', '>=', $request->begin_date)
                                    ->where('fecha', '<=', $request->final_date);
                            })->get();
                break;
              default:
                return \back();
                break;
            }
          }
        }

        return view('admin.reports.index', compact('dataBallots'))
                    ->with('field', $field)
                    ->with('fecha_inicio', $request->begin_date)
                    ->with('fecha_fin', $request->final_date)
                    ->with('type', $type);

    }

    
}
