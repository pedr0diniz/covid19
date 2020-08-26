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

        $editAgendamento = new Agendamento;
        //$agendamentos = Agendamento::orderBy('nomeFuncionario', 'desc')->get();
        //$agendamentos = Agendamento::where('categoriaAcompanhante', 'Medico')->get();
        //$agendamentos = Agendamento::latest()->get();
        return view('agendamento', ['agendamentos' => $agendamentos, 'editAgendamento' => $editAgendamento]);
    }

    public function showAgendamento($id)
    {
        $agendamentos = Agendamento::findOrFail($id)
        ->join('funcionarios', 'funcionarios.id', '=', 'agendamentos.id_funcionario')
        ->select('agendamentos.*', 'funcionarios.nome')
        ->where('agendamentos.id', $id)
        ->get();

        $editAgendamento = new Agendamento;
        // dd($agendamentos);
        return view('agendamento', ['agendamentos' => $agendamentos, 'editAgendamento' => $editAgendamento]);
        //É necessário envolver os registros do banco em arrays de objetos para não quebrar o @foreach.
        //O @foreach varre arrays de objetos, não objetos em si.
    }

    public function editAgendamento($id)
    {
        $agendamentos = DB::table('agendamentos')
        ->join('funcionarios', 'funcionarios.id', '=', 'agendamentos.id_funcionario')
        ->select('agendamentos.*', 'funcionarios.nome')
        ->get();

        $editAgendamento = Agendamento::find($id)
        ->join('funcionarios', 'funcionarios.id', '=', 'agendamentos.id_funcionario')
        ->select('agendamentos.*', 'funcionarios.nome')
        ->where('agendamentos.id', $id)
        ->first();

        return view('agendamento', ['agendamentos' => $agendamentos, 'editAgendamento' => $editAgendamento]);
    }

    public function store() {

        $agendamento = new Agendamento();
        
        $agendamento->id_funcionario = request('id_funcionario');
        $agendamento->dataAgendamento = request('dataAgendamento'); 
        $agendamento->horaAgendamento = request('horaAgendamento');
        $agendamento->categoriaAcompanhante = request('profAgendamento');

        $agendamento->save();

        return redirect('agendamento')->with('msg', 'Agendamento realizado com sucesso!');
    }

    public function update($id)
    {

        // dd($id);
        $agendamento = Agendamento::find($id);

        // dd($agendamento);
        $agendamento->dataAgendamento = request('dataAgendamento'); 
        $agendamento->horaAgendamento = request('horaAgendamento');
        $agendamento->categoriaAcompanhante = request('categoriaAcompanhante');

        $agendamento->save();
        
        return redirect('agendamento')->with('msg', 'Agendamento alterado com sucesso!');
    }

    public function destroy($id) {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->delete();
        return redirect('agendamento');
    }

    public static function converterData($data)
    {
        $converteData = strtotime($data);
        $converteData = date("d-m-Y", $converteData);
        $converteData = str_replace('-', '/', $converteData);
        $data = $converteData;

        return($data);
    }
}