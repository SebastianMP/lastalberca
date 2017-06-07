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
            $a= Alumno::find($request->matricula);
            if($a->ins==1)
            {
                return view('ok');   
            }elseif ($a->ins==2)
            {


                return view('final',compact('a'));
            }
            else{
                
                $request->session()->put('matricula', $request->matricula);
                    return  redirect('grupos');
                }           
        }
        else{

            $matricula= $request->matricula;
            return view('registryerror/boletaerror', compact('matricula'));
        }
    }
}

