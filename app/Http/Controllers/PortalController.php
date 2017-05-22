<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortalController extends Controller
{
    public function option()
    {
        return view('portalviews/option');
    }
    public function toPreg()
    {
        redirect('preregistro');
    }
    public function toReg(){
        
    }
}
