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

class BaseReportsController extends Controller
{
    // Variables iniciales
    protected $request;
    protected $field;
    protected $type;

    // Variables de calculo
    protected $fatherCenter;
    protected $childrenCenter;
    protected $dataBallots;
    protected $patients;
    protected $error;

    // Funcion para asignar valores
    protected function insertData($request, $field, $type)
    {
      $this->request = $request;
      $this->field = $field;
      $this->type = $type;
    }

    // Funcion que optiene los datos de los pacinetes del padre si no se envia un rando de fechas
    protected function queryUndated()
    {
      switch ($this->type) {
        case 0:
          $this->patients = Paciente::where('centro_id', '=', $this->request->user()->centro_id)
                      ->where($this->field, '>', 0)
                      ->get();
          break;
        case 1:
          $this->firstQueryUndated('antecedentes');
          break;
        case 2:
          $this->firstQueryUndated('embarazoActual');
          break;
        case 3:
          $this->firstQueryUndated('historiaClinica');
          break;
        default:
          $this->error = true;
          break;
      }
    }

    // Funcion que optiene los datos de los pacinetes del padre si se envia un rando de fechas
    protected function queryDate()
    {
      switch ($this->type) {
        case 0:
          $this->patients = Paciente::where('centro_id', '=', $this->request->user()->centro_id)
                      ->where($this->field, '>', 0)
                      ->whereHas('conclusion', function ($query) {
                        $query->where('fecha', '>=', $this->request->begin_date)
                              ->where('fecha', '<=', $this->request->final_date);
                      })->get();
          break;
        case 1:
          $this->firstQueryDate('antecedentes');
          break;
        case 2:
          $this->firstQueryDate('embarazoActual');
          break;
        case 3:
          $this->firstQueryDate('historiaClinica');
          break;
        default:
          $this->error = true;
          break;
      }
    }

    // Funcion que optiene los datos del centro del padre y de sus hijos
    protected function queryCenters()
    {
      $this->fatherCenter = Centro::where('id', '=', $this->request->user()->centro_id)->get();
      $this->childrenCenter = Centro::where('padre', '=', $this->request->user()->centro_id)->get();
    }

    // Funcion que optiene los datos de los pacinetes de los hijos del padre si no se envia un rando de fechas
    protected function queryChildren()
    {
      foreach ($this->childrenCenter as $son) {
          switch ($this->type) {
            case 0:
              $this->dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)
                      ->where($this->field, '>', 0)
                      ->get();
              break;

            case 1:
              $this->secondQueryUndated('antecedentes', $son->centro, $son->id);
              break;
            case 2:
              $this->secondQueryUndated('embarazoActual', $son->centro, $son->id);
              break;
            case 3:
              $this->secondQueryUndated('historiaClinica', $son->centro, $son->id);
              break;
            default:
              $this->error = true;
              break;
          }
      }
    }

    // Funcion que optiene los datos de los pacinetes de los hijos del padre si se envia un rando de fechas
    protected function queryDateChildren()
    {
      foreach ($this->childrenCenter as $son) {

        switch ($this->type) {
          case 0:
            $this->dataBallots[$son->centro] = Paciente::where('centro_id', '=', $son->id)
                    ->where($this->field, '>', 0)
                    ->whereHas('conclusion', function ($query) {
                      $query->where('fecha', '>=', $this->request->begin_date)
                            ->where('fecha', '<=', $this->request->final_date);
                    })->get();
            break;
          case 1:
            $this->secondQueryDate('antecedentes', $son->centro, $son->id);
            break;
          case 2:
            $this->secondQueryDate('embarazoActual', $son->centro, $son->id);
            break;
          case 3:
            $this->secondQueryDate('historiaClinica', $son->centro, $son->id);
            break;
          default:
            $this->error = true;
            break;
        }
      }
    }

    // Funciones para optener los datos Genericas
    protected function firstQueryUndated($table)
    {
      $this->patients = Paciente::where('centro_id', '=', $this->request->user()->centro_id)
                  ->whereHas($table, function ($query) {
                    $query->where($this->field, '=', 1);
                  })->get();
    }

    protected function firstQueryDate($table)
    {
      $this->patients = Paciente::where('centro_id', '=', $this->request->user()->centro_id)
                  ->whereHas($table, function ($query){
                    $query->where($this->field, '=', 1);
                  })
                  ->whereHas('conclusion', function ($query){
                    $query->where('fecha', '>=', $this->request->begin_date)
                          ->where('fecha', '<=', $this->request->final_date);
                  })->get();
    }

    protected function secondQueryUndated($table, $nameCenter, $idCenter)
    {
      $this->dataBallots[$nameCenter] = Paciente::where('centro_id', '=', $idCenter)
                  ->whereHas($table, function ($query) {
                    $query->where($this->field, '=', 1);
                  })->get();
    }

    protected function secondQueryDate($table, $nameCenter, $idCenter)
    {
      $this->dataBallots[$nameCenter] = Paciente::where('centro_id', '=', $idCenter)
                  ->whereHas($table, function ($query) {
                    $query->where($this->field, '=', 1);
                  })
                  ->whereHas('conclusion', function ($query) {
                    $query->where('fecha', '>=', $this->request->begin_date)
                          ->where('fecha', '<=', $this->request->final_date);
                  })->get();
    }
}
