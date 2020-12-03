<div class="container">
    <ul class="list-group">
  
      {{-- Cabeçalho da Lista --}}
      <li class="list-group-item list-group-item-success">
        <div class="row">
          <div class="col-sm-1 text-center">
            Ações
          </div>
          <div class="col-sm-3">
            Funcionário
          </div>
          <div class="col-sm-2 text-center">
            Telefone
          </div>
          <div class="col-sm-2 text-center">
            E-Mail
          </div>
          <div class="col-sm-1 text-center">
            Distrito
          </div>
          <div class="col-sm-2 text-center">
            Unidade
          </div>
          <div class="col-sm-1 text-center">
            Categoria
          </div>
        </div>
      </li>

      @foreach ($funcionarios as $funcionario)
      <li class="list-group-item">
        <div class="row">
          <div class="btn-group col-sm-1" role="group">
              
            {{-- Botão Editar --}}
            <form action="{{ url('funcionario/edit/' .$funcionario->id) }}" method="POST">
              @csrf
              @method('GET')
              <button type="submit" class="btn btn-info btn-sm px-1 py-0" data-toggle="tooltip" data-placement="top" title="Editar">
                <img src="{{ asset('img/editar.png')}}">
              </button>
            </form>

            {{-- Botão Apagar --}}
            <form action="funcionario/{{ $funcionario->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm px-1 py-0" data-toggle="tooltip" data-placement="top" title="Apagar">
                <img src="{{ asset('img/delete.png')}}">
              </button>
            </form>

          </div>
          <div class="col-sm-3">
            {{ $funcionario->nome }}
          </div>
          <div class="col-sm-2 text-center">
            {{ $funcionario->telefone}}
          </div>
          <div class="col-sm-2">
            {{ $funcionario->email}}
          </div>
          <div class="col-sm-1 text-center">
            {{ $funcionario->distrito}}
          </div>
          <div class="col-sm-2 text-center">
            {{ $funcionario->unidade }}
          </div>
          <div class="col-sm-1 text-center">
            {{ $funcionario->categoriaAcompanhante }}
          </div>
        </div>
      </li>
    @endforeach
  </ul>
</div>
    </ul>
  </div>