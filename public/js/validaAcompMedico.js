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
        $('#desejaAgendar').removeClass("d-none");
        desmarcarRadio('desejaAgendar');
        $('#motivoFimAcompanhamento').addClass("d-none");
        desmarcarRadio('motivoFimAcompanhamento');
        $('#outrosMotivosFimTexto').prop('disabled', true);
        zerarCampo('outrosMotivosFimTexto');
    }
    else 
    {
        $('#desejaAgendar').addClass("d-none");
        $('#reavaliacaoMedica').addClass("d-none");
        zerarCampo('dtReavaliacao');
        zerarCampo('hrReavaliacao');
        $('#motivoFimAcompanhamento').removeClass("d-none");
    }
}

function habilitaOutrosMotivos(value) {
    if (value == 1) {
        $('#outrosMotivosFimTexto').prop('disabled', false);
    }
    else {
        $('#outrosMotivosFimTexto').prop('disabled', true);
        zerarCampo('outrosMotivosFimTexto');
    }
}

function habilitaOutrosSintomas() {
    if ($('#sintomaOutros').is(':checked'))  {
        $('#outrosSintomas').prop('disabled', false);
    }
    else {
        $('#outrosSintomas').prop('disabled', true);
        zerarCampo('outrosSintomas');
    }
}

function validaDesejaAgendar(value) {
    if (value == 1) {
        $('#reavaliacaoMedica').removeClass("d-none");
    }
    else 
    {
        $('#reavaliacaoMedica').addClass("d-none");
        zerarCampo('dtReavaliacao');
        zerarCampo('hrReavaliacao');
    }
}