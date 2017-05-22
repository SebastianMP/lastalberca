<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Convocatoria;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminviews/adminmain');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createConvocatoria()
    {
        return view('adminviews/createconv');
    }
    public function storeConvocatoria(Request $request)
    {
        $id= "{$request->apertura}{$request->periodo}";
        Convocatoria::create([
            "idConvocatoria"=>$id,
            "fechaApertura"=>$request->apertura,
            "fechaCierre"=>$request->cierre,
            "periodo"=>$request->periodo,
            "fechaEntrega"=>$request->fdoc,
            "FechaPublicacion"=>$request->pub,
            ]);
       return view('adminviews/adminmain');
    }

    public function adminConvocatoria()
    {
        $convocatorias = Convocatoria::all();
        return view('adminviews/adminconv', compact('convocatorias'));
    }

    public function dropConv(Request $request)
    {

        $conv= $request->convocatoria;
        if($conv == NULL)
        {
            return "no hay nada";
        }
        foreach ($conv as $valor) {
            $f = Convocatoria::find($valor);
            $f->delete();
        }
        return view('adminviews/adminmain');
    }
    public function createGrupo()
    {
        return view('adminviews/creategrupos');
    }
    public function adminGrupo()
    {
        return "Administrar Grupos";
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
