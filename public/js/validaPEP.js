function validaSintomas(value) {
    if (value == 1) {
        $('#pacienteSintomatico').removeClass("d-none");
        $('#pacienteAssintomatico').addClass("d-none");
        $('#ultimoContato').addClass("d-none");
        zerarCampo('dataContato');
        $('#anamnese').removeClass("d-none");
        desmarcarRadio('pacienteAssintomatico');
    }
    else {
        $('#pacienteSintomatico').addClass("d-none");
        zerarCampo('dataInicioSintomas');
        $('#pacienteAssintomatico').removeClass("d-none");
        $('#anamnese').addClass("d-none");
        desmarcarCheckbox('anamnese');
    }
}

function validaContato(value) {
    if (value == 1) {
        $('#ultimoContato').removeClass("d-none");
    }
    else {
        $('#ultimoContato').addClass("d-none");
        zerarCampo('dataContato');
    }
}

function validaIsolamento(value) {
    if (value == 1) {
        $('#datasIsolamento').removeClass("d-none");
    }
    else 
    {
        $('#datasIsolamento').addClass("d-none");
        zerarCampo('dataInicioIsolamento');
        zerarCampo('dataFimIsolamento');
    }
}