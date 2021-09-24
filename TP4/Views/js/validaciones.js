function validarPatente() {
    var exito = true;
    var patente = $('#patente')[0];


    if (patente.value === "" || !patente.match(/[A-Z]{3} [0-9]{3}/)) {
        if (patente.classList.contains("is-valid")) {
            patente.classList.remove("is-valid");
        }
        patente.classList.add("is-invalid");
        exito = false;
    } else {
        if (patente.classList.contains("is-invalid")) {
            patente.classList.remove("is-invalid");
        }
        patente.classList.add("is-valid");
    }
    return exito;

}