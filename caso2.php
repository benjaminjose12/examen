<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Paternidad</title>
</head>
<body>
    <header>
        <h3>FORMULARIO DE PATERNIDAD</h3>
    </header>
    <section>
        <?php
            error_reporting(0);
            $nombre = $_GET['nombre'];
            $sexo = $_GET['sexo'];
            $num_hijos = $_GET['num_hijos'];

            if (!empty($nombre)) {
                if ($sexo == "Masculino") {
                    echo "<p>El señor $nombre ";
                } elseif ($sexo == "Femenino") {
                    echo "<p>La señora $nombre ";
                }
                
                if ($num_hijos == 1) {
                    echo "tiene 1 hijo.</p>";
                } elseif ($num_hijos > 1) {
                    echo "tiene $num_hijos hijos.</p>";
                } else {
                    echo "no tiene hijos.</p>";
                }
            } else {
                echo "<p>Por favor, introduce tu nombre.</p>";
            }
        
        ?>
        
        <form action="caso2.php" method="get">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                    <td>
                        <select name="sexo">
                            <option value="Masculino" <?php if ($sexo == "Masculino") echo "selected"; ?>>Masculino</option>
                            <option value="Femenino" <?php if ($sexo == "Femenino") echo "selected"; ?>>Femenino</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Número de hijos:</td>
                    <td><input type="number" name="num_hijos" value="<?php echo $num_hijos; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Jhojan</h6>
    </footer>
</body>
</html>
