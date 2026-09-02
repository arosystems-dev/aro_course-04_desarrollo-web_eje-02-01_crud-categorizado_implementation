/* =====================================
        JavaScript (NAV-BAR)
===================================== */

// VARIABLES
var boton = document.getElementById('navBoton');
var menu = document.getElementById('navMenu');

// FUNCIONES
function mostrarOcultarNav() {
  menu.classList.toggle('mostrarOcultar');
}

// EVENTOS
boton.addEventListener('click', mostrarOcultarNav);