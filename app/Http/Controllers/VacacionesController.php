<?php

namespace App\Http\Controllers;

use App\Vacacione;
use App\Enfermera;
use Illuminate\Http\Request;

class VacacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $vacacione = Vacacione::orderBy('id','ASC')->paginate(5);
      $enfermeras = Enfermera::all();
      return view('vacaciones.index', compact('enfermeras'))->with('vacaciones', $vacacione);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $enfermeras = Enfermera::all();
      return view('vacaciones.create', compact('enfermeras'));
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
          'fecha_inicio' => 'required|date_format:Y-m-d',
          'fecha_final' => 'required|date_format:Y-m-d',

      ]);

      $vacacione = new Vacacione($request->all());
      $vacacione->save();
      return redirect()->route('vacaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacacione  $vacacione
     * @return \Illuminate\Http\Response
     */
    public function show(Vacacione $vacacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacacione  $vacacione
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $enfermeras = Enfermera::all();
      $vacacione = Vacacione::find($id);
      return view('vacaciones.edit', compact('enfermeras'))->with('vacacione', $vacacione);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacacione  $vacacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      {
      $validatedData = $request->validate([
          'fecha_inicio' => 'required',
          'fecha_final' => 'required',
          'id_enfermera' => 'required',
      ]);

      $vacacione = Vacacione::find($id);
      $vacacione->fecha_inicio = $request->fecha_inicio;
      $vacacione->fecha_final = $request->fecha_final;
      $vacacione->id_enfermera = $request->id_enfermera;
      $vacacione->save();
      return redirect()->route('vacaciones.index');

      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacacione  $vacacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $vacacione = Vacacione::find($id);
      $vacacione->delete();
      return redirect()->route('vacaciones.index');
    }
}
