<form>
    @csrf
    <div class="form-group row">
        <label for="nomeFuncionario" class="col-sm-3 col-form-label">Nome do Funcionário:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="nomeFuncionario" placeholder="Nome do Funcionário">
        </div>
        <label for="cpfFuncionario" class="col-sm-3 col-form-label">CPF do Funcionário:</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="cpfFuncionario" placeholder="123.456.789-00">
        </div>
      </div>
  
      <div class="form-group row">
        <label for="unidadeFuncionario" class="col-sm-3 col-form-label">Unidade:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="unidadeFuncionario">
        </div>
        <label for="distritoFuncionario" class="col-sm-1 col-form-label"> Distrito:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="distritoFuncionario">
        </div>       
      </div>
  
      <div class="form-group row">
        <label for="categoriaFuncionario" class="col-sm-3 col-form-label">Categoria:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="categoriaFuncionario" placeholder="Dr. José">
        </div>
      </div>
  
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Buscar</button>
        </div>
      </div>
  </form>