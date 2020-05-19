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

  {{-- O funcionário apresenta sintomas? --}}
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-4 pt-0">O funcionário apresenta sintomas?</legend>
      <div class="col-sm-8">
        <div class="form-check">
          <input class="form-check-input" type="radio" onClick="validaSintomas(1)" name="apresentaSintomas" id="apresentaSim" value="opcao1">
          <label class="form-check-label" for="apresentaSim">
            Sim
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" onClick="validaSintomas(0)" name="apresentaSintomas" id="apresentaNao" value="opcao2">
          <label class="form-check-label" for="apresentaNao">
            Não
          </label>
        </div>
      </div> 
    </div>
  </fieldset>
  <hr>

  {{-- Desde quando o funcionário sente sintomas? --}}
  <div class="form-group row d-none" id="pacienteSintomatico">
  <label for="pacienteSintomatico" class="col-sm-4 col-form-label">Desde quando o funcionário sente sintomas?</label>
    <div class="col-sm-3">
        <input type="date" class="form-control" id="dataInicioSintomas">
    </div>
    <div class="col-12"> <hr> </div>
  </div>

  {{-- O funcionário teve contato com algum caso confirmado? --}}
  <fieldset class="form-group d-none" id="pacienteAssintomatico">
    <div class="row">
      <legend class="col-form-label col-sm-4 pt-0">O funcionário teve contato com algum caso confirmado?</legend>
      <div class="col-sm-8">
        <div class="form-check">
          <input class="form-check-input" type="radio" onClick="validaContato(1)" name="teveContato" id="simTeveContato" value="opcao1">
          <label class="form-check-label" for="simTeveContato">
            Sim
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" onClick="validaContato(0)" name="teveContato" id="naoTeveContato" value="opcao2">
          <label class="form-check-label" for="naoTeveContato">
            Não
          </label>
        </div>
      </div>
      <div class="col-12"> <hr> </div> 
    </div>
  </fieldset>

  {{-- Qual a data do último contato? --}}
  <div class="form-group row d-none" id="ultimoContato">
    <label for="dataContato" class="col-sm-4 col-form-label">Qual a data do último contato?</label>
    <div class="col-sm-3">
        <input type="date" class="form-control" id="dataContato">
    </div>
    <div class="col-12"> <hr> </div>
  </div>

  {{-- Anamnese (pergunta em comum) --}}
  @include('forms.perguntasrepetidas.anamnese')

        
  {{-- Assinale todas as morbidades prévias do funcionário: --}}
  <fieldset class="form-group" id="morbidadesPrevias">
    <div>
      <legend class="col-form-label">Assinale todas as morbidades prévias do funcionário:</legend>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" class="form-check-input" id="morbidade1">
        <label class="form-check-label" for="morbidade1">Doença cardiovascular, incluindo hipertensão</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" class="form-check-input" id="morbidade2">
        <label class="form-check-label" for="morbidade2">Diabetes</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" class="form-check-input" id="morbidade3">
        <label class="form-check-label" for="morbidade3">Doença hepática</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" class="form-check-input" id="morbidade4">
        <label class="form-check-label" for="morbidade4">Doença neurológica crônica ou neuromuscular</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" class="form-check-input" id="morbidade5">
        <label class="form-check-label" for="morbidade5">Imunodeficiência</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" class="form-check-input" id="morbidade6">
        <label class="form-check-label" for="morbidade6">Infecção por HIV</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" class="form-check-input" id="morbidade7">
        <label class="form-check-label" for="morbidade7">Doença renal</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" class="form-check-input" id="morbidade8">
        <label class="form-check-label" for="morbidade8">Doença pulmonar crônica</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" class="form-check-input" id="morbidade9">
        <label class="form-check-label" for="morbidade9">Obesidade mórbida</label>
      </div>
      <div class="form-group row">
        <label for="morbidadesOutros" class="col-sm-1 col-form-label">Outros:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="morbidadesOutros" placeholder="Ex: hérnia de disco">
        </div>
      </div>
    </div>
  </fieldset>
  <hr>

  {{-- TIPOS DE ISOLAMENTO --}}
  <div>
    <p class="text-justify">TIPOS DE ISOLAMENTO</p>
    <p class="text-justify">Profilático: quando o(a) colaborador(a) esteve exposto(a) a contato próximo com terceiros com sintomas ou confirmação de COVID-19.</p>
    <p class="text-justify">Terapêutico: quando o(a) colaborador(a) apresentar sintomas compatíveis com COVID-19 e/ou tiver confirmação laboratorial da doença.</p>
  </div>
  <hr>

  {{-- Assinale o tipo de isolamento domiciliar recomendado para o funcionário: --}}
  <fieldset class="form-group" id="tipoIsolamento">
    <div class="row">
      <legend class="col-form-label col-sm-12 pt-0">Assinale o tipo de isolamento domiciliar recomendado para o funcionário:</legend>
      <div class="col-sm-8">
        <div class="form-check">
          <input class="form-check-input" type="radio" onClick="validaIsolamento(1)" name="tipoIsolamento" id="isolamentoProfilatico" value="opcao1">
          <label class="form-check-label" for="isolamentoProfilatico">
            Profilático
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" onClick="validaIsolamento(1)" name="tipoIsolamento" id="isolamentoTerapeutico" value="opcao2">
          <label class="form-check-label" for="isolamentoTerapeutico">
            Terapêutico
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" onClick="validaIsolamento(0)" name="tipoIsolamento" id="semIsolamento" value="opcao2">
          <label class="form-check-label" for="semIsolamento">
            Não há necessidade de afastamento
          </label>
        </div>
      </div>
      <div class="col-12"> <hr> </div> 
    </div>
  </fieldset>

  {{-- Desde quando o funcionário sente sintomas? --}}
  <fieldset class="form-group d-none" id="datasIsolamento">
    <div class="form-group row" id="inicioIsolamento">
      <label for="inicioIsolamento" class="col-sm-6 col-form-label">Informe a partir de quando começa o afastamento do funcionário:</label>
      <div class="col-sm-3">
          <input type="date" class="form-control" id="dataInicioIsolamento">
      </div>
    </div>
    <div class="form-group row" id="fimIsolamento">
      <label for="fimIsolamento" class="col-sm-6 col-form-label">Informe até quando vai o afastamento do funcionário:</label>
      <div class="col-sm-3">
          <input type="date" class="form-control" id="dataFimIsolamento">
      </div>
      <div class="col-12"> <hr> </div>
    </div>
  </fieldset>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-success">Submeter</button>
    </div>
  </div>
