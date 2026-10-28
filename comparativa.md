# Paso 5 - Comparación técnica PHP vs JSP

| Aspecto | PHP | JSP (Tomcat) |
|---|---|---|
| Servidor | Apache (XAMPP) puerto 80 | Apache Tomcat (servlet container) puerto 8080 |
| Ciclo de vida | Parse → Execute → Output; el proceso termina por cada petición | Traducción a Servlet → Compilación → Instanciación → `service()` → `destroy()`; el servlet se mantiene en memoria |
| Estado | HTTP stateless; estado vía `$_SESSION` (archivos en disco) | Stateless; estado vía `HttpSession` (en memoria del contenedor) |
| Memoria | Se libera al terminar cada petición | Instancia persistente y multihilo; la memoria se gestiona con la JVM (GC) |
| Primera petición | Rápida (se interpreta) | Más lenta (traduce y compila el JSP), luego muy rápida |
| Despliegue | Copiar archivos a `htdocs/` | Copiar carpeta o `.war` a `webapps/` |
| Escalabilidad | Escala con más procesos/servidores (PHP-FPM, balanceador) | Escala con hilos en la JVM y clustering de Tomcat |
| Seguridad (este lab) | `filter_input()`, `htmlspecialchars()` | Validación manual, escape de HTML, cookie HttpOnly |
