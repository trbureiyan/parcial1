# Encuesta Web - Parcial 1 de Programación Web

## Introducción
Este repositorio contiene un mini proyecto desarrollado como primer parcial para el curso de Programación Web del cuarto semestre del programa de Ingeniería de Software de la Universidad Surcolombiana. El proyecto demuestra la implementación de una aplicación web básica que maneja formularios, procesamiento de datos en el servidor y personalización de la interfaz de usuario.

## Descripción del Proyecto
La aplicación consiste en una encuesta digital implementada en tres páginas web interconectadas:

Página de inicio (index.php): Permite al usuario configurar el número de personas para la encuesta y personalizar los colores de fondo y texto de las páginas siguientes.

Página de encuesta (Encuesta.php): Muestra formularios dinámicos según el número de personas indicado, con los colores personalizados aplicados. Cada formulario recopila información personal como edad, género, estrato socioeconómico, estado civil, peso y estatura.

Página de resultados (Resultados.php): Muestra los datos ingresados de cada persona y además calcula estadísticas como promedios de edad, estatura y peso, así como totales por género y estado civil.

## Colaboración
Este proyecto fue desarrollado como un reto en colaboración con mi compañero @Carlos-code23 (Carlos Pérez), quien implementó la parte del proyecto en JSP utilizando Maven y Apache Tomcat Server. Mi contribución fue el desarrollo de la versión PHP, enfocandome en la página de resultados y la adaptacíon de todas las partes.

## Estructura del Repositorio
Este repositorio contiene dos ramas:
- **php (Principal)**: Contiene la implementación en PHP del proyecto
- **jsp**: Contiene la implementación en JSP utilizando Maven y Apache Tomcat

Se puede explorar cualquiera de las dos versiones del proyecto revisando los archivos en la rama correspondiente.

## Tecnologías Utilizadas

<a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=php,html,css" />
</a>
+

- Xampp, Maven y Apache Tomcat

## Reto del Proyecto
El reto consistía en:

- Crear una aplicación web de tres páginas implementada tanto en PHP como en JSP
- Permitir la personalización de la interfaz de usuario (colores)
- Generar formularios dinámicos según la cantidad de usuarios especificada
- Procesar datos en el servidor y mostrar resultados calculados
- Usar correctamente elementos HTML como tablas, formularios, campos de entrada y listas desplegables
- La aplicación, aunque simple en diseño, demuestra conceptos fundamentales de desarrollo web como el manejo de formularios, paso de parámetros entre páginas, personalización dinámica de la interfaz y procesamiento de datos en el servidor.