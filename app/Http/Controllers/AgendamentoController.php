<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Agendamento;

class AgendamentoController extends Controller
{
    public function rdrAgendamento()
    {
        $agendamentos = DB::table('agendamentos')
        ->join('funcionarios', 'funcionarios.id', '=', 'agendamentos.id_funcionario')
        ->select('agendamentos.*', 'funcionarios.nome')
        ->get();
        //$agendamentos = Agendamento::orderBy('nomeFuncionario', 'desc')->get();
        //$agendamentos = Agendamento::where('categoriaAcompanhante', 'Medico')->get();
        //$agendamentos = Agendamento::latest()->get();
        return view('agendamento', ['agendamentos' => $agendamentos]);
    }

    public function showAgendamento($id)
    {
        $agendamentos = Agendamento::findOrFail($id)
        ->join('funcionarios', 'funcionarios.id', '=', 'agendamentos.id_funcionario')
        ->select('agendamentos.*', 'funcionarios.nome')
        ->where('agendamentos.id', $id)
        ->get();

        // dd($agendamentos);
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

        return redirect('agendamento')->with('msg', 'Agendamento realizado com sucesso!');
    }

    public function destroy($id) {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->delete();
        return redirect('agendamento');
    }
}