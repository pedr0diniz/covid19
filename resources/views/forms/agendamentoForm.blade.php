{{-- @php
dd($editAgendamento['nome']);
if (empty($editAgendamento['nome']))
  {
    echo('nome vazio');
  }
@endphp --}}

{{-- @php
    dd($editAgendamento['categoriaAcompanhante']);
@endphp --}}

<form action="{{ url('agendamento/'.$editAgendamento->id) }}" method="POST">
  @csrf

  {{-- Nome do Funcionário --}}
  {{-- @include('forms.camposrepetidos.nomeFuncionario') --}}
  <div class="form-group row">
    <label for="nomeFuncionario" class="col-sm-3 col-form-label">Nome do Funcionário:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario" value="<?php echo($editAgendamento['nome']); ?>" {{ ($editAgendamento->nome!="")? "disabled" : "" }}>
        </div>
    </div>
    <hr>

  {{-- Data e Hora do Agendamento --}}
  <div class="form-group row">
    <label for="dataAgendamento" class="col-sm-3 col-form-label">Data do Agendamento:</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="dataAgendamento" name="dataAgendamento" value="<?php echo($editAgendamento['dataAgendamento']); ?>">
    </div>
    <label for="horaAgendamento" class="col-sm-3 col-form-label">Hora do agendamento:</label>
    <div class="col-sm-2">
      <input type="time" class="form-control" id="horaAgendamento" name="horaAgendamento" value="<?php echo($editAgendamento['horaAgendamento']); ?>">
    </div>
  </div>
  <hr>

  {{-- Tipo de profissional e Agendar com--}}
  <fieldset class="form-group">
    <div class="row">

      {{-- Tipo de profissional: --}}
      <legend class="col-form-label col-sm-2 pt-0">Tipo de profissional:</legend>
      <div class="col-sm-3">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="categoriaAcompanhante" id="profEnfermagem" value="Enfermagem" {{ ($editAgendamento->categoriaAcompanhante=="Enfermagem")? "checked" : "" }}>
          <label class="form-check-label" for="profEnfermagem">
            Equipe de Enfermagem
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="categoriaAcompanhante" id="profMedico" value="Médico" {{ ($editAgendamento->categoriaAcompanhante=="Médico")? "checked" : "" }}>
          <label class="form-check-label" for="profMedico">
            Equipe Médica
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="categoriaAcompanhante" id="profPsico" value="Psicólogo" {{ ($editAgendamento->categoriaAcompanhante=="Psicólogo")? "checked" : "" }}>
          <label class="form-check-label" for="profPsico">
            Equipe de Psicologia
          </label>
        </div>
      </div>

      {{-- Agendar com --}}
      <legend class="col-form-label col-sm-2 pt-0">Agendar com:</legend>
      <div class="col-sm-5">
        <select name="agendarCom" id="agendarCom">
          <option value="" disabled selected>Enfermagem, Médico ou Psicólogo</option>
          {{-- @foreach ($acompanhantes as $acompanhante)
              <option value="{{ $acompanhante->nome }}">{{ $acompanhante->nome }}</option>
          @endforeach --}}
        </select>
      </div>
    </div>
  </fieldset>

  {{-- Agendar, Atualizar e Cancelar Edição --}}
  <div class="form-group row">
    @if ($editAgendamento->nome=="")

      <div class="col-sm-2">
        <button type="submit" class="btn btn-success">Agendar</button>
      </div>

    @else
      <div class="col-sm-6">

        <button type="submit" class="btn btn-primary">Atualizar Agendamento</button>
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <a href="{{url('agendamento')}}">
          <button type="button" class="btn btn-danger">Cancelar Edição</button>
        </a>
      </div>
    @endif

    <div class="col-sm-6">
      <p class="msg"> {{ session('msg') }}</p>
    </div>
  </div>
</form>