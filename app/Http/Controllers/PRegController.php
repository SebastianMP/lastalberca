<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Convocatoria;
use App\Preregistro;
use App\Clase;
use App\Escuela;
use App\Matricula;
use Carbon\Carbon;

class PRegController extends Controller
{
    public function getpdf(Request $request)
    {
        $mat  = $request->session()->get('matricula');
        $data = Alumno::find($mat);

        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $request->session()->forget('matricula');
        return $pdf->download('invoice.pdf');
    }

    public function thefinal(Request $request)
    {
        
        
        return view('final');
    }
    public function verify(Request $request)
    {  

        $mat    = $request->session()->get('matricula');
        $alumno= Alumno::find($mat);
        if($alumno->token == $request->clave)
        {
            $alumno->status=1;
            $alumno->save();
            return redirect('final');

        }
        else
            return "clave incorrecta";
    }


    public function altag(Request $request)
    {
        
        $alumno = Alumno::find($request->boleta);
        $clase  = Clase::find($request->clase);
        $alumno->clases()->attach($request->clase);

        /*Mail::send('mail',compact('alumno'), function($m) use ($alumno)
            {
                $m->from('albercaipn@ipn.com', 'Albercaipn.com');
                $m->to($alumno->email, $alumno->nombre)->subject('activa tu cuenta');
            });*/
       return view('ok');
    }
 
    public function index(Request $request)
    {   
        $matricula = Matricula::all();
        $request->session();
        $mat = $request->session()->get('matricula');
        return view('grupos',compact('matricula','mat'));
    }


    public function create()
    {   
        $escuelas= Escuela::all();

        return view('preRegistro',compact('escuelas'));
    }

    public function store(Request $request)
    {   
        $this->validate( request(),[
            'boleta'=>['unique:alumnos,boleta']
            ] );

        Alumno::create(
            [
            "boleta"            =>  $request->boleta,
            "escuela_id"        =>  $request->escuela,
            "nombre"            =>  $request->nombre,
            "appat"             =>  $request->appat,
            "apmat"             =>  $request->apmat,
            "fechanacimiento"   =>  $request->date,
            "tel"               =>  $request->tel,
            "email"             =>  $request->mail,
            "token"             =>  str_random(10)
            ]);

        $idalum= $request->boleta;
        $request->session()->put('matricula', $idalum);

        return redirect('grupos');
    }
    
}
