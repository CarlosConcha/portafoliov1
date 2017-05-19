<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%-- 
    Document   : listarpaises
    Created on : 07-dic-2014, 22:03:07
    Author     : carlos
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Listar Paises</title>
        <script>
          function validate(form){
for(var i = 0; i < form.chk_pais.length; i++){
if(form.chk_pais[i].checked)return true;
}
alert('Debes seleccionar al menos un pais a eliminar');
return false;
} 
        </script>
    </head>
    <body>
        <div align="center">
        <div style="width:400px;border:1px solid black;">
            <table>
                <tr>
                    <td>
                        <h3>Opciones</h3>
                    </td>
                    <td>
                        <a href="ServRegistrar">Agregar País</a>
                    </td>
                    <td>
                        <a href="ServListar">Listar Países</a>
                    </td>
                </tr>
            </table>
            <hr  />
            
                <p align="left">Listado de Países</p>
                
                <form action="ServListar" method="post">
                    <p>Seleccione un Grupo: <select name="cbo_grupo">
                            <option value="Grupo">(Todos)</option> 
                            <c:forEach var="listagrupo" items="${sessionScope.grupos}">
                             <option value="${listagrupo.nombreGrupo}">${listagrupo.nombreGrupo}</option>   
                            </c:forEach>
                    </select>
                    <input type="submit" value="Buscar" /></p>
                </form>
                <form action="ServListar" method="post" onsubmit="return validate(this);">
                    <table style="border: 1px solid;border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid;border-collapse: collapse;"></th>
                                <th style="border: 1px solid;border-collapse: collapse;">Pais</th>
                                <th style="border: 1px solid;border-collapse: collapse;">Grupo</th>
                                <th style="border: 1px solid;border-collapse: collapse;">Puntaje</th>
                                <th style="border: 1px solid;border-collapse: collapse;">Fecha Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <c:forEach var="listapais" items="${sessionScope.paises}">
                                <tr>
                                    <td><input type="checkbox" name="chk_pais" value="${listapais.id}" /></td>
                                    <td>${listapais.nombrePais}</td>
                                    <td>${listapais.grupo.nombreGrupo}</td>
                                    <td align="center">${listapais.puntaje}</td>
                                    <td>${listapais.fechaRegistro}</td>
                                </tr>
                            </c:forEach>
                        </tbody>
                    </table>

                    <div align="left"> <input type="submit" value="Eliminar Seleccionado" name="btn_eliminar"  /></div>
                </form> 
                <c:out value="${eliminados}" />
        </div>
            </div>
    </body>
</html>
