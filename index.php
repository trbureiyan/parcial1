<?php
/**
 * Pagina de inicio de la encuesta
 * Parcial 1 Programacion web
 * @author @Carlos-code23 / Carlos Perez -> JSP | @trbureiyan / Brayan Toro Bustos -> PHP
 * @date 2025-04-12
 */
?>

<html>
<head>
    <title>Página Principal</title>
</head>
<body>
    <h2 style="text-align:center;">Encuesta</h2>
    <form action="Encuesta.php" method="post" style="text-align:center;">
        <table border="1" style="margin: 0 auto;">
            <tr>
                <td><label for="numeroPersonas">Número de personas:</label></td>
                <td><input type="number" name="numeroPersonas" min="1" required></td>
            </tr>
            <tr>
                <td><label for="colorFondo">Color de fondo:</label></td>
                <td><input type="color" name="colorFondo"></td>
            </tr>
            <tr>
                <td><label for="colorTexto">Color de texto:</label></td>
                <td><input type="color" name="colorTexto"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Continuar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>