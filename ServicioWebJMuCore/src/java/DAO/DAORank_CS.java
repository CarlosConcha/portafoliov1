/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

import Entidades.Rank_CS;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author carlos
 */
public class DAORank_CS {
    public static Rank_CS getRankChar(){
        String sql="select mucs.OWNER_GUILD,convert(varbinary,gi.G_Mark) \n"
                + "from MuOnline.dbo.MuCastle_DATA mucs\n"
                + "inner join MuOnline.dbo.Guild gi\n"
                + "on mucs.OWNER_GUILD=gi.G_Name";
        PreparedStatement stm;
        ResultSet rst;
        Rank_CS rank=null;
        
        try{
        stm=BD.BD.getInstancia().getConnect().prepareStatement(sql);
        rst=BD.BD.query(stm);
        while(rst.next()){
        rank=new Rank_CS(rst.getString(1),rst.getString(2));
        }
       
        }catch(SQLException err){
            System.err.println("Error al consultar el ranking CS err:"+err.getMessage());
        err.printStackTrace();
        }
    
        return rank;
    } 
}
