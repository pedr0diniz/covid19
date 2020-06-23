@extends('layouts.covidapp')

<script type="text/javascript" src="{{ asset('js/validaTriagem.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/habilitarOutros.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/limparCampos.js') }}"></script>

@section('title', 'Triagem')

@section('heading', 'Triagem')

@section('content')

{{-- <h1>Dados de agendamento serão preenchidos aqui. Um campo irá conter uma questão de múltipla escolha com as opções "acompanhamento da enfermagem", "acompanhamento médico" e "acompanhamento psicológico".</h1>
<h2>Logo abaixo, será possível pesquisar o nome do paciente que será acompanhado. Uma lista que poderá ser ordenada por nome, data do último acompanhamento (caso haja), e possivelmente outros parâmetros.</h2> --}}

@include('forms.triagemForm')

@endsection