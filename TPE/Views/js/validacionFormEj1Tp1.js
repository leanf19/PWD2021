function validarForm() {
    var exito = true;
    var num = $('#numero')[0];

    if (num.value === "") {
        if (num.classList.contains("is-valid")) {
            num.classList.remove("is-valid");
        }
        num.classList.add("is-invalid");
        exito = false;
    } else {
        if (num.classList.contains("is-invalid")) {
            num.classList.remove("is-invalid");
        }
        num.classList.add("is-valid");
    }
    alert(exito);
    return exito;
}