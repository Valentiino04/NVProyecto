<?php
session_start();
include '../config/config.php'; // Conexión a la base de datos

// Procesar el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];

    // Consulta SQL para obtener el usuario
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        if (password_verify($contraseña, $usuario["contraseña"])) {
            $_SESSION["usuario"] = $usuario["nombre"];
            header("Location: ../index.php"); // Redirige a la página principal
            exit();
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "No existe una cuenta asociada a este email.";
    }
    $stmt->close();
    $conexion->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/estilosesion.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1 class="logo"><a href="../index.php">Mapache Sneakers</a></h1>
            <nav>
                <a href="#">Categorías</a>
                <a href="#">Mujer</a>
                <a href="#">Hombre</a>
                <a href="#">Kids</a>
                <a href="#">Marcas</a>
                <a href="#">Zapatillas</a>
                <a href="#">Fútbol</a>
                <a href="#">Lanzamiento</a>
            </nav>
            <div class="header-icons">
                <span class="search-icon">🔍</span>
                <span>❤️</span>
                <span class="cart-icon">🛒</span>
                <div class="user-icon">
                    <span>👤</span>
                    <div class="user-menu">
                        <a href="sesion.php">Iniciar Sesión</a>
                        <a href="Register.php">Registrarme</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-bar" id="searchBar" style="display: none;">
            <input type="text" placeholder="Buscar...">
        </div>
    </header>

    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <div class="login-tabs">
            <button class="active">Iniciar Sesión</button>
            <button onclick="window.location.href='Register.php'">Registrarme</button>
        </div>
        <form class="login-form" action="sesion.php" method="POST">
            <label for="email">* Email</label>
            <input type="email" name="email" id="email" placeholder="Ingresa tu email" required>

            <label for="password">* Contraseña</label>
            <div class="password-container">
                <input type="password" name="contraseña" id="password" placeholder="Ingresa tu contraseña" required>
                <span class="toggle-password">👁️</span>
            </div>

            <div class="login-options">
                <label><input type="checkbox"> Recordarme</label>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>

            <?php if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>

            <button type="submit" class="login-button">INICIAR SESIÓN</button>
            <button type="button" class="google-button">Continuar con Google</button>
        </form>

        <p class="register-link">¿No tenés cuenta? <a href="Register.php">Regístrate.</a></p>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>