<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%

    /**
    * Pagina de resultados de la encuesta
    * @author @trbureiyan / Brayan Toro Bustos -> PHP | @Carlos-code23 / Carlos Perez -> JSP
    * @date 2025-12-04
    */

    int numeroPersonas = 0;
    try {
        numeroPersonas = Integer.parseInt(request.getParameter("numeroPersonas"));
    } catch (NumberFormatException e) {
        numeroPersonas = 0;
    }
    
    String colorFondo = request.getParameter("colorFondo");
    String colorTexto = request.getParameter("colorTexto");

    // Variables calculos
    int sumaEdades = 0;
    double sumaEstaturas = 0;
    double sumaPesos = 0;
    int contHombres = 0;
    int contMujeres = 0;
    int contCasados = 0;
    int contSeparados = 0;
    int contUnionLibre = 0;
    int contSolteros = 0;
    int contViudos = 0;

    for (int i = 1; i <= numeroPersonas; i++) {
        try {
            sumaEdades += Integer.parseInt(request.getParameter("edad" + i));
        } catch (NumberFormatException e) {}
        
        try {
            sumaEstaturas += Double.parseDouble(request.getParameter("estatura" + i));
        } catch (NumberFormatException e) {}
        
        try {
            sumaPesos += Double.parseDouble(request.getParameter("peso" + i));
        } catch (NumberFormatException e) {}
        
        if ("Masculino".equals(request.getParameter("genero" + i))) contHombres++;
        if ("Femenino".equals(request.getParameter("genero" + i))) contMujeres++;
        
        String estadoCivil = request.getParameter("estadoCivil" + i);
        if ("Casado".equals(estadoCivil)) contCasados++;
        else if ("Separado".equals(estadoCivil)) contSeparados++;
        else if ("Union Libre".equals(estadoCivil)) contUnionLibre++;
        else if ("Soltero".equals(estadoCivil)) contSolteros++;
        else if ("Viudo".equals(estadoCivil)) contViudos++;
    }

    // Calculo promedios
    double promedioEdad = numeroPersonas > 0 ? (double)sumaEdades / numeroPersonas : 0;
    double promedioEstatura = numeroPersonas > 0 ? sumaEstaturas / numeroPersonas : 0;
    double promedioPeso = numeroPersonas > 0 ? sumaPesos / numeroPersonas : 0;
%>
<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body style="background-color:<%= colorFondo %>; color:<%= colorTexto %>;">
    <h2 style="text-align:center;">Resultados de la Encuesta</h2>

    <% for (int i = 1; i <= numeroPersonas; i++) {
        String edad = request.getParameter("edad" + i);
        String genero = request.getParameter("genero" + i);
        String estrato = request.getParameter("estrato" + i);
        String estadoCivil = request.getParameter("estadoCivil" + i);
        String peso = request.getParameter("peso" + i);
        String estatura = request.getParameter("estatura" + i);
    %>
        <h3 style="text-align:center;">Persona <%= i %></h3>
        <table border="1" style="margin: 0 auto; margin-bottom: 20px;">
            <tr>
                <td>Edad</td>
                <td><%= edad %></td>
            </tr>
            <tr>
                <td>Género</td>
                <td><%= genero %></td>
            </tr>
            <tr>
                <td>Estrato</td>
                <td><%= estrato %></td>
            </tr>
            <tr>
                <td>Estado Civil</td>
                <td><%= estadoCivil %></td>
            </tr>
            <tr>
                <td>Peso (kg)</td>
                <td><%= peso %></td>
            </tr>
            <tr>
                <td>Estatura (m)</td>
                <td><%= estatura %></td>
            </tr>
        </table>
    <% } %>
    
    <h3 style="text-align:center;">Resumen Estadístico</h3>
    <table border="1" style="margin: 0 auto; margin-bottom: 20px;">
        <tr>
            <td>Edad Promedio</td>
            <td><%= String.format("%.2f", promedioEdad) %> años</td>
        </tr>
        <tr>
            <td>Estatura Promedio</td>
            <td><%= String.format("%.2f", promedioEstatura) %> m</td>
        </tr>
        <tr>
            <td>Peso Promedio</td>
            <td><%= String.format("%.2f", promedioPeso) %> kg</td>
        </tr>
        <tr>
            <td>Total Hombres</td>
            <td><%= contHombres %></td>
        </tr>
        <tr>
            <td>Total Mujeres</td>
            <td><%= contMujeres %></td>
        </tr>
        <tr>
            <td>Total Casados</td>
            <td><%= contCasados %></td>
        </tr>
        <tr>
            <td>Total Separados</td>
            <td><%= contSeparados %></td>
        </tr>
        <tr>
            <td>Total Unión Libre</td>
            <td><%= contUnionLibre %></td>
        </tr>
        <tr>
            <td>Total Solteros</td>
            <td><%= contSolteros %></td>
        </tr>
        <tr>
            <td>Total Viudos</td>
            <td><%= contViudos %></td>
        </tr>
    </table>

    <br>

</body>
</html>