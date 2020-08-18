@extends('layouts.covidapp')

@section('title', 'Funcionários')

@section('heading', 'Funcionários')

@section('content')

{{-- <h1>Dados de agendamento serão preenchidos aqui. Um campo irá conter uma questão de múltipla escolha com as opções "acompanhamento da enfermagem", "acompanhamento médico" e "acompanhamento psicológico".</h1>
<h2>Logo abaixo, será possível pesquisar o nome do paciente que será acompanhado. Uma lista que poderá ser ordenada por nome, data do último acompanhamento (caso haja), e possivelmente outros parâmetros.</h2> --}}

@include('selection.funcionarioSelect')
@include('lists.funcionarioList')

@endsection