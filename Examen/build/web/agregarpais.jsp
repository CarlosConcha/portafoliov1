<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%-- 
    Document   : agregarpais
    Created on : 07-dic-2014, 21:00:36
    Author     : carlos
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Agregar Pais</title>
        <script>
            
function solonumeros(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
}
function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
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
            <form action="ServRegistrar" method="post" >
                <p align="left">Agregar Nuevo País</p>
                <table>   
                        <tr>
                            <td>Nombre</td>
                            <td><input type="text" name="txt_nombre" maxlength="20" onkeypress="return soloLetras(event)" required/></td>
                        </tr>
                        <tr>
                            <td>Grupo</td>
                            <td><select name="cbo_grupo">
                                    <c:forEach var="lista" items="${sessionScope.grupos}">
                                        <option value="${lista.id}">${lista.nombreGrupo}</option>
                                    </c:forEach> 
                                </select></td>
                        </tr>
                        <tr>
                            <td>Puntaje</td>
                            <td><input type="text" name="txt_puntaje" maxlength="4" size="5"  onkeypress="return solonumeros(event);" required/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Registrar" name="btn_registrar" /></td>
                        </tr>                    
                </table>

            </form>
        </div>
            </div>
    </body>
</html>
