<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Tipo_centro;
use App\Centro;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TiposCentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Tipo_centro::all();
        return view('admin.tiposCentros.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tiposCentros.partials.createForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tipo_centro::create($request->all());
        return redirect('/admin/TiposCentros')->with('message','Tipo de Ccentro Creado Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.tiposCentros.partials.deleteForm')->with('id',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type=Tipo_centro::find($id);
        return view('admin.tiposCentros.partials.editForm',compact('type'));
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
        $tipo=Tipo_centro::find($id);
        $tipo->fill($request->all());
        $tipo->save();
        return redirect('/admin/TiposCentros')->with('message','Tipo Centro Editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $relations = Centro::where('tipo_centro_id','=',$id)->count();
        if($relations>0){
          return redirect('/admin/TiposCentros')->with('message','Error No se puede Eliminar este registro, ya que contiene informacion relacionada a el.');
        }
        else {
          $type=Tipo_centro::find($id);
          $type->delete();
          return redirect('/admin/TiposCentros')->with('message','Eliminado Exitosamente');
        }

    }
}
