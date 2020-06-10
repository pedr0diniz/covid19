<form>
    @csrf

    {{-- Nome do Funcionário --}}
    @include('forms.camposrepetidos.nomeFuncionario')

    {{-- Sessão Atual e Acompanhamento Anterior --}}
    @include('forms.camposrepetidos.sessaoAtualAcompAnterior')

    {{-- Anamnese (pergunta em comum) --}}
    @include('forms.camposrepetidos.anamnese')

    {{-- Esteve em contato com algum caso confirmado da COVID-19 nas últimas duas semanas? --}}
    @include('forms.camposrepetidos.contatoComInfectado')

    {{-- Situação atual em comparação aos acompanhamentos anteriores (ou ao formulário) --}}
    @include('forms.camposrepetidos.situacaoAtual')

    {{-- O funcionário foi orientado a procurar o Pronto-Atendimento? --}}
    @include('forms.camposrepetidos.orientacaoPA')

    {{-- Próximo passo do acompanhamento --}}
    <fieldset class="form-group" id="seguimento">
        <div class="row">
            <legend class="col-form-label col-sm-12 pt-0">Próximo passo do acompanhamento:</legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaSeguimento(1)" name="seguimentoPaciente" id="segueAcompanhamento" value="opcao1">
                    <label class="form-check-label" for="segueAcompanhamento">
                        Seguimento do acompanhamento
                    </label>
                </div>
                <div class="form-check" id="orientadoAoPA">
                    <input class="form-check-input" type="radio" onClick="validaSeguimento(1)" name="seguimentoPaciente" id="procurarPA" value="opcao2">
                    <label class="form-check-label" for="procurarPA">
                        Orientado a procurar o Pronto-Atendimento
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaSeguimento(1)" name="seguimentoPaciente" id="agendadoMedico" value="opcao3">
                    <label class="form-check-label" for="agendadoMedico">
                    Agendamento com médico
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaSeguimento(0)" name="seguimentoPaciente" id="encerraAcompanhamento" value="opcao4">
                    <label class="form-check-label" for="encerraAcompanhamento">
                        Encerramento do acompanhamento
                    </label>
                </div>
            </div> 
        </div>
        <div class="col-12"> <hr> </div>
    </fieldset>

    {{-- Data do próximo acompanhamento: --}}
    <div class="form-group row" id="proximoAcompanhamento">
        <label for="dtProximoAcompanhamento" class="col-sm-4 col-form-label">Data do próximo acompanhamento:</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="dtProximoAcompanhamento">
        </div>
        <div class="col-12"> <hr> </div>
    </div>

    {{-- Concluir acompanhamento --}}
    <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Concluir acompanhamento</button>
        </div>
      </div>

</form>

<script>
    $('#anamnese').removeClass("d-none")
</script>