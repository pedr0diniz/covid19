<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Funcionario;

class FuncionarioController extends Controller
{
    public function rdrFuncionario() 
    {
        $funcionarios = DB::table('funcionarios')
        ->select('funcionarios.*')
        ->get();
        return view('funcionario', ['funcionarios' => $funcionarios]);
    }

    public function showFuncionario($id)
    {
        $funcionarios = Funcionario::findOrFail($id)
        ->select('funcionarios.*', 'funcionarios.nome')
        ->where('funcionarios.id', $id)
        ->get();

        // dd($agendamentos);
        return view('funcionario', ['funcionarios' => $funcionarios]);
        //É necessário envolver os registros do banco em arrays de objetos para não quebrar o @foreach.
        //O @foreach varre arrays de objetos, não objetos em si.
    }

    public function store() {

        $funcionario = new Funcionario();
        
        $funcionario->nome = request('nome');
        $funcionario->cpf = request('cpf'); 
        $funcionario->dataNascimento = request('dataNascimento');
        $funcionario->telefone = request('telefone');
        $funcionario->email = request('email');
        $funcionario->distrito = request('distrito');
        $funcionario->unidade = request('unidade');
        $funcionario->categoriaAcompanhante = request('categoriaAcompanhante');
        $funcionario->numeroConselhoRegional = request('numeroConselhoRegional');

        $funcionario->save();

        return redirect('funcionario')->with('msg', 'Cadastro realizado com sucesso!');
    }

    public function destroy($id) {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
        return redirect('funcionario');
    }
}