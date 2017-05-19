<%-- 
    Document   : eliminados
    Created on : 09-dic-2014, 21:44:42
    Author     : carlos
--%>

<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Paises Eliminados</title>
    </head>
    <body>
        <h1>Se Eliminaron Los Paises con EXITO!!</h1>
        <pre><c:out value="Cantidad De paises Eliminados:${eliminado}"/></pre>
    </body>
</html>
