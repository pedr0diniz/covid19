@extends('layouts.covidselect')

@push('scripts')
<script type="text/javascript" src="{{ asset('js/limparCampos.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/validaAcompEnfermagem.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/habilitarOutros.js') }}"></script>
@endpush

@section('option1', 'Novo Acompanhamento')
@section('option2', 'Buscar Funcionário')

@section('content1')
@include('forms.acompEnfermagemForm')
@endsection

@section('content2')
@include('search.acompEnfermagemSearch')
@endsection