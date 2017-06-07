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

     public function index(Request $request)
    {   
        $matricula = Matricula::all();
        //$clases = Clase::all();
        $request->session();
        $mat = $request->session()->get('matricula');
        return view('grupos',compact('matricula','mat'));
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
        $alumno->ins=1;
        $alumno->save();
        $request->session()->forget('matricula');
       return view('ok');
    }

    public function verify(Request $request)
    {   
        
        $alumno= Alumno::where('token',$request->clave)->get();
        if(count($alumno)==1)
        {
            $alumno[0]->ins=2;
            $alumno[0]->save();
            $a=$alumno[0];
            return view('final',compact('a'));
        }
        else 
            return "clave incorrecta";
    }


 
    
    public function getpdf(Request $request)
    {
        
        $mat  = $request->boleta;
        $data = Alumno::find($mat);
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('invoice.pdf');
        
    }

}
