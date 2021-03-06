<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Servicio;
use App\Enfermera;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests;
use Illuminate\Routing\Route;

class ProfilesController extends Controller
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
    $profiles = Profile::all();
    return view('profiles.index', compact('profiles'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('profiles.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $profile = new Profile($request->all());
    $profile->save();
    return redirect()->route('profiles.index')->with('success','Perfil creado con éxito.');
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
    $profile = Profile::find($id);
    return view('profiles.edit')->with('profile', $profile);
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
        'nombre' => 'required',
        'descripcion' => 'required',
      ]);

      $profile = Profile::find($id);
      $profile->nombre = $request->nombre;
      $profile->descripcion = $request->descripcion;
      $profile->save();
      return redirect()->route('profiles.index')->with('success','Perfil actualizado con éxito.');
    }
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    try {
      $profile = Profile::find($id);
      $profile->delete();
      return redirect()->route('profiles.index')->with('warning','Perfil eliminado con éxito.');
    } catch (\Exception $e) {
      return redirect()->route('profiles.index')->with('error','Perfil no puede ser eliminado.');
    }
  }

  public function mostrarreporteperfiles()
  {
    $enfermeras = Enfermera::all();
    $profile = Profile::all();
    $servicios = Servicio::all();
    return view('reportes.reporteperfiles', compact('enfermeras','profile','servicios'));
  }

  public function reportePerfiles($profile, $servicio)
  {
    return Enfermera::where('id_profile', '=', $profile)
    ->where('id_servicio', '=', $servicio)
    ->get();
  }
}
