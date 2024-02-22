<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Newsletter</title>
</head>
<body>
    <header>
        <h3>CALCULADORA DE NEWSLETTER</h3>
    </header>
    <section>
        <?php
            error_reporting(0);
            $num_emails = $_GET['num_emails'];
            $seguro_por_mensaje = $_GET['seguro_por_mensaje'];
            
            
            $precio = 0;
            if ($num_emails >= 0 && $num_emails <= 2000) {
                $precio = 0;
            } elseif ($num_emails >= 2001 && $num_emails <= 10000) {
                $precio = 0.7 * $num_emails;
            } elseif ($num_emails > 10000) {
                $precio = 0.2 * $num_emails;
            }
            if ($seguro_por_mensaje == "si") {
                $precio += 0.1 * $num_emails;
            }

            echo "<p>El precio total es S/ $precio.</p>";
        
        ?>
        
        <form action="caso3.php" method="get">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Número de emails a enviar:</td>
                    <td><input type="number" name="num_emails" value="<?php echo $num_emails; ?>"></td>
                </tr>
                <tr>
                    <td>¿Desea seguro por mensaje?</td>
                    <td>
                        <select name="seguro_por_mensaje">
                            <option value="si" <?php if ($seguro_por_mensaje == "si") echo "selected"; ?>>Sí</option>
                            <option value="no" <?php if ($seguro_por_mensaje == "no") echo "selected"; ?>>No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Calcular Precio"></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Jhojan</h6>
    </footer>
</body>
</html>
