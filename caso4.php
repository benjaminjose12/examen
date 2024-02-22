<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Subida de Producto</title>
</head>
<body>
    <header>
        <h3>FORMULARIO DE SUBIDA DE PRODUCTO</h3>
    </header>
    <section>
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'] ?? '';
            $pass1 = $_POST['pass1'] ?? '';
            $pass2 = $_POST['pass2'] ?? '';

            $nombre_correcto = 'usuario';
            $pass_correcta = 'contraseña123'; 
            if ($nombre === $nombre_correcto && $pass1 === $pass_correcta && $pass1 === $pass2) {
                
                echo "<h3>Subida de Producto</h3>";
                echo '<form action="procesar_producto.php" method="post">';
                echo '<label for="num_serie">Número de Serie:</label>';
                echo '<input type="text" id="num_serie" name="num_serie"><br>';
                echo '<label for="nombre_producto">Nombre:</label>';
                echo '<input type="text" id="nombre_producto" name="nombre_producto"><br>';
                echo '<label for="precio">Precio:</label>';
                echo '<input type="number" id="precio" name="precio"><br>';
                echo '<input type="submit" value="Subir Producto">';
                echo '</form>';
               
                exit();
            } else {
                echo "<p style='color: red;'>Las contraseñas no coinciden o los datos de inicio de sesión son incorrectos.</p>";
            }
        }
        ?>

        
        <h3>Identificación</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="pass1">Contraseña:</label>
            <input type="password" id="pass1" name="pass1" required><br>
            <label for="pass2">Confirmar Contraseña:</label>
            <input type="password" id="pass2" name="pass2" required><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Jhojan</h6>
    </footer>
</body>
</html>
