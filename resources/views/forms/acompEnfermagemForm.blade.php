<form>
    @csrf

    {{-- Nome do Funcionário --}}
    <div class="form-group row">
    <label for="nomeFuncionario" class="col-sm-3 col-form-label">Nome do Funcionário:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="nomeFuncionario">
        </div>
    </div>
    <hr>

    {{-- Sessão Atual e Acompanhamento Anterior --}}
    <div class="form-group row">
        <label for="sessaoAtual" class="col-sm-3 col-form-label">Sessão Atual:</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="sessaoAtual">
        </div>
        <label for="acompAnterior" class="col-sm-3 col-form-label">Acompanhamento anterior:</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="acompAnterior">
        </div>
        <div class="col-12"> <hr> </div>
    </div>

    {{-- Anamnese (pergunta em comum) --}}
    @include('forms.perguntasrepetidas.anamnese')

    {{-- Situação atual em comparação aos acompanhamentos anteriores (ou ao formulário) --}}
    @include('forms.perguntasrepetidas.situacaoAtual')

    {{-- O funcionário foi orientado a procurar o Pronto-Atendimento? --}}
    @include('forms.perguntasrepetidas.orientacaoPA')

</form>

<script>
    $('#anamnese').removeClass("d-none");
</script>