/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

import Entidades.Credits;
import java.sql.PreparedStatement;
import java.sql.SQLException;

/**
 *
 * @author carlos
 */
public class DAOCredits {
    public static Boolean addCredits(Credits cred){
        String sql="update [MuOnline].[dbo].[DmN_Shop_Credits] set credits= credits + ? where memb___id= ?";
        int result=0;
        try{
        PreparedStatement stm=BD.BD.getInstancia().getConnect().prepareStatement(sql);
        stm.setInt(1, cred.getCredit());
        stm.setString(2, cred.getUser());
        result=BD.BD.getInstancia().ejecutar(stm);
        }catch(SQLException err){
        err.printStackTrace();
        }
        return result>0;
    }
}
