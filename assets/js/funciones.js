function loading(rta) {
    $(rta).html("<div class='row'><div class='col-md-4 col-md-offset-4'></div><div class='col-md-4 col-md-offset-4'><center><img src='./images/cargando2.gif' width='50' height='50' alt='cargando' /></center></div><div class='col-md-4 col-md-offset-4'></div> </div>");
}

function ajax(url, datos, rta) {
    var ajax = $.post(url, datos, function (respuesta) {
        $(rta).html(respuesta);
    });
    return ajax;
}

function ajaxsync(url, datos, rta) {
    var ajax = $.ajax({
        url: url,
        data: datos,
        async: false
    }).done(function (respuesta) {
        $(rta).html(respuesta);
    });
    return ajax;
}

function FormArticulos() {
    var url = "./vista/FormArticulos.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}
function FormHome() {
    var url = "./vista/FormHome.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}
function FormVentas() {
    var url = "./vista/FormVentas.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}
function FormReportes() {
    var url = "./vista/FormReportes.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}
function FormListarExistencias() {
    var url = "./vista/FormListarExistencias.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}
function FormCrearArticulo() {
    var url = "./vista/FormCrearArticulo.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}

function FormRegistrarVenta() {
    var url = "./vista/FormRegistrarVenta.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}

function FormVentasAbiertas() {
    var url = "./vista/FormVentasAbiertas.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}
function FormFormularioVentas() {
    var url = "./vista/FormFormularioVentas.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}
function FormAgregarDetalle() {
    var url = "./vista/FormAgregarDetalle.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}
function FormRegistrarDetalle() {
    var url = "./vista/FormRegistrarDetalle.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}
function FormVerDetalle() {
    var url = "./vista/FormVerDetalle.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}

function FormEditarDetalle() {
    var url = "./vista/FormEditarDetalle.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}

function FormFacturas() {
    var url = "./vista/FormFacturas.php";
    var datos = {};
    var rta = "#contenido";
    ajax(url, datos, rta);
}

function Cargar() {
    var tipoPregunta = document.getElementById("tipoPregunta").value;
    var cantidadRespuestas = document.getElementById("cargarOpciones");
    var formCantidad = document.getElementById("formCantidad");
    var i = 1;
    if (tipoPregunta == 1) {
        cantidadRespuestas.innerHTML = "";
        formCantidad.innerHTML = "";
    }
    if (tipoPregunta == 2) {
        cad = "<div class='form-group'>"
                + "<input type='text' id='opcion" + i + "' name='opcion" + i + "' placeholder='opcion " + i + "' class='form-control'>"
                + "</div>";
        cantidadRespuestas.innerHTML = cad;
        formCantidad.innerHTML = "<input type='hidden' id='cantidad'  name='cantidad' value='" + i + "' placeholder='opcion' class='form-control'>";
    }
    if (tipoPregunta == 3) {
        cad = "<div class='form-group'>"
                + "<div class='input-group'>"
                + "<input type='text' id='opcion" + i + "' name='opcion" + i + "' placeholder='opcion " + i + "' class='form-control'>"
                + "<span class='input-group-btn'>"
                + "<button type='submit' class='btn btn-success' onclick='AddOpciones()'>+</button>"
                + "</span>"
                + "</div>"
                + "</div>";

        cantidadRespuestas.innerHTML = cad;
        formCantidad.innerHTML = "<input type='hidden' id='cantidad'  name='cantidad' value='" + i + "' placeholder='opcion' class='form-control'>";
    }
    if (tipoPregunta == 4) {
        cad = "<div class='form-group'>"
                + "<div class='input-group'>"
                + "<input type='text' id='opcion" + i + "' name='opcion" + i + "' placeholder='opcion " + i + "' class='form-control'>"
                + "<span class='input-group-btn'>"
                + "<button type='submit' class='btn btn-success' onclick='AddOpciones()'>+</button>"
                + "</span>"
                + "</div>"
                + "</div>";
        cantidadRespuestas.innerHTML = cad;
        formCantidad.innerHTML = "<input type='hidden' id='cantidad'  name='cantidad' value='" + i + "' placeholder='opcion' class='form-control'>";
    }
}

function AddOpciones() {
    var opciones = document.getElementById("cargarOpciones");
    var cantidad = document.getElementById("cantidad").value;
    var formCantidad = document.getElementById("formCantidad");
    cantidad++;
    cad = "<div class='form-group'>"
            + "<div class='input-group'>"
            + "<input type='text' id='opcion" + cantidad + "' name='opcion" + cantidad + "' placeholder='opcion " + cantidad + "' class='form-control'>"
            + "<span class='input-group-btn'>"
            + "<button type='submit' class='btn btn-success' onclick='AddOpciones()'>+</button>"
            + "</span>"
            + "</div>"
            + "</div>";
    opciones.innerHTML += cad;
    formCantidad.innerHTML = "<input type='hidden' id='cantidad'  name='cantidad' value='" + cantidad + "' placeholder='opcion' class='form-control'>";

}
