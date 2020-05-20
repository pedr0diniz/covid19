function desmarcarRadio(divId) {
$('#' + divId + ' :radio:enabled').prop('checked', false);
}

function desmarcarCheckbox(divId) {
$('#' + divId + ' :checkbox:enabled').prop('checked', false);
}

function zerarCampo(divId) {
$('#' + divId).val('');
}