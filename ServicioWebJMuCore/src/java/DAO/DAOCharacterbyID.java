/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

import Entidades.CharacterbyID;
import Entidades.Login;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author carlos
 */
public class DAOCharacterbyID {
    public static List<CharacterbyID> getCharByID(String account){
             String sql = "SELECT"
                + "  [AccountID]"
                + " ,[Name]"
                + " ,[cLevel]"
                + " ,[LevelUpPoint]"
                + " ,[Strength]"
                + " ,[Dexterity]"
                + " ,[Vitality]"
                + " ,[Energy]"
                + " ,[Money]"
                + " ,[MapNumber]"
                + " ,[PkLevel]"
                + " ,[Leadership]"
                + " ,[Resets]"
                + "  FROM [MuOnline].[dbo].[Character] where AccountID=?";
        PreparedStatement stm;
        ResultSet rst;
        List<CharacterbyID> characterID=new ArrayList<CharacterbyID>();
        Boolean isValid=true;
        try{
        stm=BD.BD.getInstancia().getConnect().prepareStatement(sql);
        stm.setString(1, account);
        rst=BD.BD.query(stm);
        while(rst.next()){
        CharacterbyID character=new CharacterbyID();
        character.setAccountId(rst.getString("AccountID"));
        character.setName(rst.getString("Name"));
        character.setLevel(rst.getInt("cLevel"));
        character.setPoints(rst.getInt("LevelUpPoint"));
        character.setStrength(rst.getInt("Strength"));
        character.setDexterity(rst.getInt("Dexterity"));
        character.setVitality(rst.getInt("Vitality"));
        character.setEnergy(rst.getInt("Energy"));
        character.setMoney(rst.getInt("Money"));
        character.setMapN(rst.getInt("MapNumber"));
        character.setPKlvl(rst.getInt("PkLevel"));
        character.setLeadership(rst.getInt("Leadership"));
        character.setReset(rst.getInt("Resets"));
        characterID.add(character);
        }
        
        }catch(SQLException err){
            System.err.println("Error al consultar el characterId err:"+err.getMessage());
        err.printStackTrace();
        }
        if(!isValid){
            return null;
        }
        return characterID;
       
    }
    
    public static Boolean setLevel(CharacterbyID character){
        String sql="update MuOnline.dbo.Character set cLevel= ? where AccountID= ? and Name= ?";
        int result=0;
        try{
        PreparedStatement stm=BD.BD.getInstancia().getConnect().prepareStatement(sql);
        stm.setInt(1, character.getLevel());
        stm.setString(2, character.getAccountId());
        stm.setString(3, character.getName());
        result=BD.BD.getInstancia().ejecutar(stm);
        }catch(SQLException err){
        err.printStackTrace();
        }
        return result>0;
    }
}
