function validarDNI() {
    exito = true;
    var dni = $('#NroDni')[0];
    //DNI
    if (dni.value === "" || isNaN(parseInt(dni.value)) || dni.value < 0 || dni.value.length<7 || dni.value.length>8) { 
        if (dni.classList.contains("is-valid")) {
            dni.classList.remove("is-valid");
        }
        dni.classList.add("is-invalid");
        exito = false;
    } else {
        if (dni.classList.contains("is-invalid")) {
            dni.classList.remove("is-invalid");
        }
        dni.classList.add("is-valid");
    }
    return exito;
};
function validarPersona(){

    
};
