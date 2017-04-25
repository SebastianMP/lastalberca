<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Convocatoria;
use App\Preregistro;
use App\Grupo;
use Carbon\Carbon;

class PRegController extends Controller
{
    public function altag(Request $request)
    {
        
        $alumno = Alumno::find($request->alumno);
        $grupo  =  Grupo::find($request->grupo);

        $alumno->id_grupo = $request->grupo;
        $alumno->save();

        $grupo->capacidad= 
        $grupo->capacidad - Alumno::where('id_grupo', $request->grupo)
                                                            ->count();

        $grupo->save();
        return view('ok');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $groups = Grupo::all();
        $request->session();
        $mat = $request->session()->get('matricula');
        return view('grupos',compact('groups','mat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preRegistro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dir = "$request->calle $request->numero $request->colonia";
        Alumno::create(
            [
            "boleta"            =>  $request->boleta,
            "matricula"         =>  ($request->boleta)+"NAT",
            "nombres"           =>  $request->nombre,
            "appat"             =>  $request->appat,
            "apmat"             =>  $request->apmat,
            "fechanacimiento"   =>  $request->date,
            "semestre"          =>  $request->semestre,
            "direccion"         =>  $dir,
            "tel_fijo"          =>  $request->tel,
            "email"             =>  $request->mail,
            "estatura"          =>  $request->altura,
            "tiposangre"        =>  $request->sangre,
            "peso"              =>  $request->peso
            ]);

        $idalum= $request->boleta+"NAT";
        $request->session()->put('matricula', $idalum);
        $request->session()->forget('boleta');

        return redirect('grupos');
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
        //
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
