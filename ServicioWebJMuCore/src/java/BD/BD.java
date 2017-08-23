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
        connect=DriverManager.getConnection("jdbc:sqlserver://localhost:1433;databaseName=MuOnline","sa","123456");
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
    public int ejecutar(PreparedStatement sql){
        
        int result=0;
        try {
              
            //PreparedStatement statement=connect.prepareStatement(sql);
            
            result=sql.executeUpdate();
            desconectar();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return result;
    
    }
    public void desconectar() {

        try {
            connect.close();

        } catch (SQLException ex) {
            System.err.println("Error al cerrar la conexion");
        }

    }
     public ResultSet query(PreparedStatement stm)throws SQLException{
         
         ResultSet rs=stm.executeQuery();
        
         if(!rs.isBeforeFirst()){
         return null;
         }
         return rs;
     }
}
