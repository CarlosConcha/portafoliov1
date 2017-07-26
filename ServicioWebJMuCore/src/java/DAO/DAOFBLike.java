/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

import BD.BD;
import Entidades.FBLike;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

/**
 *
 * @author carlos
 */
public class DAOFBLike {
    public static Boolean isSocialLike(FBLike like){
        
        String sql = "select fb_like from muonline.dbo.memb_info where memb___id=?";
        Boolean result=false;
        try{
        PreparedStatement consulta=BD.getInstancia().getConnect().prepareStatement(sql);
        //String passMD5=util.Encrypt.encrypt_md5(logg.getPass());
        consulta.setString(1, like.getAccount());
        
        ResultSet rs=BD.query(consulta);
        if(rs == null){
            return false;
        }
        while(rs.next()){
            if(rs.getString("fb_like").equals("no") || rs.getString("fb_like").isEmpty()){
                result=false;
            }else{
                result=true;
            }
        }
        }catch(Exception err){
            System.out.println(err.getMessage());
            err.printStackTrace();
        }
           return result;
    }
    public static Boolean setSocialLike(FBLike like){
        String sql="update MuOnline.dbo.memb_info set fb_like= ? where memb___id=?";
        int result=0;
        try{
        PreparedStatement stm=BD.getInstancia().getConnect().prepareStatement(sql);
        stm.setString(1, like.getFbLike());
        stm.setString(2, like.getAccount());
        result=BD.getInstancia().ejecutar(stm);
        }catch(SQLException err){
        err.printStackTrace();
        }
        return result>0;
    }
}
