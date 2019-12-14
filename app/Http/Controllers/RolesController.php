<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Http\Requests;
use Illuminate\Routing\Route;

class RolesController extends Controller
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
    $roles = Role::all();
    return view('roles.index', compact('roles'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('roles.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $role = new Role($request->all());
    $role->save();
    return redirect()->route('roles.index')->with('success','Rol creado con éxito.');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Role  $role
  * @return \Illuminate\Http\Response
  */
  public function show(Role $role)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Role  $role
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $role = Role::find($id);
    return view('roles.edit')->with('role', $role);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Role  $role
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    {
      $validatedData = $request->validate([
        'nomenclatura' => 'required',
        'detalle' => 'required',
      ]);
      $role = Role::find($id);
      $role->nomenclatura = $request->nomenclatura;
      $role->detalle = $request->detalle;
      $role->save();
      return redirect()->route('roles.index')->with('success','Rol actualizado con éxito.');
    }
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Role  $role
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    try {
      $role = Role::find($id);
      $role->delete();
      return redirect()->route('roles.index')->with('success','Rol eliminado con éxito.');
    } catch (\Exception $e) {
      return redirect()->route('roles.index')->with('error','Rol no puede ser eliminado.');
    }
  }
}
