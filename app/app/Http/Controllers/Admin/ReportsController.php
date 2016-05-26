<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Guard;

class ReportsController extends BaseReportsController
{

    private $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function showPatient(Request $request, $field, $type = 0)
    {
      if ($request->user()->tipo_usuario_id != 3 ) {

        $this->insertData($request, $field, $type);

        if ( !isset($request->begin_date) and !isset($request->final_date) ) {

          $this->queryUndated();

          $this->queryCenters();

          $this->dataBallots[$this->fatherCenter[0]->centro] = $this->patients;

          if ( $this->master == 0) {
            $this->queryChildren();
          }

        } else {

          $this->queryDate();

          $this->queryCenters();

          $this->dataBallots[$this->fatherCenter[0]->centro] = $this->patients;

          if ( $this->master == 0) {
            $this->queryDateChildren();
          }
        }

        if ( $this->error ) {
          return \Redirect::to('admin');
        } else {

          $dataBallots = $this->dataBallots;
          $request->session()->put('dataPDFReport', $dataBallots);

          return view('admin.reports.index', compact('dataBallots'))
                      ->with('field', $field)
                      ->with('fecha_inicio', $request->begin_date)
                      ->with('fecha_fin', $request->final_date)
                      ->with('type', $type)
                      ->with('condicion', $this->request->condition)
                      ->with('number', $this->request->number)
                      ->with('actualCenter', $this->fatherCenter[0]->centro)
                      ->with('centers', $this->centers);
        }

      } else {
        $this->auth->logout();
        return \back();
      }
    }

    public function pdfReports(Request $request)
    {

      if ($request->user()->tipo_usuario_id != 3 ) {

        $dataBallots = $request->session()->get('dataPDFReport');

        ini_set('max_execution_time', 600);

        $pdf = \PDF::loadView('admin.reports.pdf.createpdf',
        ['dataBallots' => $dataBallots,
          'request' => $request
        ])->setPaper('Legal')->setOrientation('landscape');

        return $pdf->stream();

      } else {
        $this->auth->logout();
        return \back();
      }

    }


}
