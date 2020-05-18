<form>
    @csrf

    <div class="form-group row">
        <label for="nomeFuncionario" class="col-sm-3 col-form-label">Nome do Funcionário:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nomeFuncionario" placeholder="Nome do Funcionário">
        </div>
    </div>

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

    <div class="form-group row" id="inicioSintomas">
    <label for="inicioSintomas" class="col-sm-4 col-form-label">Desde quando o paciente sente sintomas?</label>
    <div class="col-sm-3">
        <input type="date" class="form-control" id="dataInicioSintomas">
    </div>

    <script>
        function validaSintomas(value) {
            if (value == 1) {
              $('#inicioSintomas').removeClass("d-none");
            }
            else {
              $('#inicioSintomas').addClass("d-none");
              $('#dataInicioSintomas').val('');
            }
        }
    </script>

</form>