</form>

<script>
  function validaSintomas(value) {
      if (value == 1) {
        $('#pacienteSintomatico').removeClass("d-none");
        $('#pacienteAssintomatico').addClass("d-none");
        $('#ultimoContato').addClass("d-none");
        zerarCampo('dataContato');
        $('#anamnese').removeClass("d-none");
        desmarcarRadio('pacienteAssintomatico');
      }
      else {
        $('#pacienteSintomatico').addClass("d-none");
        zerarCampo('dataInicioSintomas');
        $('#pacienteAssintomatico').removeClass("d-none");
        $('#anamnese').addClass("d-none");
        desmarcarCheckbox('anamnese');
      }
  }
</script>

<script>
  function validaContato(value) {
    if (value == 1) {
      $('#ultimoContato').removeClass("d-none");
    }
    else {
      $('#ultimoContato').addClass("d-none");
      zerarCampo('dataContato');
    }
  }
</script>

<script>
  function validaIsolamento(value) {
    if (value == 1) {
      $('#datasIsolamento').removeClass("d-none");
    }
    else {
      $('#datasIsolamento').addClass("d-none");
      zerarCampo('dataInicioIsolamento');
      zerarCampo('dataFimIsolamento');
    }
  }
</script>

<script>
  function desmarcarRadio(divId) {
    $('#' + divId + ' :radio:enabled').prop('checked', false);
  }

  function desmarcarCheckbox(divId) {
    $('#' + divId + ' :checkbox:enabled').prop('checked', false);
  }

  function zerarCampo(divId) {
    $('#' + divId).val('');
  }
</script>