/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

import Entidades.Rank_Guild;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author carlos
 */
public class DAORank_Guild {
     public static Rank_Guild[] getRankGuild(){
        String sql="select TOP 3 G_Name,G_Master,G_Score from MuOnline.dbo.Guild order by G_Score desc";
        PreparedStatement stm;
        ResultSet rst;
        List<Rank_Guild> rank=new ArrayList<Rank_Guild>();
        Boolean isValid=true;
        try{
        stm=BD.BD.getInstancia().getConnect().prepareStatement(sql);
        rst=BD.BD.query(stm);
        while(rst.next()){
        rank.add(new Rank_Guild(rst.getString("G_Master"),rst.getString("G_Name"),rst.getInt("G_Score")));
        }
        isValid=(rank.size()==3)?true:false;
        }catch(SQLException err){
            System.err.println("Error al consultar el ranking Guild err:"+err.getMessage());
        err.printStackTrace();
        }
        if(!isValid){
            return null;
        }
        return rank.toArray(new Rank_Guild[rank.size()]);
    } 
}
