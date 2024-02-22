<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Ticket</title>
</head>
<body>
    <header>
        <h3>GENERADOR DE TICKET</h3>
    </header>
    <section>
        <?php
        
            error_reporting(0);
            $nombre = $_GET['TXTcliente'];
            $altura = $_GET['altura'];
            $edad = $_GET['edad'];
            
            
            if (!empty($nombre) && $altura >= 120 && $edad > 16) {
                $numero_ticket = sprintf("%05d", rand(1, 99999));
                echo "<p>Ticket generado: $nombre, ticket $numero_ticket</p>";
            } else {
                if (empty($nombre)) {
                    echo "<p>Por favor, introduce tu nombre.</p>";
                } elseif ($altura < 120) {
                    echo "<p>Lo sentimos, debes tener una altura mínima de 120 cm para obtener un ticket.</p>";
                } elseif ($edad <= 16) {
                    echo "<p>Lo sentimos, debes tener más de 16 años para obtener un ticket.</p>";
                } else {
                    echo "<p>Lo sentimos, no cumples con los requisitos para obtener un ticket.</p>";
                }
            }
        
        ?>
        <form action="caso1.php" method="get">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="TXTcliente" value="<?php echo $nombre; ?>"></td>
                </tr>
                <tr>
                    <td>Altura (cm):</td>
                    <td><input type="number" name="altura" value="<?php echo $altura; ?>"></td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td><input type="number" name="edad" value="<?php echo $edad; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Generar Ticket"></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Jhojan</h6>
    </footer>
</body>
</html>
