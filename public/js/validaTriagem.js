function validaSintomasTriagem(value) {
    if (value == 1) {
        $('#sintomasTriagem').removeClass("d-none");
    }
    else {
        $('#sintomasTriagem').addClass("d-none");
        desmarcarCheckbox('sintomasTriagem');
    }
}