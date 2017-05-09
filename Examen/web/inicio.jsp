<%-- 
    Document   : inicio
    Created on : 08-dic-2014, 19:22:56
    Author     : carlos
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Inicio</title>
    </head>
    <body>
        <%request.getRequestDispatcher("ServRegistrar").forward(request, response);%>
    </body>
</html>
