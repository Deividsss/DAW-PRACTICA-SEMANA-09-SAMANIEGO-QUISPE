<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%
    // Solo POST; otro método -> 405
    if (!"POST".equalsIgnoreCase(request.getMethod())) {
        response.setHeader("Allow", "POST");
        response.sendError(HttpServletResponse.SC_METHOD_NOT_ALLOWED, "Use el formulario (POST).");
        return;
    }

    request.setCharacterEncoding("UTF-8");
    String nombre  = request.getParameter("nombre");
    String email   = request.getParameter("email");
    String mensaje = request.getParameter("mensaje");

    boolean valido = nombre != null && !nombre.trim().isEmpty()
                  && email != null && email.matches("^[\\w.+-]+@[\\w-]+(\\.[\\w-]+)+$")
                  && mensaje != null && !mensaje.trim().isEmpty();

    if (!valido) {
        response.sendError(HttpServletResponse.SC_BAD_REQUEST, "Datos inválidos");
        return;
    }

    // Manejo de sesión
    session.setAttribute("nombre", nombre.trim());
    session.setAttribute("email", email.trim());
    session.setAttribute("mensaje", mensaje.trim());
    Integer envios = (Integer) session.getAttribute("envios");
    session.setAttribute("envios", envios == null ? 1 : envios + 1);

    // Post/Redirect/Get -> 302
    response.sendRedirect("resultado.jsp");
%>
