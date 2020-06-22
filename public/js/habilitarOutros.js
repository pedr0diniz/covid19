function habilitaOutrosSintomas() {
    if ($('#sintomaOutros').is(':checked'))  {
        $('#outrosSintomas').prop('disabled', false);
    }
    else {
        $('#outrosSintomas').prop('disabled', true);
        zerarCampo('outrosSintomas');
    }
}

function habilitaOutrosSintomasTriagem() {
    if ($('#sintomaOutrosTriagem').is(':checked'))  {
        $('#outrosSintomasTriagem').prop('disabled', false);
    }
    else {
        $('#outrosSintomasTriagem').prop('disabled', true);
        // zerarCampo('outrosSintomasTriagem');
        $('#outrosSintomasTriagem').val('');
    }
}