function validar() {

    exito = true;
    var a = $('#A')[0];
    var b = $('#B')[0];
    var op = $('#Operacion')[0];

    //Verificación a
    if (a.value === "") {
        if (a.classList.contains("is-valid")) {
            a.classList.remove("is-valid");
        }
        a.classList.add("is-invalid");
        exito = false;

    } else {
        if (a.classList.contains("is-invalid")) {
            a.classList.remove("is-invalid");
        }
        a.classList.add("is-valid");
    }

    //Verificación b
    if (b.value === "") {
        if (b.classList.contains("is-valid")) {
            b.classList.remove("is-valid");
        }
        b.classList.add("is-invalid");
        exito = false;

    } else {
        if (b.classList.contains("is-invalid")) {
            b.classList.remove("is-invalid");
        }
        b.classList.add("is-valid");
    }

    if (op.value === "") {
        if (op.classList.contains("is-valid")) {
            op.classList.remove("is-valid");
        }
        op.classList.add("is-invalid");
        exito = false;

    } else {
        if (op.classList.contains("is-invalid")) {
            op.classList.remove("is-invalid");
        }
        op.classList.add("is-valid");
    }

    return exito;
}