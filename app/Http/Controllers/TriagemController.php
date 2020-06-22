<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriagemController extends Controller
{
    public function rdrTriagem() {
        return view('triagem');
    }
}
