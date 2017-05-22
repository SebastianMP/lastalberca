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
            return "existe";
        }
        else
            return "No Existe";



    }
}
