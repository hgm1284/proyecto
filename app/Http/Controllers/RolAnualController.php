<?php

namespace App\Http\Controllers;

use App\RolAnual;
use App\RolAnualEnfermeras;
use App\Enfermera;
use App\Servicio;
use App\Role;
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
    public function store(Request $request)
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


        $rol_anualenfermeras = new RolAnualEnfermeras;
        $rol_anualenfermeras = $request->validate([
        'id_enfermera' => 'required|unique:rolesanualenfermeras',
        ]);
        $rol_anualenfermeras->id_enfermera = $request->id_enfermera;
        $rol_anualenfermeras->anno = $request->anno;
        $rol_anualenfermeras->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes1;
      $rol_anual->mes= "Enero";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes2;
      $rol_anual->mes= "Febrero";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes3;
      $rol_anual->mes= "Marzo";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes4;
      $rol_anual->mes= "Abril";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes5;
      $rol_anual->mes= "Mayo";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes6;
      $rol_anual->mes= "Junio";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes7;
      $rol_anual->mes= "Julio";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes8;
      $rol_anual->mes= "Agosto";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes9;
      $rol_anual->mes= "Septiembre";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes10;
      $rol_anual->mes= "Octubre";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes11;
      $rol_anual->mes= "Noviembre";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();

      $rol_anual = new RolAnual;
      $rol_anual->id_enfermera = $request->id_enfermera;
      $rol_anual->id_servicio = $request->id_servicio;
      $rol_anual->id_rol= $request->mes12;
      $rol_anual->mes= "Diciembre";
      $rol_anual->anno = $request->anno;
      $rol_anual->save();
      return redirect()->route('rol_anual.create', compact('$rol_anual'));
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
    public function update(Request $request, RolAnual $rolAnual)
    {
        //
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
