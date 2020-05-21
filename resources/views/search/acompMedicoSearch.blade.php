<form>
    @csrf
    <div class="form-group row">
        <label for="nomeFuncionario" class="col-sm-3 col-form-label">Nome do Funcionário:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="nomeFuncionario" placeholder="Nome do Funcionário">
        </div>
        <label for="matriculaFuncionario" class="col-sm-3 col-form-label">Matrícula do Funcionário:</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="matriculaFuncionario" placeholder="123456">
        </div>
      </div>
  
      <div class="form-group row">
        <label for="intervaloAtendimento1" class="col-sm-3 col-form-label">Atendido(s) entre o(s) dia(s):</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="intervaloAtendimento1">
        </div>
        <label for="intervaloAtendimento2" class="col-sm-1 col-form-label"> e:</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="intervaloAtendimento2">
        </div>       
      </div>
  
      <div class="form-group row">
        <label for="nomeAcomp" class="col-sm-3 col-form-label">Atendido por:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="nomeAcomp" placeholder="Dr. José">
        </div>
      </div>
  
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Buscar</button>
        </div>
      </div>
  </form>