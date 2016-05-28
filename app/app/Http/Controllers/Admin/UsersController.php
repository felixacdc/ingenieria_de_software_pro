<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Centro;
use App\Tipo_usuario;
use App\Paciente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

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
        return view('admin.users.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Tipo_usuario::lists('tipo','id');
        $centro = Centro::lists('centro','id');
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

        $user=User::find($id);
        if ($user->state==true) {
          return view('admin.users.partials.deleteForm')->with('id', $id);
        }else {

          return view('admin.users.partials.activate')->with('id', $id);
        }

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
        $user = User::find($id);
        $type = Tipo_usuario::lists('tipo','id');
        $centro = Centro::lists('centro','id');
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
        $user = User::find($id);
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
        $user = User::find($id);///obtengo el Usuario
        $relations=Paciente::where('user_id','=',$id)->count();
        if($relations>0){
          $user->state=false;// Cambio el Estaado del Paciente
          $user->save();
          return redirect('/admin/users')->with('message','Temporalmente El Usuario Fue dado de Baja');
        }else{
          $user->delete();
          return redirect('/admin/users')->with('message','Usuario eliminado Exitosamente');
        }

    }

    public function activate($id)
    {

        $user=User::find($id);
        $user->state=true;
        $user->save();
        return redirect('/admin/users')->with('message','Usuario Activado exitosamente');
    }

    public function userExists($user)
    {
      $n=User::where('user','=',$user)->count();
      if($n>0){
        echo 'si';
      }else{
        echo 'no';
      }
    }

    public function emailExists($email)
    {
      $n = User::where('email','=',$email)->count();
      if ($n>0) {
          echo 'si';
      } else {
          echo 'no';
      }
    }

    public function emailUpdate($email, $id)
    {

      $email = ['email' => $email];

      $rules=[
            'email'    => 'required|email|unique:users,email,'  . $id
        ];

        $validator = Validator::make($email, $rules);
        if ($validator->fails()) {
            return 'si';
        }else{
           return 'no';
        }


    }

}
