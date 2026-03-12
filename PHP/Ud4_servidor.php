

<!-- Desarrollo Web Entorno Servidor 
CASO PRACTICO UNIDAD 4
MANTENIMIENTO DEL ESTADO Y ALMACENAMIENTO DE INFORMACIÓN EN APLICACIONES WEB -->

<!-- Al no quedar especificado, el documento será un .php integro, guardando en el la parte PHP, JS y HTML+CSS. 
Se han utilizado como fuentes el temario proporcionado, IAs generativas y videos de Youtube explicativos acerca del mantenimiento de sesiones y cookies,
así como documentación similar de la asignatura Desarrollo - Cliente para la parte Javascript.

Isidoro Gordillo - DAW -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
/***************
 * BACKEND PHP *
 ***************/
session_start();

/* Inicializar carrito en sesión */
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

/* Añadir producto al carrito */
if (isset($_POST['accion']) && $_POST['accion'] === 'add') {
    $_SESSION['carrito'][] = [
        'id' => $_POST['id'],
        'nombre' => $_POST['nombre'],
        'precio' => $_POST['precio']
    ];
}

/* Guardar preferencias en cookies */
if (isset($_POST['accion']) && $_POST['accion'] === 'preferencias') {
    setcookie('idioma', $_POST['idioma'], time() + 2592000, "/");
    setcookie('tema', $_POST['tema'], time() + 2592000, "/");
}

/* Recuperar cookies */
$idioma = $_COOKIE['idioma'] ?? 'es';
$tema = $_COOKIE['tema'] ?? 'claro';
?>

<!-- ************************
* INICIO DOCUMENTO HTML*
************************ -->

<!DOCTYPE html>

<!-- AL DAR LA OPCION DE ELEGIR IDIOMAS, HEMOS REEMPLAZADO EL IDIOMA STANDAR POR UNA VARIABLE -->
<html lang="<?= $idioma ?>">
<head>
    <meta charset="UTF-8">
    <title>Generic, S.A. Tu tienda generica para ejemplos académicos</title>

    <!-- UTILIZAMOS ESTILOS SENCILLOS, EL OBJETIVO DEL DOCUMENTO ES OTRO, E INCREMENTARLO SOLO ENTORPECERÍA LA LECTURA -->
    <style>
        body { font-family: Arial, sans-serif; }
        .claro { background: #ffffff; color: #000; }
        .oscuro { background: #1e1e1e; color: #fff; }
        .box { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; }
    </style>
</head>

<!-- AL DAR LA OPCION DE ELEGIR IDIOMAS, HEMOS UTILIZADO UNA VARIABLE PARA EL TEMA -->
<body class="<?= $tema ?>">

<h1>🛒 Generic, S.A. Tu tienda generica para ejemplos académicos</h1>

<!-- PRODUCTOS Y BOTONES DE SELECCIÓN -->
<div class="box">
    <h2>Productos</h2>

    <form method="POST" onsubmit="guardarCarritoFrontend(this)">
        <input type="hidden" name="accion" value="add">
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="nombre" value="Articulo genérico Nº1">
        <input type="hidden" name="precio" value="59.99">
        <button>Añadir Teclado</button>
    </form>

    <form method="POST" onsubmit="guardarCarritoFrontend(this)">
        <input type="hidden" name="accion" value="add">
        <input type="hidden" name="id" value="2">
        <input type="hidden" name="nombre" value="Artículo genérico Nº2">
        <input type="hidden" name="precio" value="39.99">
        <button>Añadir Ratón</button>
    </form>
</div>

<!-- CARRITO (SESIONES PHP) -->
<div class="box">
    <h2>Carrito (Servidor - Sesión PHP)</h2>

    <!-- BUCLE IF-ELSE PARA COMPROBAR EL ESTADO DEL CARRITO -->
    <?php if (empty($_SESSION['carrito'])): ?>
        <p>Carrito vacío</p>
    <?php else: ?>
        <?php foreach ($_SESSION['carrito'] as $p): ?>
            <p><?= $p['nombre'] ?> - <?= $p['precio'] ?> €</p>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<!-- PREFERENCIAS -->
<div class="box">
    <h2>Preferencias</h2>

    <form method="POST" onsubmit="guardarPreferencias()">
        <input type="hidden" name="accion" value="preferencias">

        <label>Idioma:</label>
        <select name="idioma" id="idioma">
            <option value="es">Español</option>
            <option value="en">Inglés</option>
        </select>

        <br><br>

        <label>Tema:</label>
        <select name="tema" id="tema">
            <option value="claro">Claro</option>
            <option value="oscuro">Oscuro</option>
        </select>

        <br><br>

        <button>Guardar preferencias</button>
    </form>
</div>

<script>
/*************************
 * WEB STORAGE (JS)       *
 *************************/

/* LocalStorage → Preferencias persistentes */
function guardarPreferencias() {
    localStorage.setItem('idioma', document.getElementById('idioma').value);
    localStorage.setItem('tema', document.getElementById('tema').value);
}

/* Aplicar preferencias al cargar */
window.onload = function () {
    const idioma = localStorage.getItem('idioma');
    const tema = localStorage.getItem('tema');

    if (idioma) document.documentElement.lang = idioma;
    if (tema) document.body.className = tema;
};

/* SessionStorage → Carrito temporal frontend */
function guardarCarritoFrontend(form) {
    let carrito = JSON.parse(sessionStorage.getItem('carrito')) || [];

    carrito.push({
        id: form.id.value,
        nombre: form.nombre.value,
        precio: form.precio.value
    });

    sessionStorage.setItem('carrito', JSON.stringify(carrito));
}
</script>

</body>
</html>
