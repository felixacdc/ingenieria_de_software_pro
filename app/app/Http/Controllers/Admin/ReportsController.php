<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportsController extends BaseReportsController
{

    public function showPatient(Request $request, $field, $type = 0)
    {
        $this->insertData($request, $field, $type);

        if ( !isset($request->begin_date) and !isset($request->final_date) ) {

          $this->queryUndated();

          $this->queryCenters();

          $this->dataBallots[$this->fatherCenter[0]->centro] = $this->patients;

          $this->queryChildren();

        } else {

          $this->queryDate();

          $this->queryCenters();

          $this->dataBallots[$this->fatherCenter[0]->centro] = $this->patients;

          $this->queryDateChildren();
        }

        if ( $this->error ) {
          return \Redirect::to('admin');
        } else {

          $dataBallots = $this->dataBallots;

          return view('admin.reports.index', compact('dataBallots'))
                      ->with('field', $field)
                      ->with('fecha_inicio', $request->begin_date)
                      ->with('fecha_fin', $request->final_date)
                      ->with('type', $type);
        }
    }


}
