function validar() {
    var exito = true;
    var lunes = $('#lunes')[0];
    var martes = $('#martes')[0];
    var miercoles = $('#miercoles')[0];
    var jueves = $('#jueves')[0];
    var viernes = $('#viernes')[0];

    if (lunes.value === "" || lunes.value < 0) {
        if (lunes.classList.contains("is-valid")) {
            lunes.classList.remove("is-valid");
        }
        lunes.classList.add("is-invalid");
        exito = false;
    } else {
        if (lunes.classList.contains("is-invalid")) {
            lunes.classList.remove("is-invalid");
        }
        lunes.classList.add("is-valid");
    }
    if (martes.value === "" || martes.value < 0) {
        if (martes.classList.contains("is-valid")) {
            martes.classList.remove("is-valid");
        }
        martes.classList.add("is-invalid");
        exito = false;
    } else {
        if (martes.classList.contains("is-invalid")) {
            martes.classList.remove("is-invalid");
        }
        martes.classList.add("is-valid");
    }
    if (miercoles.value === "" || miercoles.value < 0) {
        if (miercoles.classList.contains("is-valid")) {
            miercoles.classList.remove("is-valid");
        }
        miercoles.classList.add("is-invalid");
        exito = false;
    } else {
        if (miercoles.classList.contains("is-invalid")) {
            miercoles.classList.remove("is-invalid");
        }
        miercoles.classList.add("is-valid");
    }
    if (jueves.value === "" || jueves.value < 0) {
        if (jueves.classList.contains("is-valid")) {
            jueves.classList.remove("is-valid");
        }
        jueves.classList.add("is-invalid");
        exito = false;
    } else {
        if (jueves.classList.contains("is-invalid")) {
            jueves.classList.remove("is-invalid");
        }
        jueves.classList.add("is-valid");
    }
    if (viernes.value === "" || viernes.value < 0) {
        if (viernes.classList.contains("is-valid")) {
            viernes.classList.remove("is-valid");
        }
        viernes.classList.add("is-invalid");
        exito = false;
    } else {
        if (viernes.classList.contains("is-invalid")) {
            viernes.classList.remove("is-invalid");
        }
        viernes.classList.add("is-valid");
    }

    return exito;
}