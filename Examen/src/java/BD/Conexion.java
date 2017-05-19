/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package BD;


import Entidades.Grupo;
import Entidades.Pais;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.Timestamp;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;


/**
 *
 * @author carlos
 */
public class Conexion {
    
    private static Connection conex=null;
    private static Conexion conexion;
    
    private static void conectar(){
        
        try {
            Class.forName("com.mysql.jdbc.Driver");
            conex=DriverManager.getConnection("jdbc:mysql://localhost/et_dej4501", "root", "");
        } catch (ClassNotFoundException ex) {
           System.err.println("Driver no encontrado");
        } catch (SQLException ex) {
            System.err.println("no se puede realizar la conexion");
        }
    
    }
   public static Conexion getInstance(){
    if(conexion==null){
    conexion=new Conexion();
    }
    return conexion;
   }
    private static void desconectar(){
    
    if(conex!=null){
        try {
            conex.close();
            
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, "No se puede cerrar la conexion");
        }
    }
    }
    public void Ejecutar(String sql){
        conectar();
        try {
              
            Statement consultapr=conex.createStatement();            
            consultapr.executeUpdate(sql);
        } catch (SQLException ex) {
           
        }
        desconectar();
    
    }
  
    public  List<Pais> listar(String filtro){
        List<Pais> p= new ArrayList<>();
       
            conectar();
        try {
            
            PreparedStatement consultapr=conex.prepareStatement("select p.id_pais,p.nombre_pais,g.nombre_grupo,p.puntaje_pais,p.fecha_registro from pais p inner join grupo g on p.id_grupo=g.id_grupo "
                    + "where  g.nombre_grupo like '%"+filtro+"%'");
            ResultSet result=consultapr.executeQuery();
            while(result.next()){
            Grupo grupo=new Grupo(result.getString("nombre_grupo"));  
            Pais per=new Pais(result.getInt("id_pais"),result.getString("nombre_pais"), result.getInt("puntaje_pais"),result.getTimestamp("fecha_registro"),grupo);      
            p.add(per);
            
            }
        } catch (SQLException ex) {
            System.err.println("no se pudo listar");
        }
        return p;
    }
      public  List<Grupo> listarGrupo(){
        List<Grupo> p= new ArrayList<>();
       
            conectar();
        try {
            
            PreparedStatement consultapr=conex.prepareStatement("select * from grupo");            
            ResultSet result=consultapr.executeQuery();
            while(result.next()){
            Grupo grupo=new Grupo(result.getInt("id_grupo"),result.getString("nombre_grupo"));          
            p.add(grupo);  
            }
        } catch (SQLException ex) {
            System.err.println("no se pudo listar");
        }
        return p;
    }
    
   
}
