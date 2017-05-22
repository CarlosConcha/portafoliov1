/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

import java.sql.PreparedStatement;
import BD.BD;
import java.sql.SQLException;
import Entidades.Login;
import java.sql.ResultSet;
/**
 *
 * @author carlos
 */
public class DAOMemb {
    /**
    public static void insertar(){
    String sql="saddsadasd";
    try{
        PreparedStatement consulta=BD.getInstancia().getConnect().prepareStatement(sql);
        BD.getInstancia().ejecutar(consulta);
    }catch(SQLException err){
        System.out.println("error al realizar el insertMemb "+err.getMessage());
    }finally{
        BD.getInstancia().desconectar();
    }
    }
    * */
    public static Login login(Login logg)throws SQLException, Exception, NullPointerException{
        int rows=0;
        String sql="select memb_guid,memb___id,memb_name,memb__pwd "
                + "from MuOnline.dbo.MEMB_INFO "
                + "where CONVERT(NVARCHAR(32),memb__pwd,2) = CONVERT(NVARCHAR(32),[dbo].[fn_md5](?,?),2)";
        PreparedStatement consulta=BD.getInstancia().getConnect().prepareStatement(sql);
        //String passMD5=util.Encrypt.encrypt_md5(logg.getPass());
        consulta.setString(1, logg.getPass());
        consulta.setString(2, logg.getUser());
        ResultSet rs=BD.query(consulta);
        if(rs == null){
            return null;
        }
        Login login=new Login();
        while (rs.next()) {
               login.setPass(rs.getString("memb__pwd"));
               login.setUser(rs.getString("memb___id"));
               if(rs.isLast()){
               rows=rs.getRow();
               if(rows>1){
               return null;
               }
               }
        }
             return login;
        
        
    }
}
