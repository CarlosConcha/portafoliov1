/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package accesoadatos;

import BD.Conexion;
import Entidades.Pais;
import java.util.List;

/**
 *
 * @author carlos
 */
public class DAOPais {
    
    public static boolean Insertar(Pais pais){
    String stsql=String.format("INSERT INTO `pais`(`nombre_pais`, `puntaje_pais`, `fecha_registro`, `id_grupo`) VALUES ('%s',%d,now(),%d)",
            pais.getNombrePais(),
            pais.getPuntaje(),
            pais.getGrupo().getId());
        Conexion.getInstance().Ejecutar(stsql);
        return true;
    }
    
    public static boolean Eliminar(Pais pais){
    String stsql=String.format("delete from pais where id_pais=%d",
            pais.getId());
        Conexion.getInstance().Ejecutar(stsql);
        return true;
    }
    
    public static List<Pais> Listar(String grupo){
    
    return Conexion.getInstance().listar(grupo);
    }
    
}
