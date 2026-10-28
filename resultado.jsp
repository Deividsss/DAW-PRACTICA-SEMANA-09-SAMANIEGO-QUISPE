<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%!
    // Escapa HTML para evitar XSS
    private String esc(Object o) {
        if (o == null) return "";
        return o.toString().replace("&","&amp;").replace("<","&lt;")
                .replace(">","&gt;").replace("\"","&quot;").replace("'","&#39;");
    }
%>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - JSP</title>
  <style>
    body{font-family:Segoe UI,Arial,sans-serif;background:#f3f5f9;padding:40px}
    .card{max-width:520px;margin:auto;background:#fff;padding:28px;border-radius:12px;box-shadow:0 4px 14px rgba(0,0,0,.1)}
    h1{color:#1f3a5f;font-size:22px;margin-top:0}
    td{padding:6px 12px 6px 0;vertical-align:top}
    .ok{color:#1a7f37;font-weight:600}
    .acciones{display:flex;gap:12px;flex-wrap:wrap;margin-top:22px}
    .btn{display:inline-block;text-decoration:none;padding:10px 18px;border-radius:6px;font-size:15px}
    .btn-sec{background:#e8edf5;color:#1f3a5f}
    .btn-pri{background:#1f6feb;color:#fff}
  </style>
</head>
<body>
<div class="card">
<% if (session.getAttribute("nombre") != null) { %>
  <h1 class="ok">✔ Datos recibidos por JSP</h1>
  <table>
    <tr><td><b>Nombre</b></td><td><%= esc(session.getAttribute("nombre")) %></td></tr>
    <tr><td><b>Correo</b></td><td><%= esc(session.getAttribute("email")) %></td></tr>
    <tr><td><b>Mensaje</b></td><td><%= esc(session.getAttribute("mensaje")) %></td></tr>
    <tr><td><b>Envíos en esta sesión</b></td><td><%= esc(session.getAttribute("envios")) %></td></tr>
    <tr><td><b>ID de sesión</b></td><td><%= esc(session.getId()) %></td></tr>
    <tr><td><b>Versión Java</b></td><td><%= esc(System.getProperty("java.version")) %></td></tr>
    <tr><td><b>Servidor</b></td><td><%= esc(application.getServerInfo()) %></td></tr>
  </table>
<% } else { %>
  <h1>No hay datos en la sesión</h1>
<% } %>
  <div class="acciones">
    <a class="btn btn-sec" href="index.jsp">← Enviar otro</a>
    <a class="btn btn-pri" href="comparativa.html">📊 Ver comparativa PHP vs JSP (Paso 5)</a>
  </div>
</div>
</body>
</html>
