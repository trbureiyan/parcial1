<?php

/**
 * Pagina de ingreso de datos de la encuesta
 * @author @Carlos-code23 / Carlos Perez -> JSP | @trbureiyan / Brayan Toro Bustos -> PHP
 * @date 2025-12-04
 */

    $numeroPersonas = (int)$_POST['numeroPersonas'];
    $colorFondo = $_POST['colorFondo'];
    $colorTexto = $_POST['colorTexto'];
?>
<html>
<head>
    <title>Encuesta</title>
</head>
<body style="background-color:<?php echo $colorFondo; ?>; color:<?php echo $colorTexto; ?>;">
    <h2 style="text-align:center;">Encuesta</h2>
    <form action="Resultados.php" method="post" style="text-align:center;">
        <input type="hidden" name="numeroPersonas" value="<?php echo $numeroPersonas; ?>">
        <input type="hidden" name="colorFondo" value="<?php echo $colorFondo; ?>">
        <input type="hidden" name="colorTexto" value="<?php echo $colorTexto; ?>">

        <?php
            for ($i = 1; $i <= $numeroPersonas; $i++) {
        ?>
            <h3 style="text-align:center;">Persona <?php echo $i; ?></h3>
            <table border="1" style="margin: 0 auto; margin-bottom: 20px;">
                <tr>
                    <td>Edad:</td>
                    <td><input type="number" name="edad<?php echo $i; ?>" required></td>
                </tr>
                <tr>
                    <td>Género:</td>
                    <td>
                        <input type="radio" name="genero<?php echo $i; ?>" value="Masculino" required> Masculino
                        <input type="radio" name="genero<?php echo $i; ?>" value="Femenino"> Femenino
                    </td>
                </tr>
                <tr>
                    <td>Estrato:</td>
                    <td>
                        <select name="estrato<?php echo $i; ?>">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Estado Civil:</td>
                    <td>
                        <select name="estadoCivil<?php echo $i; ?>">
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Unión Libre">Unión Libre</option>
                            <option value="Separado">Separado</option>
                            <option value="Viudo">Viudo</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Peso (kg):</td>
                    <td><input type="number" step="0.1" name="peso<?php echo $i; ?>" required></td>
                </tr>
                <tr>
                    <td>Estatura (m):</td>
                    <td><input type="number" step="0.01" name="estatura<?php echo $i; ?>" required></td>
                </tr>
            </table>
        <?php } ?>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>