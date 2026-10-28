# Laboratorio 09 - PHP

Proyecto de práctica en PHP que implementa un formulario de contacto mediante `POST`, valida y sanea los datos recibidos, los conserva en una sesión y redirige al resultado con el patrón Post/Redirect/Get. También incluye una página comparativa entre PHP y JSP.

## Requisitos

- PHP habilitado en Apache (por ejemplo, con XAMPP).

## Ejecución con XAMPP

1. Copia la carpeta del proyecto en `htdocs/lab09/`.
2. Inicia Apache desde el panel de XAMPP.
3. Abre `http://localhost/lab09/` en el navegador.

El formulario principal está en `index.html`; `procesar.php` acepta únicamente solicitudes `POST` y `resultado.php` muestra los datos guardados en la sesión.
