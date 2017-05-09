<%-- 
    Document   : error
    Created on : 09-dic-2014, 0:10:34
    Author     : carlos
--%>

<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Error</title>
    </head>
    <body>
        <h1>Error al cargar la pagina</h1>
        <pre><c:out value="${excerror}" /></pre>
    </body>
</html>
