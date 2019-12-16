<?php

namespace App\Http\Controllers;

use App\RolAnual;
use App\RolAnualEnfermeras;
use App\Enfermera;
use App\Servicio;
use App\Role;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    //
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

        $rolanual = DB::table('roles_anual')->where([
        ['id', '=', $id],])->first();

          $recarga = DB::table('rolesanualenfermeras')
          ->select('rolesanualenfermeras.id_servicio', 'rolesanualenfermeras.id_profile','rolesanualenfermeras.anno')
          ->where('rolesanualenfermeras.id', '=', $rolanual->id_rolanual)
          ->first();

        $validatedData = $request->validate([
        'id_rolanual' => 'required',
        ]);

      $rol_anual = RolAnual::find($id);
      $rol_anual->id_rol = $request->id_rolanual;
      $rol_anual->save();

      if ($request->validar_retorno=="regreso") {
        return redirect()->route('rol.enfermeras')
        ->with('success','Rol anual actualizado con éxito.');
      } else {
        return redirect()->route('rol.servicios')
        ->with('success','Rol anual actualizado con éxito.');
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
