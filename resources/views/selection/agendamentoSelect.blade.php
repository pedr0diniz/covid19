@extends('layouts.covidselect')

@section('option1', 'Novo Agendamento')
@section('option2', 'Buscar Agendamento')

@section('content1')
@include('forms.agendamentoForm')
@endsection

@section('content2')
@include('search.agendamentoSearch')
@endsection