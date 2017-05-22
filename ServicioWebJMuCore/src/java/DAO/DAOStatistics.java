/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;
import Entidades.statistics;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
/**
 *
 * @author carlos
 */
public class DAOStatistics {
    public static statistics getEstadistics() throws SQLException {
        String sql = "select COUNT(distinct memb.memb___id),COUNT(pj.Name),\n"
                + "(select COUNT(G_Name) from MuOnline.dbo.Guild),\n"
                + "(select COUNT(memb___id) from MuOnline.dbo.MEMB_STAT where ConnectStat=1) \n"
                + "from MuOnline.dbo.MEMB_INFO memb\n"
                + "left join MuOnline.dbo.Character pj\n"
                + "on memb.memb___id=pj.AccountID\n"
                + "COLLATE modern_spanish_ci_as";
        PreparedStatement stm = BD.BD.getInstancia().getConnect().prepareStatement(sql);
        ResultSet rs = BD.BD.query(stm);
        statistics std=new statistics();
        if(rs.next()){
        std.setTotalAcc(rs.getInt(1));
        std.setTotalUser(rs.getInt(2));
        std.setTotalGuild(rs.getInt(3));
        std.setCharOnline(rs.getInt(4));
        }else{
        return null;
        }
        return std;
    }
}
