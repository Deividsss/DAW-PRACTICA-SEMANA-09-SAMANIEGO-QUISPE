# Laboratorio 09 - Aplicación JSP

Aplicación web de formulario de contacto desarrollada con JSP y preparada para desplegarse en Apache Tomcat.

## Funcionalidad

- Formulario de contacto que envía los datos mediante `POST`.
- Validación de nombre, correo electrónico y mensaje en el servidor.
- Rechazo de solicitudes distintas de `POST` en el procesamiento.
- Almacenamiento de los datos y del contador de envíos en la sesión HTTP.
- Escape de HTML al mostrar los valores recibidos.
- Configuración de sesión con cookies `HttpOnly` y página de comparación PHP vs JSP.

## Estructura

- `index.jsp`: formulario de contacto.
- `procesar.jsp`: valida y procesa los datos, y redirige al resultado.
- `resultado.jsp`: presenta el resultado de la sesión.
- `comparativa.html` y `comparativa.md`: comparación técnica entre PHP y JSP.
- `WEB-INF/web.xml`: configuración de bienvenida y sesión de la aplicación.

## Ejecución en Tomcat

1. Copia la carpeta `lab09` en el directorio `webapps` de Tomcat.
2. Inicia Tomcat.
3. Abre `http://localhost:8080/lab09/`.

El descriptor `web.xml` requiere Servlet 3.1 o compatible. Tomcat traduce y compila las páginas JSP al desplegar la aplicación o al atenderlas por primera vez.
