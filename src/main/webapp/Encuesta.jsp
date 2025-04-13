<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%

    /**
    * Pagina de ingreso de datos de la encuesta
    * @author @Carlos-code23 / Carlos Perez
    * @date 2025-12-04
    */

    int numeroPersonas = Integer.parseInt(request.getParameter("numeroPersonas"));
    String colorFondo = request.getParameter("colorFondo");
    String colorTexto = request.getParameter("colorTexto");
%>
<html>
<head>
    <title>Encuesta</title>
</head>
<body style="background-color:<%=colorFondo%>; color:<%=colorTexto%>;">
    <h2 style="text-align:center;">Encuesta</h2>
    <form action="Resultados.jsp" method="post" style="text-align:center;">
        <input type="hidden" name="numeroPersonas" value="<%=numeroPersonas%>">
        <input type="hidden" name="colorFondo" value="<%=colorFondo%>">
        <input type="hidden" name="colorTexto" value="<%=colorTexto%>">

        <%
            for (int i = 1; i <= numeroPersonas; i++) {
        %>
            <h3 style="text-align:center;">Persona <%=i%></h3>
            <table border="1" style="margin: 0 auto; margin-bottom: 20px;">
                <tr>
                    <td>Edad:</td>
                    <td><input type="number" name="edad<%=i%>" required></td>
                </tr>
                <tr>
                    <td>Género:</td>
                    <td>
                        <input type="radio" name="genero<%=i%>" value="Masculino" required> Masculino
                        <input type="radio" name="genero<%=i%>" value="Femenino"> Femenino
                    </td>
                </tr>
                <tr>
                    <td>Estrato:</td>
                    <td>
                        <select name="estrato">
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
                        <select name="estadoCivil<%=i%>">
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
                    <td><input type="number" step="0.1" name="peso<%=i%>" required></td>
                </tr>
                <tr>
                    <td>Estatura (m):</td>
                    <td><input type="number" step="0.01" name="estatura<%=i%>" required></td>
                </tr>
            </table>
        <% } %>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>