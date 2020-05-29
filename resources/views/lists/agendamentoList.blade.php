{{-- {{ dd($agendamentos->toArray()) }} --}}

<div class="container">
  <ul class="list-group">

    {{-- Cabeçalho da Lista --}}
    <li class="list-group-item list-group-item-success">
      <div class="row">
        <div class="col-sm-5">
          Funcionário
        </div>
        <div class="col-sm-2 text-center">
          Data
        </div>
        <div class="col-sm-2 text-center">
          Hora
        </div>
        <div class="col-sm-3 text-center">
          Tipo de Atendimento
        </div>
      </div>
    </li>

    @foreach ($agendamentos as $agendamento)
      <li class="list-group-item">
        <div class="row">
          <div class="col-sm-5">
            {{ $agendamento->nomeFuncionario }}
          </div>
          <div class="col-sm-2 text-center">
            {{ $agendamento->dataAgendamento }}
          </div>
          <div class="col-sm-2 text-center">
            {{ $agendamento->horaAgendamento }}
          </div>
          <div class="col-sm-3 text-center">
            {{ $agendamento->categoriaAcompanhante }}
          </div>
        </div>
      </li>
    @endforeach
  </ul>
</div>