// LOCAL STORAGE → Preferencias persistentes
function guardarPreferencias() {
    const idioma = document.getElementById("idioma").value;
    const tema = document.getElementById("tema").value;

    localStorage.setItem("idioma", idioma);
    localStorage.setItem("tema", tema);
}

// Aplicar preferencias al cargar
window.onload = function () {
    const idioma = localStorage.getItem("idioma");
    const tema = localStorage.getItem("tema");

    if (idioma) document.documentElement.lang = idioma;
    if (tema) document.body.className = tema;
};

// SESSION STORAGE → Carrito temporal
function guardarCarritoFrontend(form) {
    let carrito = JSON.parse(sessionStorage.getItem("carrito")) || [];

    carrito.push({
        id: form.id.value,
        nombre: form.nombre.value,
        precio: form.precio.value
    });

    sessionStorage.setItem("carrito", JSON.stringify(carrito));
}
