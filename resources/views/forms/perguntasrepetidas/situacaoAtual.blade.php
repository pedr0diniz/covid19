<fieldset class="form-group">
  <div class="row">
    <legend class="col-form-label col-sm-12 pt-0">Qual a situação do funcionário em comparação aos acompanhamentos anteriores?</legend>
    <div class="col-sm-8">
      <div class="form-check">
        <input class="form-check-input" type="radio" onClick="validaSituacao(0)" name="situacaoPaciente" id="melhoraQuadro" value="opcao1">
        <label class="form-check-label" for="melhoraQuadro">
          Apresenta melhora do quadro clínico
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" onClick="validaSituacao(0)" name="situacaoPaciente" id="constanteQuadro" value="opcao2">
        <label class="form-check-label" for="constanteQuadro">
          Quadro clínico sem alterações
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" onClick="validaSituacao(1)" name="situacaoPaciente" id="pioraQuadro" value="opcao3">
        <label class="form-check-label" for="pioraQuadro">
          Apresenta piora do quadro clínico
        </label>
      </div>
    </div> 
  </div>
  <div class="col-12"> <hr> </div>
</fieldset>