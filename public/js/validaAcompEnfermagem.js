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

function escondePAProximoPasso(value) {
    if (value == 1) {
        $('#orientadoAoPA').addClass("d-none");
        $('#procurarPA').prop('checked', false);
    }
    else
    {
        $('#orientadoAoPA').removeClass("d-none");
    }
}

function validaSeguimento(value) {
    if (value == 0) {
        $('#proximoAcompanhamento').addClass("d-none");
        zerarCampo('dtProximoAcompanhamento');
    }
    else 
    {
        $('#proximoAcompanhamento').removeClass("d-none");
    }
}