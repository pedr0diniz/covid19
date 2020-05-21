@extends('layouts.covidapp')

@section('title', 'Acompanhamento Médico')

@section('heading', 'Acompanhamento Médico')

@section('content')

{{-- <h1>Deve conter campo com busca de funcionários por nome, cpf, matrícula, etc. Os funcionários serão exibidos em uma lista que aparecerá na mesma página com todos os acompanhamentos previamente realizados.</h1>
<h2>Na lista, haverá um botão para submissão de novo acompanhamento ao lado do nome do funcionário.</h2>
<h3>Só médicos poderão preencher esse formulário</h3> --}}

@include('selection.acompMedicoSelect')
@include('lists.acompMedicoList')

@endsection