@extends('layouts.covidselect')

@section('option1', 'Preencher Prontuário')
@section('option2', 'Buscar Funcionário')

@section('content1')
@include('forms.PEPForm')
@endsection

@section('content2')
@include('search.PEPSearch')
@endsection