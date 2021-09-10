function validacion() {

    exito = true;
    var user = $('#user')[0];
    var psw = $('#password')[0];

    //USER
    if (user.value === "") {
        if (user.classList.contains("is-valid")) {
            user.classList.remove("is-valid");
        }
        user.classList.add("is-invalid");
        exito = false;
    } else {
        if (user.classList.contains("is-invalid")) {
            user.classList.remove("is-invalid");
        }
        user.classList.add("is-valid");
    }

    //PASS
    if (user.value == psw.value || psw.value === "" || !psw.value.match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/)) {
        if (psw.classList.contains("is-valid")) {
            psw.classList.remove("is-valid");
        }
        psw.classList.add("is-invalid");
        exito = false;
    } else {
        if (psw.classList.contains("is-invalid")) {
            psw.classList.remove("is-invalid");
        }
        psw.classList.add("is-valid");
    }
    return exito;
};