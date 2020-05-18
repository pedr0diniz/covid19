<form>
    @csrf
    <div class="form-group row">
      <label for="dtAgendamento" class="col-sm-3 col-form-label">Data do Agendamento:</label>
      <div class="col-sm-4">
        <input type="date" class="form-control" id="dtAgendamento">
      </div>
      <label for="hrAgendamento" class="col-sm-3 col-form-label">Hora do agendamento:</label>
      <div class="col-sm-2">
        <input type="time" class="form-control" id="hrAgendamento">
      </div>
    </div>

    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Tipo de profissional:</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="profAgendamento" id="profEnfermagem" value="opcao1">
            <label class="form-check-label" for="profEnfermagem">
              Equipe de Enfermagem
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="profAgendamento" id="profMedico" value="opcao2">
            <label class="form-check-label" for="profMedico">
              Equipe Médica
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="profAgendamento" id="profPsico" value="opcao3">
            <label class="form-check-label" for="profPsico">
              Equipe de Psicologia
            </label>
          </div>
        </div>
      </div>
    </fieldset>

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Agendar</button>
      </div>
    </div>
  </form>