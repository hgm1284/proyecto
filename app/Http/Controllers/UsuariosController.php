<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Privilegio;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::orderBy('id','ASC')->paginate(5);
      $privilegios = Privilegio::all();
      return view('usuarios.index', compact('privilegios'))->with('users', $user);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy(Request $request, $id)
     {
         $user = User::find($id);
         $user->delete();
         return redirect()->route('usuarios.index');
     }

     public function update(Request $request, $id)
     {
         {
         $validatedData = $request->validate([
             'name' => 'required',
             'email' => 'required',
             'password' => 'required',
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
