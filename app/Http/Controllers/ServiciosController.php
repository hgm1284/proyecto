<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServicioRequest;
use App\Http\Requests;
use Illuminate\Routing\Route;

class ServiciosController extends Controller
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
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $servicio = new Servicio($request->all());
      $servicio->save();
      return redirect()->route('servicios.index')->with('success','Servicio creado con Exito!');
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
        $servicio = Servicio::find($id);
        return view('servicios.edit')->with('servicio', $servicio);
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

            $servicio = Servicio::find($id);
            $servicio->nombre = $request->nombre;
            $servicio->descripcion = $request->descripcion;
            $servicio->save();
            return redirect()->route('servicios.index')->with('warning','El servicios se actualizo correctamatene!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      try {
        $servicio = Servicio::find($id);
        $servicio->delete();
        return redirect()->route('servicios.index')->with('error','Servicios eliminado con Exito!');
      } catch (\Exception $e) {
        return redirect()->route('servicios.index')->with('error','El servicios no puede ser eliminado!');
      }


    }
}
