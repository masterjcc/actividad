<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-left">
            <img src="logo.png" alt="Logo">
            <h1>QRASITENTE</h1>
        </div>
        <nav>
            <div class="menu-container">
                <div class="menu">
                    <a href="#">Inicio</a>
                    <a href="#">Acerca</a>
                    <a href="#">Contacto</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1><?php echo "¡Bienvenido a mi Landing Page!"; ?></h1>
                <p>Aquí puedes encontrar información sobre nuestros servicios.</p>
                <a href="#" class="btn">Más Información</a>
            </div>
        </section>

        <section class="features">
            <div class="feature">
                <img src="QR.jpg" alt="Característica 1">
                <h3>CODIGOS QR </h3>
               
            </div>
            <div class="feature">
                <img src="CLASE.jpg" alt="Característica 2">
                <h3>ASISTENCIA A CLASES </h3>
                
            </div>
            <div class="feature">
                <img src="publicidad.jpg" alt="Característica 3">
                <h3>MEGA COLEGIO</h3>
                
            </div>
        </section>

        <section class="registro">
            <h2>QRASITENTE</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = $_POST["nombre"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $confirmPassword = $_POST["confirmPassword"];

                $errores = array();

                // Verificar que los campos no estén vacíos
                if (empty($nombre) || empty($email) || empty($password) || empty($confirmPassword)) {
                    $errores[] = "Por favor, complete todos los campos.";
                }

                // Verificar el formato del email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errores[] = "Por favor, ingrese un email válido.";
                }

                // Verificar que las contraseñas coincidan
                if ($password !== $confirmPassword) {
                    $errores[] = "Las contraseñas no coinciden.";
                }

                if (empty($errores)) {
                    echo "<p>Registro exitoso!</p>";
                    // Aquí puedes agregar la lógica para guardar los datos en una base de datos
                } else {
                    foreach ($errores as $error) {
                        echo "<p>$error</p>";
                    }
                }
            }
            ?>
            
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mi Sitio. Todos los derechos reservados.</p>
    </footer>
</body>
</html>