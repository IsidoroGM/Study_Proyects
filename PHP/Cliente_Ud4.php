    <?php
        //1.	Mantenimiento del estado de la aplicación.
        //Inicio de sesión con PHP para mantener el carrito
        session_start();

       /* Inicializar carrito en sesión */
        if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
        }
    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .claro {
        background-color: #ffffff;
        color: #000;
    }

    .oscuro {
        background-color: #1e1e1e;
        color: #fff;
    }
    </style>


</head>
<body>
    <title>BIENVENIDOS AL EJERCICIO 4 </title>
    <div>
        <h1>Añadir procutos al carrito</h1>
        <script>
            <?php 
            // Añadir un producto al carrito
            $_SESSION['carrito'][] = ['id_producto' => 123, 'nombre' => 'Zapatos', 'cantidad' => 1, 'precio' => 50];

            // Mostrar el contenido del carrito
            foreach ($_SESSION['carrito'] as $producto) {
                echo "Producto: " . $producto['nombre'] . " - Cantidad: " . $producto['cantidad'] . "<br>";
            }

            // Eliminar un producto específico
            unset($_SESSION['carrito'][0]); // Elimina el primer producto del carrito

            // Vaciar el carrito por completo
            session_destroy();
	        ?>
        </script>

        <h2>VER EL CARRITO DE LA COMPRA</h2>
        <script>
            <?php 
            if (empty($_SESSION['carrito'])): ?>
            <p>El carrito está vacío</p>
             <?php else: ?>
                   <?php foreach ($_SESSION['carrito'] as $producto): ?>
            <p>
            <?= $producto['nombre'] ?> -
            <?= $producto['precio'] ?> €
            </p>
            <?php endforeach; ?>
            <?php endif; ?>
        </script>
    </div>
   
    <div>Elegir un tema
        <script>
        <?php
        // Establecer el idioma preferido en una cookie
        setcookie('idioma', 'es', time() + (7 * 24 * 60 * 60), '/');
        // Establecer el tema preferido en una cookie
        setcookie('tema', 'oscuro', time() + (7 * 24 * 60 * 60), '/');
        ?>

        </script>
    </div>

    <h1>Preferencias</h1>

    <form method="POST" onsubmit="guardarPreferencias()">
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

        <button type="submit">Guardar</button>
    </form>





</body>
</html>