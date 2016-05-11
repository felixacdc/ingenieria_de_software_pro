<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Centro;
use App\Tipo_usuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;

class UsersController extends Controller
{

    /*
    *
    *Routa para acceder a la pantalla principal de admin
    */

    public function begin()
    {

          return view('admin.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        //return $data;
        return view('admin.users.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type=Tipo_usuario::lists('tipo','id');
        $centro=Centro::where('id', '!=', '1')->lists('centro','id');
        return view('admin.users.partials.createForm',compact('type','centro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {


          User::create($request->all());
          return redirect('/admin/users')->with('message','Usuario creado Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.partials.deleteForm')->with('id', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bandera=1;
        $user=User::find($id);
        $type=Tipo_usuario::lists('tipo','id');
        $centro=Centro::where('id', '!=', '1')->lists('centro','id');
        return view('admin.users.partials.editForm', compact('type','centro','user','bandera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $user=User::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect('/admin/users')->with('message','Usuario Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/admin/users')->with('message','Usuario eliminado Exitosamente');
    }

    public function userExists($email)
    {
      $n = User::where('email','=',$email)->count();
      if ($n>0) {
          echo 'si';
      } else {
          echo 'no';
      }
    }

}
