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

    {{-- Insira o código CID mais provável: --}}
    <div class="form-group row">
        <label for="nomeFuncionario" class="col-sm-4 col-form-label">Insira o código CID mais provável:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="codigoCID">
            </div>
    </div>
    <hr>
    
    {{-- Caso deseje, utilize o espaço abaixo para registrar informações pertinentes sobre o paciente: --}}
    <div class="form-group row">
        <label for="nomeFuncionario" class="col-sm-12 col-form-label">Caso deseje, utilize o espaço abaixo para registrar informações pertinentes sobre o paciente:</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="nomeFuncionario">
            </div>
    </div>
    <hr>

    <div>
        <p class="text-center">Comparação entre a COVID-19 e outras doenças respiratórias comuns</p>
        <img src="{{ asset('img/comparacao-entre-covid-19-gripe-resfriado.jpg') }}" class="rounded mx-auto d-block">
    </div>
    <hr>

    {{-- O funcionário está afastado? --}}
    <fieldset class="form-group" id="statusAfastamento">
        <div class="row">
            <legend class="col-form-label col-sm-3 pt-0">O funcionário está afastado?</legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaStatusAfastamento(1)" name="statusAfastamento" id="funcionarioAfastado" value="opcao1">
                    <label class="form-check-label" for="funcionarioAfastado">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaStatusAfastamento(0)" name="statusAfastamento" id="liberadoParaTrabalho" value="opcao2">
                    <label class="form-check-label" for="liberadoParaTrabalho">
                        Não
                    </label>
                </div>
            </div> 
        </div>
        <div class="col-12"> <hr> </div>
    </fieldset>

    {{-- O funcionário necessita ser afastado? --}}
    <fieldset class="form-group d-none" id="necessidadeAfastamento">
        <div class="row">
            <legend class="col-form-label col-sm-3 pt-0">O funcionário necessita ser afastado?</legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaNecessidadeAfastamento(1)" name="necessidadeAfastamento" id="necessitaAfastamento" value="opcao1">
                    <label class="form-check-label" for="necessitaAfastamento">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaNecessidadeAfastamento(0)" name="necessidadeAfastamento" id="naoNecessitaAfastamento" value="opcao2">
                    <label class="form-check-label" for="naoNecessitaAfastamento">
                        Não, está liberado para trabalho
                    </label>
                </div>
            </div> 
        </div>
        <div class="col-12"> <hr> </div>
    </fieldset>
    
    <fieldset class="form-group d-none" id="afastamentoFuncionario">
        <div class="form-group row">
            <label for="intervaloAtendimento1" class="col-sm-4 col-form-label">Em que dia se iniciou/iniciará o afastamento?</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="inicioAfastamento">
            </div>
            <label for="intervaloAtendimento2" class="col-sm-3 col-form-label"> Tempo de afastamento (dias)</label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="tempoAfastamento">
            </div> 
            <div class="col-12"> <hr> </div>      
        </div>
    </fieldset>
    
    {{-- Há necessidade de continuar o acompanhamento? --}}
    <fieldset class="form-group" id="necessidadeAcompanhamento">
        <div class="row">
            <legend class="col-form-label col-sm-3 pt-0">Há necessidade de continuar o acompanhamento?</legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaNecessidadeAcompanhamento(1)" name="necessidadeAcompanhamento" id="acompNecessario" value="opcao1">
                    <label class="form-check-label" for="acompNecessario">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaNecessidadeAcompanhamento(0)" name="necessidadeAcompanhamento" id="acompDesnecessario" value="opcao2">
                    <label class="form-check-label" for="acompDesnecessario">
                        Não
                    </label>
                </div>
            </div> 
        </div>
        <div class="col-12"> <hr> </div>
    </fieldset>

    {{-- Desejar agendar uma reavaliação deste paciente? --}}
        <fieldset class="form-group d-none" id="desejaAgendar">
        <div class="row">
            <legend class="col-form-label col-sm-3 pt-0">Desejar agendar uma reavaliação deste paciente?</legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaDesejaAgendar(1)" name="desejaAgendar" id="desejoAgendar" value="opcao1">
                    <label class="form-check-label" for="desejoAgendar">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaDesejaAgendar(0)" name="desejaAgendar" id="nDesejoAgendar" value="opcao2">
                    <label class="form-check-label" for="nDesejoAgendar">
                        Não
                    </label>
                </div>
            </div> 
        </div>
        <div class="col-12"> <hr> </div>
    </fieldset>

    {{-- Reavaliação médica --}}
    <fieldset class="form-group d-none" id="reavaliacaoMedica">
        <div class="form-group row">
            <label for="dtReavaliacao" class="col-sm-3 col-form-label">Data da próxima reavaliação:</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="dtReavaliacao">
            </div>
            <label for="hrReavaliacao" class="col-sm-3 col-form-label">Hora da próxima reavaliação:</label>
            <div class="col-sm-2">
                <input type="time" class="form-control" id="hrReavaliacao">
            </div>
        </div>
        <div class="col-12"> <hr> </div>
    </fieldset>

    <fieldset class="form-group d-none" id="motivoFimAcompanhamento">
        <div class="row">
            <legend class="col-form-label col-sm-12 pt-0">Motivo para finalização do acompanhamento:</legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="habilitaOutrosMotivos(0)" name="motivoFimAcompanhamento" id="fimPeriodoAcomp" value="opcao1">
                    <label class="form-check-label" for="fimPeriodoAcomp">
                        Fim do período de acompanhamento
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="habilitaOutrosMotivos(0)" name="motivoFimAcompanhamento" id="obitoCOVID19" value="opcao2">
                    <label class="form-check-label" for="obitoCOVID19">
                        Óbito por COVID-19
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="habilitaOutrosMotivos(0)" name="motivoFimAcompanhamento" id="curadoCOVID19" value="opcao3">
                    <label class="form-check-label" for="curadoCOVID19">
                        Curado da COVID-19
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="habilitaOutrosMotivos(0)" name="motivoFimAcompanhamento" id="curadoSemConfirmacao" value="opcao4">
                    <label class="form-check-label" for="curadoSemConfirmacao">
                        Cura sem confirmação da COVID-19
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="habilitaOutrosMotivos(0)" name="motivoFimAcompanhamento" id="outrasDoencasRespiratorias" value="opcao5">
                    <label class="form-check-label" for="outrasDoencasRespiratorias">
                        Outras doenças respiratórias
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="habilitaOutrosMotivos(1)" name="motivoFimAcompanhamento" id="outrosMotivosFimAcomp" value="opcao6">
                    <label class="form-check-label" for="outrosMotivosFimAcomp">
                        Outros
                    </label>
                    <input type="text" class="col-sm-8" name="outrosMotivosFimTexto" id="outrosMotivosFimTexto" disabled/>
                </div>
            </div> 
        </div>
        <div class="col-12"> <hr> </div>
    </fieldset>

    {{-- Concluir acompanhamento --}}
    <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Concluir acompanhamento</button>
        </div>
      </div>    

</form>

<script>
    $('#anamnese').removeClass("d-none");
</script>