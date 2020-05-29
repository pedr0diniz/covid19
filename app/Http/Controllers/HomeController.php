<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;

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

    public function rdrConsultaDados()
    {
        return view('consultaDados');
    }

    public function rdrAgendamento()
    {
        $agendamentos = Agendamento::all();
        //$agendamentos = Agendamento::orderBy('nomeFuncionario', 'desc')->get();
        //$agendamentos = Agendamento::where('categoriaAcompanhante', 'Medico')->get();
        //$agendamentos = Agendamento::latest()->get();
        return view('agendamento', ['agendamentos' => $agendamentos]);
    }

    public function showAgendamento($id)
    {
        $agendamentos = Agendamento::findOrFail($id);

        return view('agendamento', ['agendamentos' => $agendamentos]);
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

?>