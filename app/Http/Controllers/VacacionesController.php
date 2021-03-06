<?php

namespace App\Http\Controllers;

use App\Vacacione;
use App\Enfermera;
use App\Periodo;
use App\DiaVaciones;
use App\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VacacionesController extends Controller
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
    $periodos = Periodo::all();
    return view('vacaciones.create', compact('enfermeras','periodos'));
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

    ]);

    $vacacione = new Vacacione;
    $vacacione->id_enfermera = $request->id_enfermera;
    $vacacione->id_periodo = $request->id_periodo;
    $vacacione->save();

    $arrayVacaciones = explode(',',$request->diasVaciones);
    foreach ($arrayVacaciones as &$value) {
      DB::table('dias_vacaciones')->insert(
        ['id_vacaciones' => $vacacione->id, 'fecha' => Carbon::parse($value)]
      );
    }
    return redirect()->route('vacaciones.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Vacacione  $vacacione
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $enfermeras = DB::table('enfermeras')
    ->select('enfermeras.name', 'enfermeras.lastname')
    ->where('enfermeras.id', '=', $id)
    ->get();
    return view('vacaciones.show',compact('enfermeras'));
  }
  /**
  * Display the specified resource.
  *
  * @param  \App\Vacacione  $vacacione
  * @return \Illuminate\Http\Response
  */
  public function history($id)
  {
    $periodos = Periodo::all();
    $vacaciones = Vacacione::where('id_enfermera', 0)->get();
    $enfermeras = DB::table('enfermeras')
    ->select('enfermeras.name', 'enfermeras.lastname')
    ->where('enfermeras.id', '=', $id)
    ->get();

    //$data = Vacacione::with('dias')->where('id_enfermera',$id)->get();
    return view('vacaciones.history',compact('periodos','vacaciones','enfermeras'));
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Vacacione  $vacacione
  * @return \Illuminate\Http\Response
  */
  public function historyVacationsRequested($user, $periodo)
  {
    $vacaciones = Vacacione::where('id_enfermera', $user)->where('id_periodo',$periodo)->get();
    return $vacaciones;
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Vacacione  $vacacione
  * @return \Illuminate\Http\Response
  */
  public function days($id)
  {
    $vacaciones = DiaVaciones::withTrashed()->where('id_vacaciones', $id)->get();
    return $vacaciones;
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
    $vacacione = DiaVaciones::find($id);
    $vacacione->delete(); // will return true or false
    response()->json(['success' => 'success'], 200);
  }

  public function index2($id)
  {
    $hoy = Carbon::today();
    $flight = Vacacione::with('dias')->where('id_enfermera',$id)->get();
    $array = array();
    foreach ($flight as &$value) {
      foreach ($value->dias as &$dia) {
        $box = Carbon::parse($dia['fecha']);
        if ($box >= $hoy) {
          $object = new  \stdClass();
          $object->title = 'Vacaciones';
          $object->start = $dia['fecha'];
          $object->id = $dia['id'];
          array_push($array,$object);
        }
      }
    }
    return $array;
  }

  public function mostrarreportevacaciones()
  {
    $enfermeras = Enfermera::all();
    $periodos = Periodo::all();
    $servicios = Servicio::all();
    return view('reportes.reportevacaciones', compact('enfermeras','periodos','servicios'));
  }

  public function reporteVacaciones($especialidad, $periodo)
  {
    return Enfermera::with(['vacaciones' => function ($query) use ($periodo){
      $query->where('id_periodo', '=', $periodo)->with('dias');
    }])->where('id_servicio','=',$especialidad)->get();
  }
}
