<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Privilegio;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Http\Requests;
use Illuminate\Routing\Route;

class UsuariosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $users = User::all();
      $privilegios = Privilegio::all();
      return view('usuarios.index', compact('privilegios', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $privilegios = Privilegio::all();
        return view('usuarios.create', compact('privilegios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|confirmed|min:6',
          'id_rolusuario' => 'required',
      ]);

        $user = new User($request->all());
        $user-> password = bcrypt($request->password);
        $user->save();
        return redirect()->route('usuarios.index');
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
         $privilegios = Privilegio::all();
         $user = User::find($id);
         return view('usuarios.edit', compact('privilegios'))->with('user', $user);
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy(Request $request, $id)
     {
         $user = User::find($id);
         $user->delete();
         return redirect()->route('usuarios.index')->with('warning','Usuario Eliminado con Exito!');;
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
         {
         $validatedData = $request->validate([
             'name' => 'required',
             'email' => 'required',
             'password' => 'required|confirmed|min:6',
             'id_rolusuario' => 'required',
         ]);

         $user = User::find($id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->id_rolusuario = $request->id_rolusuario;
         $user->password = bcrypt($request->password);
         $user->save();
         return redirect()->route('usuarios.index');

         }
     }
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function updateProfile(Request $request, $id)
     {
         {
         $validatedData = $request->validate([
             'name' => 'required',
             'email' => 'required'
         ]);

         $user = User::find($id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->save();
         return redirect()->route('perfil');

         }
     }
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function updatePass(Request $request, $id)
     {

       $user = User::find($id);
       $user->password = bcrypt($request->password);
       $user->save();
       return redirect()->route('perfil');

     }

}
