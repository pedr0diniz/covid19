@extends('layouts.covidselect')

@push('scripts')
<script type="text/javascript" src="{{ asset('js/limparCampos.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/validaPEP.js') }}"></script>
@endpush

@section('option1', 'Preencher Prontuário')
@section('option2', 'Buscar Funcionário')

@section('content1')
@include('forms.PEPForm')
@endsection

@section('content2')
@include('search.PEPSearch')
@endsection