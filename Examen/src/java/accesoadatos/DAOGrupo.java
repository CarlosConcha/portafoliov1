/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package accesoadatos;

import BD.Conexion;
import Entidades.Grupo;
import java.util.List;

/**
 *
 * @author carlos
 */
public class DAOGrupo {
    
    public static List<Grupo> Listar(){
    
    return Conexion.getInstance().listarGrupo();
    }
}
