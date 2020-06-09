<form action="{{ url('agendamento') }}" method="POST">
    @csrf

    {{-- Nome do Funcionário --}}
    @include('forms.camposrepetidos.nomeFuncionario')

    {{-- Data e Hora do Agendamento --}}
    <div class="form-group row">
      <label for="dtAgendamento" class="col-sm-3 col-form-label">Data do Agendamento:</label>
      <div class="col-sm-4">
        <input type="date" class="form-control" id="dtAgendamento" name="dtAgendamento">
      </div>
      <label for="hrAgendamento" class="col-sm-3 col-form-label">Hora do agendamento:</label>
      <div class="col-sm-2">
        <input type="time" class="form-control" id="hrAgendamento" name="hrAgendamento">
      </div>
    </div>
    <hr>

    {{-- Tipo de profissional --}}
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Tipo de profissional:</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="profAgendamento" id="profEnfermagem" value="Enfermagem">
            <label class="form-check-label" for="profEnfermagem">
              Equipe de Enfermagem
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="profAgendamento" id="profMedico" value="Medico">
            <label class="form-check-label" for="profMedico">
              Equipe Médica
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="profAgendamento" id="profPsico" value="Psicologo">
            <label class="form-check-label" for="profPsico">
              Equipe de Psicologia
            </label>
          </div>
        </div>
      </div>
    </fieldset>

    {{-- Agendar --}}
    <div class="form-group row">
      <div class="col-sm-3">
        <button type="submit" class="btn btn-success">Agendar</button>
      </div>
      <div class="col-sm-9">
        <p class="msg"> {{ session('msg') }}</p>
      </div>
    </div>
  </form>