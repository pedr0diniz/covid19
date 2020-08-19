<form action="{{ url('funcionario') }}" method="POST">
    @csrf

    {{-- Nome e CPF do Funcionário --}}
    <div class="form-group row">
        <div class="row col-sm-5">
            <label for="nome" class="col-sm-5 col-form-label">Nome Completo:</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Funcionário" required>
            </div>
        </div>
        
        <div class="row col-sm-4">    
            <label for="cpf" class="col-sm-3 col-form-label">CPF:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="123.456.789-00" required>
            </div>
        </div>

        <div class="row col-sm-4">
            <label for="dataNascimento" class="col-sm-5 col-form-label">Nascido em:</label>
            <div class="col-sm-7">
                <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
            </div>
        </div>

      </div>
    <hr>

    {{-- Telefone, E-Mail e Categoria do Funcionário --}}
    <div class="form-group row">
        <div class="row col-sm-4">
            <label for="telefone" class="col-sm-4 col-form-label">Telefone:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX)xxxxx-xxxx" required>
            </div>
        </div>
        <div class="row col-sm-5">
            <label for="email" class="col-sm-3 col-form-label">E-Mail:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="email" name="email" placeholder="abc@def.com" required>
            </div>
        </div>

        <div class="row col-sm-4">
            <label for="categoriaAcompanhante" class="col-sm-4 col-form-label">Categoria:</label>
            <div class="col-sm-8">
                <select type="text" class="form-control" id="categoriaAcompanhante" name="categoriaAcompanhante" required>
                    <option value="" selected disabled>Selecione a categoria</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Médico">Médico</option>
                    <option value="Enfermeiro">Enfermeiro</option>
                    <option value="NDA">NDA</option>
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
                <input type="text" class="form-control" id="numeroConselhoRegional" name="numeroConselhoRegional" placeholder="12345">
            </div>
        </div>
        <div class="row col-sm-4">
            <label for="distrito" class="col-sm-4 col-form-label">Distrito:</label>
            <div class="col-sm-8">
                <select type="text" class="form-control" id="distrito" name="distrito" required>
                    <option value="" disabled selected>Selecione o distrito</option>
                    <option value="Norte I">Norte I</option>
                    <option value="Norte II">Norte II</option>
                    <option value="Central">Central</option>
                    <option value="Leste">Leste</option>
                    <option value="Sul">Sul</option>
                    <option value="Oeste">Oeste</option>
                </select>
            </div>
        </div>

        <div class="row col-sm-5">
            <label for="unidade" class="col-sm-3 col-form-label">Unidade:</label>
            <div class="col-sm-9">
                <select type="text" class="form-control" id="unidade" name="unidade" required>
                    <option value="" disabled selected>Selecione a unidade</option>
                    <option value="UPA Norte I">UPA Norte I</option>
                    <option value="UPA Norte II">UPA Norte II</option>
                    <option value="UPA Central">UPA Central</option>
                    <option value="UBS Central">UBS Central</option>
                    <option value="UPA Leste">UPA Leste</option>
                    <option value="Hospital Municipal de Natal">Hospital Municipal de Natal</option>
                    <option value="UBS Oeste">UBS Oeste</option>
                </select>
            </div>
        </div>
    </div>
    <hr>

    {{-- Cadastrar --}}
    <div class="form-group row">
      <div class="col-sm-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>
      <div class="col-sm-9">
        <p class="msg"> {{ session('msg') }}</p>
      </div>
    </div>
  </form>