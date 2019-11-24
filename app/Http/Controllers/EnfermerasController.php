<?php

namespace App\Http\Controllers;

use App\Enfermera;
use App\Profile;
use App\Servicio;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnfermeraRequest;
use App\Http\Requests;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;

class EnfermerasController extends Controller
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
      $enfermeras = Enfermera::all();
      $profiles = Profile::all();
      $servicios = Servicio::all();
      return view('enfermeras.index', compact('profiles', 'servicios', 'enfermeras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $profiles = Profile::all();
      $servicios = Servicio::all();
      return view('enfermeras.create', compact('profiles', 'servicios'));
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
          'lastname' => 'required|max:255|' ,
          'cedula' => 'required',
          'fecha_ingreso' => 'required',
          'id_servicio' => 'required',
          'id_profile' => 'required',

      ]);

      $enfermera = new Enfermera($request->all());
      $enfermera-> fecha_ingreso = Carbon::createFromFormat('Y-m-d', $request->fecha_ingreso);
      $enfermera->save();
      return redirect()->route('enfermeras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enfermera  $enfermera
     * @return \Illuminate\Http\Response
     */
    public function show(Enfermera $enfermera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enfermera  $enfermera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $profiles = Profile::all();
      $servicios = Servicio::all();
      $enfermera = Enfermera::find($id);
      return view('enfermeras.edit', compact('profiles', 'servicios'))->with('enfermera', $enfermera);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enfermera  $enfermera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      {
      $validatedData = $request->validate([
          'name' => 'required',
          'lastname' => 'required',
          'cedula' => 'required',
          'fecha_ingreso' => 'required',
          'id_servicio' => 'required',
          'id_profile' => 'required',
      ]);

      $enfermera = Enfermera::find($id);
      $enfermera->name = $request->name;
      $enfermera->lastname = $request->lastname;
      $enfermera->cedula = $request->cedula;
      $enfermera->fecha_ingreso = Carbon::createFromFormat('Y-m-d', $request->fecha_ingreso);
      $enfermera->fecha_ingreso = $request->fecha_ingreso;
      $enfermera->id_servicio = $request->id_servicio;
      $enfermera->id_profile = $request->id_profile;
      $enfermera->save();
      return redirect()->route('enfermeras.index');

      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enfermera  $enfermera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $enfermera = Enfermera::find($id);
      $enfermera->delete();
      return redirect()->route('enfermeras.index');
    }

    //funcion para cargar la fecha de ingreso en vacaciones
    public function datosEnfermero($id){
      return Enfermera::where('id',$id)->get();
    }
}
