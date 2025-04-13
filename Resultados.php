<?php
    
/**
 * Pagina de resultados
 * @author trbureiyan / Brayan Toro Bustos PHP
 * @date 2025-04-12
 */
    
    $numeroPersonas = intval($_POST['numeroPersonas']); 
    $colorFondo = $_POST['colorFondo'];
    $colorTexto = $_POST['colorTexto'];

    // Variables calculos
    $sumEdades = 0;
    $sumEstaturas = 0;
    $sumPesos = 0;
    $numHombres = 0;
    $numMujeres = 0;
    $numCasados = 0;
    $numSeparados = 0;
    $numUnionLibre = 0;
    $numSolteros = 0;
    $numViudos = 0;

    for ($i = 1; $i <= $numeroPersonas; $i++) {
        $sumEdades += intval($_POST['edad' . $i]);
        $sumEstaturas += floatval($_POST['estatura' . $i]);
        $sumPesos += floatval($_POST['peso' . $i]);
        
        if ($_POST['genero' . $i] == 'Masculino') {
            $numHombres++;
        } else if ($_POST['genero' . $i] == 'Femenino') {
            $numMujeres++;
        }
        
        if ($_POST['estadoCivil' . $i] == 'Casado') {
            $numCasados++;
        } else if ($_POST['estadoCivil' . $i] == 'Separado') {
            $numSeparados++;
        } else if ($_POST['estadoCivil' . $i] == 'Union Libre') {
            $numUnionLibre++;
        } else if ($_POST['estadoCivil' . $i] == 'Soltero') {
            $numSolteros++;
        } else if ($_POST['estadoCivil' . $i] == 'Viudo') {
            $numViudos++;
        }
    }

    // Calculo promedios
    if ($numeroPersonas > 0) {
        $promedioEdad = $sumEdades / $numeroPersonas;
        $promedioEstatura = $sumEstaturas / $numeroPersonas;
        $promedioPeso = $sumPesos / $numeroPersonas;
    } else {
        $promedioEdad = 0;
        $promedioEstatura = 0;
        $promedioPeso = 0;
    }
?>
<html>
<head>
    <title>Resultados</title>
</head>
<body style="background-color:<?php echo $colorFondo; ?>; color:<?php echo $colorTexto; ?>;">
    <h2 style="text-align:center;">Resultados de la Encuesta</h2>

    <?php
        for ($i = 1; $i <= $numeroPersonas; $i++) {
            $edad = $_POST['edad' . $i];
            $genero = $_POST['genero' . $i];
            $estrato = $_POST['estrato' . $i];
            $estadoCivil = $_POST['estadoCivil' . $i];
            $peso = $_POST['peso' . $i];
            $estatura = $_POST['estatura' . $i];
    ?>
        <h3 style="text-align:center;">Persona <?php echo $i; ?></h3>
        <table border="1" style="margin: 0 auto; margin-bottom: 20px;">
            <tr>
                <td>Edad</td>
                <td><?php echo $edad; ?></td>
            </tr>
            <tr>
                <td>Género</td>
                <td><?php echo $genero; ?></td>
            </tr>
            <tr>
                <td>Estrato</td>
                <td><?php echo $estrato; ?></td>
            </tr>
            <tr>
                <td>Estado Civil</td>
                <td><?php echo $estadoCivil; ?></td>
            </tr>
            <tr>
                <td>Peso (kg)</td>
                <td><?php echo $peso; ?></td>
            </tr>
            <tr>
                <td>Estatura (m)</td>
                <td><?php echo $estatura; ?></td>
            </tr>
        </table>
    <?php
        }
    ?>
    <h3 style="text-align:center;">Resumen Estadístico</h3>
    <table border="1" style="margin: 0 auto; margin-bottom: 20px;">
        <tr>
            <td>Edad Promedio</td>
            <td><?php echo number_format($promedioEdad, 2); ?> años</td>
        </tr>
        <tr>
            <td>Estatura Promedio</td>
            <td><?php echo number_format($promedioEstatura, 2); ?> m</td>
        </tr>
        <tr>
            <td>Peso Promedio</td>
            <td><?php echo number_format($promedioPeso, 2); ?> kg</td>
        </tr>
        <tr>
            <td>Total Hombres</td>
            <td><?php echo $contHombres; ?></td>
        </tr>
        <tr>
            <td>Total Mujeres</td>
            <td><?php echo $contMujeres; ?></td>
        </tr>
        <tr>
            <td>Total Casados</td>
            <td><?php echo $contCasados; ?></td>
        </tr>
        <tr>
            <td>Total Separados</td>
            <td><?php echo $contSeparados; ?></td>
        </tr>
        <tr>
            <td>Total Unión Libre</td>
            <td><?php echo $contUnionLibre; ?></td>
        </tr>
        <tr>
            <td>Total Solteros</td>
            <td><?php echo $contSolteros; ?></td>
        </tr>
        <tr>
            <td>Total Viudos</td>
            <td><?php echo $contViudos; ?></td>
        </tr>
    </table>

    <br>

</body>
</html>