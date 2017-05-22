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
use App\Grupo;
use Carbon\Carbon;

class PRegController extends Controller
{
    public function getpdf(Request $request)
    {
        $mat    = $request->session()->get('matricula');
        $data = Alumno::find($mat);
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('invoice.pdf');
    }

    public function thefinal(Request $request)
    {
        
        $request->session()->forget('matricula');
        return view('final');
    }
    public function verify(Request $request)
    {  

        $mat    = $request->session()->get('matricula');
        $alumno= Alumno::find($mat);
        if($alumno->clave == $request->clave)
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
        
        $alumno = Alumno::find($request->alumno);
        $grupo  =  Grupo::find($request->grupo);
        $alumno->id_grupo = $request->grupo;
        $alumno->save();
        $grupo->capacidad= 20 - Alumno::where('id_grupo', $request->grupo)
                                                            ->count();

        $grupo->save();
        Mail::send('mail',compact('alumno'), function($m) use ($alumno)
            {
                $m->from('albercaipn@ipn.com', 'Albercaipn.com');
                $m->to($alumno->email, $alumno->nombre)->subject('activa tu cuenta');
            });
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
        $this->validate( request(),[
            'boleta'=>['unique:alumnos,matricula']
            ] );

        Alumno::create(
            [
            "boleta"            =>  $request->boleta,
            "matricula"         =>  $request->boleta,
            "escuela"           =>  $request->escuela,
            "nombres"           =>  $request->nombre,
            "appat"             =>  $request->appat,
            "apmat"             =>  $request->apmat,
            "fechanacimiento"   =>  $request->date,
            "tel"               =>  $request->tel,
            "email"             =>  $request->mail,
            "clave"             =>  str_random(10),
            "estatus"           => 0,
            ]);

        $idalum= $request->boleta+"NAT";
        $request->session()->put('matricula', $idalum);
        $request->session()->forget('boleta');

        return redirect('grupos');
    }
    
}
