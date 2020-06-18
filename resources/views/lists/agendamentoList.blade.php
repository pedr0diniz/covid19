<div class="container">
  <ul class="list-group">

    {{-- Cabeçalho da Lista --}}
    <li class="list-group-item list-group-item-success">
      <div class="row">
        <div class="col-sm-7">
          Funcionário
        </div>
        <div class="col-sm-2 text-center">
          Data
        </div>
        <div class="col-sm-1 text-center">
          Hora
        </div>
        <div class="col-sm-2 text-center">
          Tipo de Atendimento
        </div>
      </div>
    </li>

    @foreach ($agendamentos as $agendamento)
      <li class="list-group-item">
        <div class="row">
          <div class="col-sm-1 text-center">
            <div class="row text-center">
              
              <form action="agendamento/{{ $agendamento->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-info btn-sm px-0 py-0" data-toggle="tooltip" data-placement="top" title="Editar">
                  <img src="{{ asset('img/editar.png')}}">
                </button>
              </form>

              <form action="agendamento/{{ $agendamento->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm px-0 py-0" data-toggle="tooltip" data-placement="top" title="Apagar">
                  <img src="{{ asset('img/delete.png')}}">
                </button>
              </form>

            </div>
          </div>
          <div class="col-sm-6">
            {{ $agendamento->nome }}
          </div>
          <div class="col-sm-2 text-center">
            {{ $agendamento->dataAgendamento }}
          </div>
          <div class="col-sm-1 text-center">
            {{ $agendamento->horaAgendamento }}
          </div>
          <div class="col-sm-2 text-center">
            {{ $agendamento->categoriaAcompanhante }}
          </div>
        </div>
      </li>
    @endforeach
  </ul>
</div>