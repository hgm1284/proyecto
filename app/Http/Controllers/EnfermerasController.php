<?php

namespace App\Http\Controllers;

use App\Enfermera;
use App\Profile;
use App\Servicio;

use Illuminate\Http\Request;

class EnfermerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $enfermera = Enfermera::orderBy('id','ASC')->paginate(5);
      $profiles = Profile::all();
      $servicios = Servicio::all();
      return view('enfermeras.index', compact('profiles', 'servicios'))->with('enfermeras', $enfermera);
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
          'fecha_ingreso' => 'required|date_format:Y-m-d',

      ]);

      $enfermera = new Enfermera($request->all());
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
          'fecha_ingreso' => 'required|date_format:Y-m-d',
          'id_servicio' => 'required',
          'id_profile' => 'required',
      ]);

      $enfermera = Enfermera::find($id);
      $enfermera->name = $request->name;
      $enfermera->lastname = $request->lastname;
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
}
