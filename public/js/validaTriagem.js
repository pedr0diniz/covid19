function validaSintomasTriagem(value) {
    if (value == 1) {
        $('#sintomasTriagem').removeClass("d-none");
    }
    else {
        $('#sintomasTriagem').addClass("d-none");
        desmarcarCheckbox('sintomasTriagem');
        $('#outrosSintomasTriagem').prop('disabled', true);
        zerarCampo('outrosSintomasTriagem');
    }
}

function validaPossuiAtestado(value) {
    if (value == 1) {
        $('#atestadoFuncionario').removeClass("d-none");
    }
    else {
        $('#atestadoFuncionario').addClass("d-none");
        zerarCampo('inicioAtestado');
        zerarCampo('tempoAtestado');
    }
}

function validaAmbienteExterno(value) {
    if (value == 1) {
        $('#localTrabalhoExterno').removeClass("d-none");
    }
    else {
        $('#localTrabalhoExterno').addClass("d-none");
        zerarCampo('outrosLocaisTrabalho');
    }
}