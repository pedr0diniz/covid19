<form>
    @csrf

    {{-- Nome do Funcionário --}}
    <div class="form-group row">
        <label for="nomeFuncionario" class="col-sm-3 col-form-label">Nome do Funcionário:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nomeFuncionario">
        </div>
    </div>

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

    {{-- Desde quando o funcionário sente sintomas? --}}
    <div class="form-group row d-none" id="pacienteSintomatico">
    <label for="pacienteSintomatico" class="col-sm-4 col-form-label">Desde quando o funcionário sente sintomas?</label>
      <div class="col-sm-3">
          <input type="date" class="form-control" id="dataInicioSintomas">
      </div>
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
      </div>
    </fieldset>

    {{-- Qual a data do último contato? --}}
    <div class="form-group row d-none" id="ultimoContato">
      <label for="dataContato" class="col-sm-4 col-form-label">Qual a data do último contato?</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="dataContato">
        </div>
      </div>

    {{--  Anamnese --}}
    <fieldset class="form-group d-none" id="anamnese">
      <div>
        <legend class="col-form-label">Assinale os sinais e sintomas que o funcionário refere:</legend>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma1">
            <label class="form-check-label" for="sintoma1">Febre</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma2">
            <label class="form-check-label" for="sintoma2">Tosse</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma3">
            <label class="form-check-label" for="sintoma3">Dor de garganta</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma4">
            <label class="form-check-label" for="sintoma4">Dificuldade de respirar</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma5">
            <label class="form-check-label" for="sintoma5">Mialgia / Artralgia</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma6">
            <label class="form-check-label" for="sintoma6">Diarreia</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma7">
            <label class="form-check-label" for="sintoma7">Náusea / Vômitos</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma8">
            <label class="form-check-label" for="sintoma8">Cefaleia (dor de cabeça)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma9">
            <label class="form-check-label" for="sintoma9">Coriza</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma10">
            <label class="form-check-label" for="sintoma10">Irritabilidade / Confusão</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma11">
            <label class="form-check-label" for="sintoma11">Adinamia (fraqueza)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma12">
            <label class="form-check-label" for="sintoma12">Produção de escarro</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma13">
            <label class="form-check-label" for="sintoma13">Calafrios</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma14">
            <label class="form-check-label" for="sintoma14">Congestão nasal</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma15">
            <label class="form-check-label" for="sintoma15">Congestão conjuntival</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma16">
            <label class="form-check-label" for="sintoma16">Dificuldade para deglutir</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma17">
            <label class="form-check-label" for="sintoma17">Manchas vermelhas pelo corpo</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma18">
            <label class="form-check-label" for="sintoma18">Gânglios linfáticos aumentados</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma19">
            <label class="form-check-label" for="sintoma19">Batimentos das asas nasais</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma20">
            <label class="form-check-label" for="sintoma20">Saturação O2 < 95%</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma21">
            <label class="form-check-label" for="sintoma21">Sinais de cianose</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma22">
            <label class="form-check-label" for="sintoma22">Tiragem intercostal</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma23">
            <label class="form-check-label" for="sintoma23">Anosmia</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" class="form-check-input" id="sintoma24">
            <label class="form-check-label" for="sintoma24">Dispneia</label>
          </div>
          <div class="form-group row">
            <label for="sintomasOutros" class="col-sm-1 col-form-label">Outros:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="sintomasOutros" placeholder="Ex: não sente gosto dos alimentos">
            </div>
        </div>
      </div>
    </fieldset>
          
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





</form>

<script>
  function validaSintomas(value) {
      if (value == 1) {
        $('#pacienteSintomatico').removeClass("d-none");
        $('#pacienteAssintomatico').addClass("d-none");
        $('#ultimoContato').addClass("d-none");
        $('#dataContato').val('');
        $('#anamnese').removeClass("d-none");
      }
      else {
        $('#pacienteSintomatico').addClass("d-none");
        $('#dataInicioSintomas').val('');
        $('#pacienteAssintomatico').removeClass("d-none");
        $('#anamnese').addClass("d-none");
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
      $('#dataContato').val('');
    }
  }
</script>