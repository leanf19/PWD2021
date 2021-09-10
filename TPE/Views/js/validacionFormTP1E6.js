function validacion() {
    exito = true;
    var nombre = $('#nombre')[0];
    var apellido = $('#apellido')[0];
    var edad = $('#edad')[0];
    var direccion = $('#direccion')[0];

    //nombre
    if (nombre.value === "") {
        if (nombre.classList.contains("is-valid")) {
            nombre.classList.remove("is-valid");
        }
        nombre.classList.add("is-invalid");
        exito = false;
    } else {
        if (nombre.classList.contains("is-invalid")) {
            nombre.classList.remove("is-invalid");
        }
        nombre.classList.add("is-valid");
    }
    //apellido
    if (apellido.value === "") {
        if (apellido.classList.contains("is-valid")) {
            apellido.classList.remove("is-valid");
        }
        apellido.classList.add("is-invalid");
        exito = false;
    } else {
        if (apellido.classList.contains("is-invalid")) {
            apellido.classList.remove("is-invalid");
        }
        apellido.classList.add("is-valid");
    }
    //direccion
    if (direccion.value === "") {
        if (direccion.classList.contains("is-valid")) {
            direccion.classList.remove("is-valid");
        }
        direccion.classList.add("is-invalid");
        exito = false;
    } else {
        if (direccion.classList.contains("is-invalid")) {
            direccion.classList.remove("is-invalid");
        }
        direccion.classList.add("is-valid");
    }
    //edad
    if (edad.value <= 0) {
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
};