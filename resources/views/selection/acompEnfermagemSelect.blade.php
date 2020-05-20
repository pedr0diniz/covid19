@extends('layouts.covidselect')

@section('option1', 'Novo Acompanhamento')
@section('option2', 'Buscar Funcionário')

@section('content1')
@include('forms.acompEnfermagemForm')
@endsection

@section('content2')
@include('search.acompEnfermagemSearch')
@endsection