<?php

namespace App\Http\Controllers;

use App\Cambio;
use App\Enfermera;
use App\Role;
use App\Servicio;
use App\DiaCambios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CambiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cambio = Cambio::orderBy('id','ASC')->paginate(5);
      $enfermeras = Enfermera::all();
      return view('cambios.index', compact('enfermeras'))->with('cambios', $cambio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $enfermeras = Enfermera::all();
      $servicios = Servicio::all();
      $roles = Role::all();

      return view('cambios.create', compact('enfermeras','servicios', 'roles'));
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
        'id_rol' => 'required'

      ]);

      $cambio = new Cambio;
      $cambio->id_enfermera = $request->id_enfermera;
      $cambio->id_servicio = $request->id_servicio;
      $cambio->id_rol = $request->id_rol;
      $cambio->save();
      $arrayCambios = explode(',',$request->diasCambios);
      foreach ($arrayCambios as &$value) {
        DB::table('dias_cambios')->insert(
          ['id_cambio' => $cambio->id, 'fecha' => Carbon::parse($value)]
        );
      }
      return redirect()->route('cambios.index');

    }


    public function history($id)
    {

      $cambios = Cambio::where('id_enfermera', '=', $id)->get();

      //$data = Vacacione::with('dias')->where('id_enfermera',$id)->get();
      return view('cambios.history',compact('cambios'));
    }

    public function days($id)
    {
      $cambios = DiaCambios::withTrashed()->where('id_cambio', $id)->get();
      return $cambios;
    }

}
