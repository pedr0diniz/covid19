@extends('layouts.covidapp')

@section('title', 'Acompanhamento da Enfermagem')

@section('heading', 'Acompanhamento da Enfermagem')

@section('content')

{{-- <h1>Deve conter campo com busca de funcionários por nome, cpf, matrícula, etc. Os funcionários serão exibidos em uma lista que aparecerá na mesma página com todos os acompanhamentos previamente realizados.</h1>
<h2>Na lista, haverá um botão para submissão de novo acompanhamento ao lado do nome do funcionário.</h2>
<h3>Só a equipe de enfermagem poderá preencher esse formulário</h3> --}}

@include('selection.acompEnfermagemSelect')
@include('lists.acompEnfermagemList')

@endsection