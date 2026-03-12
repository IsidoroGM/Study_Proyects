 <!-- Ejemplo básico de autentificación en PHP -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];    

    // Suponemos que las contraseñas se han almacenado con hashing
    $hash = password_hash($password, PASSWORD_BCRYPT);    

    // Validar usuario
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result); 

    if (password_verify($password, $user['password'])) {
        // Autentificación exitosa
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Credenciales incorrectas.";
    }
}
?>