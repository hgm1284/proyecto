<?php

namespace App\Http\Controllers;

use App\RolAnual;
use App\Enfermera;
use App\Servicio;
use App\Role;
use Illuminate\Http\Request;

class RolAnualController extends Controller
{
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
          ['mes' => 'Enero'],
          ['mes' => 'Febrero'],
          ['mes' => 'Marzo'],
          ['mes' => 'Abril'],
          ['mes' => 'Mayo'],
          ['mes' => 'Junio'],
          ['mes' => 'Julio'],
          ['mes' => 'Agosto'],
          ['mes' => 'Septiembre'],
          ['mes' => 'Octubre'],
          ['mes' => 'Noviembre'],
          ['mes' => 'Diciembre'],
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
      $validatedData = $request->validate([
        'id_enfermera' => 'required',
        'id_servicio' => 'required',
      ]);
        dd($request);
        $rol_anual = new RolAnual;
        $rol_anual->id_enfermera = $request->enfermera;
        $rol_anual->id_servicio = $request->servicio;
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
