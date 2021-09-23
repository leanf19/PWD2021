function validacion() {

    exito = true;
    var titulo = $('#titulo')[0];
    var actores = $('#actores')[0];
    var director = $('#director')[0];
    var guion = $('#guion')[0];
    var produccion = $('#produccion')[0];
    var anio = $('#anio')[0];
    var nacionalidad = $('#nacionalidad')[0];
    var genero = $('#genero')[0];
    var duracion = $('#duracion')[0];
    //var edad = $('#edad')[0];

    //Verificación titulo
    if (titulo.value === "") {
        if (titulo.classList.contains("is-valid")) {
            titulo.classList.remove("is-valid");
        }
        titulo.classList.add("is-invalid");
        exito = false;

    } else {
        if (titulo.classList.contains("is-invalid")) {
            titulo.classList.remove("is-invalid");
        }
        titulo.classList.add("is-valid");
    }

    //Verificación actores
    if (actores.value === "") {
        if (actores.classList.contains("is-valid")) {
            actores.classList.remove("is-valid");
        }
        actores.classList.add("is-invalid");
        exito = false;

    } else {
        if (actores.classList.contains("is-invalid")) {
            actores.classList.remove("is-invalid");
        }
        actores.classList.add("is-valid");
    }

    //Verificación director
    if (director.value === "") {
        if (director.classList.contains("is-valid")) {
            director.classList.remove("is-valid");
        }
        director.classList.add("is-invalid");
        exito = false;
    } else {
        if (director.classList.contains("is-invalid")) {
            director.classList.remove("is-invalid");
        }
        director.classList.add("is-valid");
    }

    //Verificación guion
    if (guion.value === "") {
        if (guion.classList.contains("is-valid")) {
            guion.classList.remove("is-valid");
        }
        guion.classList.add("is-invalid");
        exito = false;
    } else {
        if (guion.classList.contains("is-invalid")) {
            guion.classList.remove("is-invalid");
        }
        guion.classList.add("is-valid");
    }

    //Verificación produccion
    if (produccion.value === "") {
        if (produccion.classList.contains("is-valid")) {
            produccion.classList.remove("is-valid");
        }
        produccion.classList.add("is-invalid");
        exito = false;
    } else {
        if (produccion.classList.contains("is-invalid")) {
            produccion.classList.remove("is-invalid");
        }
        produccion.classList.add("is-valid");
    }

    //Verificación año
    if (anio.value === "" || !anio.value.match(/^\d{4}/)) {
        if (anio.classList.contains("is-valid")) {
            anio.classList.remove("is-valid");
        }
        anio.classList.add("is-invalid");
        exito = false;
    } else {
        if (anio.classList.contains("is-invalid")) {
            anio.classList.remove("is-invalid");
        }
        anio.classList.add("is-valid");
    }

    //Verificación nacionalidad
    if (nacionalidad.value === "") {
        if (nacionalidad.classList.contains("is-valid")) {
            nacionalidad.classList.remove("is-valid");
        }
        nacionalidad.classList.add("is-invalid");
        exito = false;
    } else {
        if (nacionalidad.classList.contains("is-invalid")) {
            nacionalidad.classList.remove("is-invalid");
        }
        nacionalidad.classList.add("is-valid");
    }

    //Verificación genero
    if (genero.value === "") {
        if (genero.classList.contains("is-valid")) {
            genero.classList.remove("is-valid");
        }
        genero.classList.add("is-invalid");
        exito = false;
    } else {
        if (genero.classList.contains("is-invalid")) {
            genero.classList.remove("is-invalid");
        }
        genero.classList.add("is-valid");
    }

    //Verificación duracion
    if (duracion.value === "" || !duracion.value.match(/^\d{1,3}/)) {
        if (duracion.classList.contains("is-valid")) {
            duracion.classList.remove("is-valid");
        }
        duracion.classList.add("is-invalid");
        exito = false;
    } else {
        if (duracion.classList.contains("is-invalid")) {
            duracion.classList.remove("is-invalid");
        }
        duracion.classList.add("is-valid");
    }

    return exito;
};
