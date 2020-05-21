function validaSituacao(value) {
    if (value == 0) {
        $('#orientaPA').addClass("d-none");
        desmarcarRadio('orientaPA');
    }
    else 
    {
        $('#orientaPA').removeClass("d-none");
    }
}

function validaStatusAfastamento(value) {
    if (value == 1) {
        $('#necessidadeAfastamento').addClass("d-none");
        desmarcarRadio('necessidadeAfastamento');
        $('#afastamentoFuncionario').removeClass("d-none");
    }
    else 
    {
        $('#necessidadeAfastamento').removeClass("d-none");
        $('#afastamentoFuncionario').addClass("d-none");
        zerarCampo('inicioAfastamento');
        zerarCampo('tempoAfastamento');
    }
}

function validaNecessidadeAfastamento(value) {
    if (value == 1) {
        $('#afastamentoFuncionario').removeClass("d-none");
    }
    else 
    {
        $('#afastamentoFuncionario').addClass("d-none");
        zerarCampo('inicioAfastamento');
        zerarCampo('tempoAfastamento');
    }
}

function validaNecessidadeAcompanhamento(value) {
    if (value == 1) {
        $('#reavaliacaoMedica').removeClass("d-none");
        $('#motivoFimAcompanhamento').addClass("d-none");
        desmarcarRadio('motivoFimAcompanhamento');
        $('#outrosMotivos').prop('disabled', true);
        zerarCampo('outrosMotivos');
    }
    else 
    {
        $('#reavaliacaoMedica').addClass("d-none");
        zerarCampo('dtReavaliacao');
        zerarCampo('hrReavaliacao');
        $('#motivoFimAcompanhamento').removeClass("d-none");
    }
}

function habilitaOutros(value) {
    if (value == 1) {
        $('#outrosMotivos').prop('disabled', false);
    }
    else {
        $('#outrosMotivos').prop('disabled', true);
        zerarCampo('outrosMotivos');
    }
}