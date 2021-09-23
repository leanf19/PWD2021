function validar() {
    exito = true;
    var edad = $('#edad')[0];

    if (edad.value == "" || edad.value <= 0) {
        if (edad.classList.contains("is-valid")) {
            edad.classList.remove("is-valid");
        }
        edad.classList.add("is-invalid");
        exito = false;

    } else {
        if (edad.classList.contains("is-invalid")) {
            edad.classList.remove("is-invalid");
        }
        edad.classList.add("is-valid");
    }
    return exito;
}