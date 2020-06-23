<div class="container" id="triagemContainer">
    <form>
        @csrf

        {{-- Esteve em contato com algum caso confirmado da Covid-19? --}}
        <fieldset class="form-group" id="contatoComInfectado">
            <legend class="col-form-label">Esteve em contato com algum caso confirmado da Covid-19?</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="contatoComInfectado" id="simAmbienteExterno" value="opcao1">
                    <label class="form-check-label" for="simAmbienteExterno">
                        Sim, em ambiente externo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="contatoComInfectado" id="simDomicilio" value="opcao2">
                    <label class="form-check-label" for="simDomicilio">
                        Sim, em domicílio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="contatoComInfectado" id="naoSemContato" value="opcao3">
                    <label class="form-check-label" for="naoSemContato">
                        Não
                    </label>
                </div>
            <div class="col-12"> <hr> </div>
        </fieldset>

        {{-- Você fez o teste para detectar o Coronavírus? --}}
        <fieldset class="form-group" id="fezTeste">
            <legend class="col-form-label">Você fez teste para detectar o Coronavírus?</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fezTeste" id="simTesteiNegativo" value="opcao1">
                    <label class="form-check-label" for="simTesteiNegativo">
                        Sim, testei negativo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fezTeste" id="simEsperandoResultado" value="opcao2">
                    <label class="form-check-label" for="simEsperandoResultado">
                        Sim, mas ainda estou aguardando o resultado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fezTeste" id="simTesteiPositivo" value="opcao3">
                    <label class="form-check-label" for="simTesteiPositivo">
                        Sim, testei positivo
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fezTeste" id="naoFezTeste" value="opcao4">
                    <label class="form-check-label" for="naoFezTeste">
                        Não
                    </label>
                </div>
            <div class="col-12"> <hr> </div>
        </fieldset>

        {{-- Você está sentindo algum sintoma? --}}
        <fieldset class="form-group" id="senteSintomas">
            <legend class="col-form-label">Você está sentindo algum sintoma?</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaSintomasTriagem(1)" name="senteSintomas" id="simSenteSintomas" value="opcao1">
                    <label class="form-check-label" for="simSenteSintomas">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaSintomasTriagem(0)" name="senteSintomas" id="naoSenteSintomas" value="opcao2">
                    <label class="form-check-label" for="naoSenteSintomas">
                        Não
                    </label>
                </div>
            <div class="col-12"> <hr> </div>
        </fieldset>

          {{-- Assinale todas as morbidades prévias do funcionário: --}}
        <fieldset class="form-group d-none" id="sintomasTriagem">
            <legend class="col-form-label">Assinale todas as morbidades prévias do funcionário:</legend>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" class="form-check-input" name="sintomas[]" id="sintomaTriagem1">
                <label class="form-check-label" for="sintomaTriagem1">Tosse seca</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" class="form-check-input" name="sintomas[]" id="sintomaTriagem2">
                <label class="form-check-label" for="sintomaTriagem2">Tosse com secreção</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" class="form-check-input" name="sintomas[]" id="sintomaTriagem3">
                <label class="form-check-label" for="sintomaTriagem3">Falta de ar</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" class="form-check-input" name="sintomas[]" id="sintomaTriagem4">
                <label class="form-check-label" for="sintomaTriagem4">Febre</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" class="form-check-input" name="sintomas[]" id="sintomaTriagem5">
                <label class="form-check-label" for="sintomaTriagem5">Congestão nasal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" class="form-check-input" name="sintomas[]" id="sintomaTriagem6">
                <label class="form-check-label" for="sintomaTriagem6">Perda ou diminuição do olfato / paladar</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" class="form-check-input" name="sintomas[]" id="sintomaTriagem7">
                <label class="form-check-label" for="sintomaTriagem7">Diarreia</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" class="form-check-input" name="sintomas[]" id="sintomaTriagem8">
                <label class="form-check-label" for="sintomaTriagem8">Garganta inflamada</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" onClick="habilitaOutrosSintomasTriagem()" name="sintomas[]" id="sintomaOutrosTriagem">
                <label class="form-check-label" for="sintomaOutrosTriagem">Outros</label>
                <input type="text" class="col-sm-5" name="outrosSintomasTriagem" id="outrosSintomasTriagem" disabled/>
                {{-- Arrumar o zerarCampo dessa div --}}
            </div>
        </fieldset>

                {{-- O funcionário necessita ser afastado? --}}
        <fieldset class="form-group" id="possuiAtestado">
                <legend class="col-form-label">Você possui algum atestado vigente?</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onClick="validaPossuiAtestado(1)" name="possuiAtestado" id="possuiAtestado" value="opcao1">
                        <label class="form-check-label" for="possuiAtestado">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onClick="validaPossuiAtestado(0)" name="possuiAtestado" id="naoPossuiAtestado" value="opcao2">
                        <label class="form-check-label" for="naoPossuiAtestado">
                            Não
                        </label>
                    </div>
            <div class="col-12"> <hr> </div>
        </fieldset>
        
        <fieldset class="form-group d-none" id="atestadoFuncionario">
            <div class="form-group row">
                <label for="inicioAtestado" class="col-sm-4 col-form-label">Em que dia você foi afastado?</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="inicioAtestado">
                </div>
                <label for="tempoAtestado" class="col-sm-3 col-form-label"> Tempo de afastamento (dias)</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="tempoAtestado">
                </div> 
                <div class="col-12"> <hr> </div>      
            </div>
        </fieldset>

        <fieldset class="form-group" id="trabalhaExterno">
            <legend class="col-form-label">Trabalha em ambiente externo?</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaAmbienteExterno(1)" name="possuiAtestado" id="possuiAtestado" value="opcao1">
                    <label class="form-check-label" for="possuiAtestado">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" onClick="validaAmbienteExterno(0)" name="possuiAtestado" id="naoPossuiAtestado" value="opcao2">
                    <label class="form-check-label" for="naoPossuiAtestado">
                        Não
                    </label>
                </div>
            <div class="col-12"> <hr> </div>
        </fieldset>

        <fieldset class="form-group d-none" id="localTrabalhoExterno">
            <label class="form-check-label" for="outrosLocaisTrabalho">Caso queira, informe seu(s) outro(s) locais de trabalho: </label>
            <input type="text" class="col-sm-7" name="outrosLocaisTrabalho" id="outrosLocaisTrabalho">
        </fieldset>
    </form>
</div>