@extends('layouts.covidselect')

@push('scripts')
<script type="text/javascript" src="{{ asset('js/limparCampos.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/validaAcompMedico.js') }}"></script>
@endpush

@section('option1', 'Novo Acompanhamento')
@section('option2', 'Buscar Funcionário')

@section('content1')
@include('forms.acompMedicoForm')
@endsection

@section('content2')
@include('search.acompMedicoSearch')
@endsection