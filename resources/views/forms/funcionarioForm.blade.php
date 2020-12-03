<form action="{{ url('funcionario/' .$editFuncionario->id) }}" method="POST">
    @csrf

    {{-- Nome e CPF do Funcionário --}}
    <div class="form-group row">
        <div class="row col-sm-5">
            <label for="nome" class="col-sm-5 col-form-label">Nome Completo:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Funcionário" required value="<?php echo($editFuncionario['nome']); ?>" {{ ($editFuncionario->nome!="")? "disabled" : ""}}>
            </div>
        </div>
        
        <div class="row col-sm-4">    
            <label for="cpf" class="col-sm-3 col-form-label">CPF:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="123.456.789-00" required value="<?php echo($editFuncionario['cpf']) ?>" {{ ($editFuncionario->cpf!="")? "disabled" : ""}}>
            </div>
        </div>

        <div class="row col-sm-4">
            <label for="dataNascimento" class="col-sm-5 col-form-label">Nascido em:</label>
            <div class="col-sm-7">
                <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required value="<?php echo($editFuncionario['dataNascimento']) ?>" {{ ($editFuncionario->dataNascimento!="")? "disabled" : ""}}>
            </div>
        </div>

      </div>
    <hr>

    {{-- Telefone, E-Mail e Categoria do Funcionário --}}
    <div class="form-group row">
        <div class="row col-sm-4">
            <label for="telefone" class="col-sm-4 col-form-label">Telefone:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX)xxxxx-xxxx" required value="<?php echo($editFuncionario['telefone']) ?>">
            </div>
        </div>
        <div class="row col-sm-5">
            <label for="email" class="col-sm-3 col-form-label">E-Mail:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="email" name="email" placeholder="abc@def.com" required value="<?php echo($editFuncionario['email']) ?>">
            </div>
        </div>

        <div class="row col-sm-4">
            <label for="categoriaAcompanhante" class="col-sm-4 col-form-label">Categoria:</label>
            <div class="col-sm-8">
                <select type="text" class="form-control" id="categoriaAcompanhante" name="categoriaAcompanhante" required>
                    <option value="" selected disabled>Selecione a categoria</option>
                    <option value="Administrador" {{($editFuncionario['categoriaAcompanhante'] == 'Administrador')? "selected" : ""}} >Administrador</option>
                    <option value="Médico" {{($editFuncionario['categoriaAcompanhante'] == 'Médico')? "selected" : ""}} >Médico</option>
                    <option value="Enfermeiro" {{($editFuncionario['categoriaAcompanhante'] == 'Enfermeiro')? "selected" : ""}} >Enfermeiro</option>
                    <option value="NDA" {{($editFuncionario['categoriaAcompanhante'] == 'NDA')? "selected" : ""}} >NDA</option>
                </select>
            </div>
        </div>
    </div>
    <hr>

    {{-- Telefone, E-Mail e Categoria do Funcionário --}}
    <div class="form-group row">
        <div class="row col-sm-4">
            <label for="numeroConselhoRegional" class="col-sm-7 col-form-label"># Conselho Regional:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="numeroConselhoRegional" name="numeroConselhoRegional" placeholder="12345" value="<?php echo($editFuncionario['numeroConselhoRegional']) ?>">
            </div>
        </div>
        <div class="row col-sm-4">
            <label for="distrito" class="col-sm-4 col-form-label">Distrito:</label>
            <div class="col-sm-8">
                <select type="text" class="form-control" id="distrito" name="distrito" required>
                    <option value="" disabled selected>Selecione o distrito</option>
                    <option value="Norte I" {{($editFuncionario['distrito'] == 'Norte I')? "selected" : ""}} >Norte I</option>
                    <option value="Norte II" {{($editFuncionario['distrito'] == 'Norte II')? "selected" : ""}} >Norte II</option>
                    <option value="Central" {{($editFuncionario['distrito'] == 'Central')? "selected" : ""}} >Central</option>
                    <option value="Leste" {{($editFuncionario['distrito'] == 'Leste')? "selected" : ""}} >Leste</option>
                    <option value="Sul" {{($editFuncionario['distrito'] == 'Sul')? "selected" : ""}} >Sul</option>
                    <option value="Oeste" {{($editFuncionario['distrito'] == 'Oeste')? "selected" : ""}} >Oeste</option>
                </select>
            </div>
        </div>

        <div class="row col-sm-5">
            <label for="unidade" class="col-sm-3 col-form-label">Unidade:</label>
            <div class="col-sm-9">
                <select type="text" class="form-control" id="unidade" name="unidade" required>
                    <option value="" disabled selected>Selecione a unidade</option>
                    <option value="UPA Norte I" {{($editFuncionario['unidade'] == 'UPA Norte I')? "selected" : ""}} >UPA Norte I</option>
                    <option value="UPA Norte II" {{($editFuncionario['unidade'] == 'UPA Norte II')? "selected" : ""}} >UPA Norte II</option>
                    <option value="UPA Central" {{($editFuncionario['unidade'] == 'UPA Central')? "selected" : ""}} >UPA Central</option>
                    <option value="UBS Central" {{($editFuncionario['unidade'] == 'UBS Norte I')? "selected" : ""}} >UBS Central</option>
                    <option value="UPA Leste" {{($editFuncionario['unidade'] == 'UPA Leste')? "selected" : ""}} >UPA Leste</option>
                    <option value="Hospital Municipal de Natal" {{($editFuncionario['unidade'] == 'Hospital Municipal de Natal')? "selected" : ""}} >Hospital Municipal de Natal</option>
                    <option value="UBS Oeste" {{($editFuncionario['unidade'] == 'UBS Oeste')? "selected" : ""}} >UBS Oeste</option>
                </select>
            </div>
        </div>
    </div>
    <hr>

    <!-- {{-- Cadastrar --}}
    <div class="form-group row">
      <div class="col-sm-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>
      <div class="col-sm-9">
        <p class="msg"> {{ session('msg') }}</p>
      </div>
    </div> -->

      {{-- Cadastrar, Atualizar e Cancelar Edição --}}
  <div>
    @if ($editFuncionario->nome=="")

      <div class="col-sm-2">
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>

    @else
      <div class="col-sm-6">

        <button type="submit" class="btn btn-primary">Atualizar Cadastro</button>
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <a href="{{url('funcionario')}}">
          <button type="button" class="btn btn-danger">Cancelar Edição</button>
        </a>
      </div>
    @endif

    <div class="col-sm-6">
      <p class="msg"> {{ session('msg') }}</p>
    </div>
  </div>
  </form>