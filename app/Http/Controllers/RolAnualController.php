<?php

namespace App\Http\Controllers;

use App\RolAnual;
use App\RolAnualEnfermeras;
use App\Enfermera;
use App\Servicio;
use App\Role;
use App\Profile;
use Illuminate\Http\Request;

class RolAnualController extends Controller
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
    public function index()
    {
      $enfermera = Enfermera::name($request->get('name'));
      $roles = Role::all();
      $servicios = Servicio::all();
      return view('enfermeras.index', compact('roles', 'servicios'))->with('enfermeras', $enfermera);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $meses = [
          ['mes' => 'Enero','id'=>'1'],
          ['mes' => 'Febrero','id'=>'2'],
          ['mes' => 'Marzo','id'=>'3'],
          ['mes' => 'Abril','id'=>'4'],
          ['mes' => 'Mayo','id'=>'5'],
          ['mes' => 'Junio','id'=>'6'],
          ['mes' => 'Julio','id'=>'7'],
          ['mes' => 'Agosto','id'=>'8'],
          ['mes' => 'Septiembre','id'=>'9'],
          ['mes' => 'Octubre','id'=>'10'],
          ['mes' => 'Noviembre','id'=>'11'],
          ['mes' => 'Diciembre','id'=>'12'],
        ];
      $enfermeras = Enfermera::all();
      $servicios = Servicio::all();
      $roles = Role::all();
      return view('rol_anual.create', compact('enfermeras','servicios','roles','meses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     //guardar en tabla rol_anual
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RolAnual  $rolAnual
     * @return \Illuminate\Http\Response
     */
    public function show(RolAnual $rolAnual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RolAnual  $rolAnual
     * @return \Illuminate\Http\Response
     */
    public function edit(RolAnual $rolAnual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RolAnual  $rolAnual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      {
       $validatedData = $request->validate([
           'id' => 'required',
           'id_rol' => 'required',
       ]);
       dd($request);
       $rol_anual = RolAnual::find($id);
       $rol_anual->id_rol = $request->id_rol;
       $rol_anual->save();
       return redirect()->route('rol.servicios');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RolAnual  $rolAnual
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolAnual $rolAnual)
    {
        //
    }

}
