<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CenterRequest;
use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Centro;
use App\Tipo_centro;

class CentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Centro::where('id', '!=', 1)->get();
        return view('admin.centros.list',compact('data'));
        //return view('admin.centros.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Tipo_centro::lists('tipo', 'id');
        $fathers = Centro::where('distrito', '=', true)->lists('centro', 'id');
        return view('admin.centros.partials.createForm', compact('type', 'fathers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CenterRequest $request)
    {
        Centro::create($request->all());
        return redirect('/admin/centros')->with('message', 'Centro creado correctamente.');
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
        $center = Centro::find($id);
        $type = Tipo_centro::lists('tipo', 'id');
        $fathers = Centro::where('distrito', '=', true)->lists('centro', 'id');
        return view('admin.centros.partials.editForm', compact('center', 'type', 'fathers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CenterRequest $request, $id)
    {
        $center = Centro::find($id);
        $center->fill($request->all());
        $center->save();
        return redirect('/admin/centros')->with('message', 'Centro editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $center = Centro::find($id);
        $center->delete();
        return redirect('/admin/centros')->with('message', 'Centro eliminado correctamente.');
    }
}
