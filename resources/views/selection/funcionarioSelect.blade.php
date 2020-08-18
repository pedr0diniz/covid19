@extends('layouts.covidselect')

@section('option1', 'Cadastrar Funcionário')
@section('option2', 'Buscar Funcionário')

@section('content1')
@include('forms.funcionarioForm')
@endsection

@section('content2')
@include('search.funcionarioSearch')
@endsection