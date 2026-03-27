// validacion.js
// Su funcion principal es validar los campos de un formulario de contacto, 
// asegurándose de que los datos ingresados por el usuario cumplan con ciertos criterios antes de permitir el envío del formulario.

function iniciarValidacion() {
    const formulario = document.getElementById('contact-form');
    const contenedorMensaje = document.getElementById('mensaje');

    if (!formulario) return; // Seguridad para el test

    formulario.addEventListener('submit', function(evento){
        evento.preventDefault();
        // ... (Todo tu código de validación aquí adentro) ...
    });
}

// Exportamos la función para que Jest la vea
module.exports = { iniciarValidacion };