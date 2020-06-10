function habilitaOutrosSintomas() {
    if ($('#sintomaOutros').is(':checked'))  {
        $('#outrosSintomas').prop('disabled', false);
    }
    else {
        $('#outrosSintomas').prop('disabled', true);
        zerarCampo('outrosSintomas');
    }
}