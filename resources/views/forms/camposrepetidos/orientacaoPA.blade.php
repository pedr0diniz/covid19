<fieldset class="form-group d-none" id="orientaPA">
    <div class="row">
        <legend class="col-form-label col-sm-12 pt-0">O funcionário foi orientado a procurar o Pronto-Atendimento?</legend>
        <div class="col-sm-8">
            <div class="form-check">
                <input class="form-check-input" type="radio" onClick="escondePAProximoPasso(0)" name="orientaPA" id="orientadoPA" value="opcao1">
                <label class="form-check-label" for="orientadoPA">
                    Sim
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" onClick="escondePAProximoPasso(1)" name="orientaPA" id="naoOrientadoPA" value="opcao2">
                <label class="form-check-label" for="naoOrientadoPA">
                    Não
                </label>
            </div>
        </div> 
        <div class="col-12"> <hr> </div>
    </div>
</fieldset>