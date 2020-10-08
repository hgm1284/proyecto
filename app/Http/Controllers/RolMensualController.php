<?php

namespace App\Http\Controllers;

use App\RolMensual;
use App\RolAnual;
use App\Enfermera;
use App\Servicio;
use App\Profile;
use App\Role;
use Laracast\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class RolMensualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RolMensual  $rolMensual
     * @return \Illuminate\Http\Response
     */
    public function show(RolMensual $rolMensual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RolMensual  $rolMensual
     * @return \Illuminate\Http\Response
     */
    public function edit(RolMensual $rolMensual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RolMensual  $rolMensual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RolMensual $rolMensual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RolMensual  $rolMensual
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolMensual $rolMensual)
    {
        //
    }

    public function mostrardistribucionMensual(){
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
      $profiles = Profile::all();
      $servicios = Servicio::all();
      return view('rol_mensual.ver_rolmes_serv', compact('enfermeras','profiles','servicios','meses'));
    }


    public function distribucionMensual($servicio, $profile, $mes, $anno)
    {
      return RolMensual::with(['meses.rol'])->
      with(['enfermero'])->
      where('id_servicio','=',$servicio)
      ->where('id_profile','=',$profile)
      ->where('anno','=',$anno)->get();
    }

    public function mostrarrolMesEnfermera(){
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
      return view('rol_mensual.ver_rolmes_enfermera', compact('enfermeras','meses'));
    }

    public function distribucionMesEnfermera($enfermera, $anno){
      return RolMensual::with(['meses.rol'])->
      with(['enfermero'])->
      where('id_enfermera','=',$enfermera)
      ->where('anno','=',$anno)->get();
    }

}
