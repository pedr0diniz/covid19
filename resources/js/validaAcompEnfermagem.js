$('#anamnese').removeClass("d-none");

function validaSituacao(value) {
    if (value == 0) {
        $('#orientaPA').addClass("d-none");
        desmarcarRadio
    }
    else 
    {
        $('#orientaPA').removeClass("d-none");
    }
}