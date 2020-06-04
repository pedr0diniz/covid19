<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcompEnfermagemController extends Controller
{
    public function rdrAcompEnfermagem()
    {
        return view('acompEnfermagem');
    }
}
