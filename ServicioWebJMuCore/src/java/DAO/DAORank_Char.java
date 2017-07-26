/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

import Entidades.Rank_Char;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author carlos
 */
public class DAORank_Char {
    public static Rank_Char[] getRankChar(){
        String sql="select TOP 3 Name,resets from MuOnline.dbo.Character order by resets desc";
        PreparedStatement stm;
        ResultSet rst;
        List<Rank_Char> rank=new ArrayList<Rank_Char>();
        Boolean isValid=true;
        try{
        stm=BD.BD.getInstancia().getConnect().prepareStatement(sql);
        rst=BD.BD.query(stm);
        while(rst.next()){
        rank.add(new Rank_Char(rst.getString("Name"),rst.getInt("resets")));
        }
        isValid=(rank.size()==3)?true:false;
        }catch(SQLException err){
            System.err.println("Error al consultar el ranking err:"+err.getMessage());
        err.printStackTrace();
        }
        if(!isValid){
            return null;
        }
        return rank.toArray(new Rank_Char[rank.size()]);
    } 
}
