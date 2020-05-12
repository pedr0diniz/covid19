<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('inicio');
    // }

    public function rdrInicio()
    {
        return view('inicio');
    }
    
    public function rdrForms()
    {
        return view('forms');
    }

    public function rdrAgenda()
    {
        return view('agenda');
    }

    public function rdrConsultaDados()
    {
        return view('consultaDados');
    }

    public function rdrAgendamento()
    {
        return view('agendamento');
    }

    public function rdrPEP()
    {
        return view('PEP');
    }

    public function rdrAcompEnfermagem()
    {
        return view('acompEnfermagem');
    }

    public function rdrAcompMedico()
    {
        return view('acompMedico');
    }

    public function rdrAcompPsico()
    {
        return view('acompPsico');
    }
}
