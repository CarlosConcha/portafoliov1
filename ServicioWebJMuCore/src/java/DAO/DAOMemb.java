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
    public static Login login(Login logg){
        int rows=0;
        String sql = "select memb_guid,memb___id,mail_addr,out__days,country,gender,acc_ip,fb_like "
                + "from MuOnline.dbo.MEMB_INFO "
                + "where CONVERT(NVARCHAR(32),memb__pwd,2) = CONVERT(NVARCHAR(32),[MuOnline].[dbo].[fn_md5](?,?),2)";
        Login login=new Login();
        try{
        PreparedStatement consulta=BD.getInstancia().getConnect().prepareStatement(sql);
        //String passMD5=util.Encrypt.encrypt_md5(logg.getPass());
        consulta.setString(1, logg.getPass());
        consulta.setString(2, logg.getUser());
        ResultSet rs=BD.query(consulta);
        if(rs == null){
            return null;
        }
        
        while (rs.next()) {
               login.setUser(rs.getString("memb___id"));
               login.setPass("");
               login.setCountry(rs.getString("country"));
               login.setGender(rs.getInt("gender"));
               login.setId(rs.getInt("memb_guid"));
               login.setLastIp(rs.getString("acc_ip"));
               login.setMail(rs.getString("mail_addr"));
               login.setOutDays(rs.getString("out__days"));
               login.setFBLike(rs.getString("fb_like"));
        }
        }catch(Exception err){
            System.out.println(err.getMessage());
            err.printStackTrace();
        }
             return login;
        
        
    }
}
