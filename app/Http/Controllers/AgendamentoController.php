<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;

class AgendamentoController extends Controller
{
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
        $agendamentos[] = Agendamento::findOrFail($id);
        //dd($agendamentos);
        return view('agendamento', ['agendamentos' => $agendamentos]);
        //É necessário envolver os registros do banco em arrays de objetos para não quebrar o @foreach.
        //O @foreach varre arrays de objetos, não objetos em si.
    }

    public function store() {

        $agendamento = new Agendamento();
        
        $agendamento->nomeFuncionario = request('nomeFuncionario');
        $agendamento->dataAgendamento = request('dtAgendamento'); 
        $agendamento->horaAgendamento = request('hrAgendamento');
        $agendamento->categoriaAcompanhante = request('profAgendamento');

        $agendamento->save();

        return redirect('agendamento');
    }
}