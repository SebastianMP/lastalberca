<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alumno;
class RegController extends Controller
{
    public function verifyID(Request $request)
    {
        if(Alumno::find($request->matricula))
        {
            $request->session()->put('matricula', $request->matricula);
            return  redirect('grupos');
        }
        else{

            $matricula= $request->matricula;
            return view('registryerror/boletaerror', compact('matricula'));
        }
    }
}
