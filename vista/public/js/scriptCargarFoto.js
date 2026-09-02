/* =====================================
        JavaScript (CARGAR FOTO)
===================================== */

// DATOS
var img = document.getElementById('imgFoto');
var archivoFoto = document.getElementById('fFoto');

// PROCESO
function cargarFoto(e) {
    // Se carga el Array cargado
    var archivo = e.target.files;
    // Se carga el primer elemento del array (FOTO)
    var mi_archivo = archivo[0];
    // Se verifica si es imagen o no
    if (!mi_archivo.type.match(/image/)) {
        alert("Selecciona una imagen");
        archivoFoto.focus();
        e.preventDefault();
    }
    else {
        var lector = new FileReader();
        // Se carga la direccion de la foto cargada
        lector.readAsDataURL(mi_archivo);
        lector.addEventListener('load', mostrarResultado);
    }
}

// RESULTADO
function mostrarResultado(e) {
    var resultado = e.target.result;
    img.src = resultado;
}

// PRINCIPAL
archivoFoto.addEventListener('change', cargarFoto);

