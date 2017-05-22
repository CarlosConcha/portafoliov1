/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BD;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
/**
 *
 * @author carlos
 */
public class BD {
    private static BD bd=null;
    private  Connection connect=null;

    public Connection getConnect() {
        return connect;
    }

    private BD(){
    
        try{
        Class.forName("com.microsoft.sqlserver.jdbc.SQLServerDriver");
        connect=DriverManager.getConnection("jdbc:sqlserver://142.4.198.109:1433;databaseName=MuOnline","sa","Xfh7Ez04OioJ3vC6Afvw");
        if(connect != null) {System.out.println("conectado");} 
        }catch(ClassNotFoundException notfound){
            System.err.println("no se encontro el driver"); 
            notfound.printStackTrace();
        }catch(SQLException errconn){
            System.err.println("No se puede realizar la conexion");
            errconn.printStackTrace();
        }
    }
    public static BD getInstancia(){
    if(bd==null){
    bd=new BD();
    }
    return bd;
    }
    public void ejecutar(PreparedStatement sql){
 
        try {
              
            //PreparedStatement statement=connect.prepareStatement(sql);
            
            int resultado=sql.executeUpdate();
        } catch (SQLException ex) {
            
        }finally{
           desconectar();
        }
        
    
    }
     public  void desconectar(){
    
    if(connect!=null){
        try {
            connect.close();
            
        } catch (SQLException ex) {
            System.err.println("Error al cerrar la conexion");
        }
    }
    }
     public static ResultSet query(PreparedStatement stm)throws SQLException{
         
         ResultSet rs=stm.executeQuery();
         if(!rs.isBeforeFirst()){
         return null;
         }
         return rs;
     }
}
