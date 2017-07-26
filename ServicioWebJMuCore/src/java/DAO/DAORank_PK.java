/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

import Entidades.Rank_PK;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author carlos
 */
public class DAORank_PK {
     public static Rank_PK[] getRankPK(){
        String sql="select TOP 3 Name,PkCount from MuOnline.dbo.Character order by PkCount desc";
        PreparedStatement stm;
        ResultSet rst;
        List<Rank_PK> rank=new ArrayList<Rank_PK>();
        Boolean isValid=true;
        try{
        stm=BD.BD.getInstancia().getConnect().prepareStatement(sql);
        rst=BD.BD.query(stm);
        while(rst.next()){
        rank.add(new Rank_PK(rst.getString("Name"),rst.getInt("PkCount")));
        }
        isValid=(rank.size()==3)?true:false;
        }catch(SQLException err){
            System.err.println("Error al consultar el ranking PK err:"+err.getMessage());
        err.printStackTrace();
        }
        if(!isValid){
            return null;
        }
        return rank.toArray(new Rank_PK[rank.size()]);
    }
}
