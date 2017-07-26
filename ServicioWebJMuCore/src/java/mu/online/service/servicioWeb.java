/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mu.online.service;

import DAO.*;
import Entidades.CharacterbyID;
import Entidades.Credits;
import Entidades.FBLike;
import Entidades.Login;
import Entidades.Rank_CS;
import Entidades.Rank_Char;
import Entidades.Rank_Guild;
import Entidades.Rank_PK;
import Entidades.statistics;
import java.util.List;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author carlos
 */
@WebService(serviceName = "servicioWeb")
public class servicioWeb {

    /**
     * This is a sample web service operation
     */
    @WebMethod(operationName = "hello")
    public String hello(@WebParam(name = "name") String txt) {
        return "Hello " + txt + " !";
    }
    
    @WebMethod(operationName = "loginUser")
    public Login loginUser(@WebParam(name = "user") String user,@WebParam(name = "pwd") String pwd)
    {
        Login logUser=new Login();
        logUser.setUser(user);
        logUser.setPass(pwd);
        return DAO.DAOMemb.login(logUser);
        
    }
    @WebMethod(operationName = "estadisticas")
    public statistics login() throws  Exception
    {
       return DAO.DAOStatistics.getEstadistics();
    }
    @WebMethod(operationName = "getRankCharacters")
    public Rank_Char[] getRankCharacters()
    {
       return DAO.DAORank_Char.getRankChar();
    }
     @WebMethod(operationName = "getRankPK")
    public Rank_PK[] getRankPK()
    {
       return DAO.DAORank_PK.getRankPK();
    }
      @WebMethod(operationName = "getRankGuild")
    public Rank_Guild[] getRankGuild()
    {
       return DAO.DAORank_Guild.getRankGuild();
    }
      @WebMethod(operationName = "getRankCS")
    public Rank_CS getRankCS()
    {
       return DAO.DAORank_CS.getRankChar();
    }
    @WebMethod(operationName = "getCharacterAccount")
    public List<CharacterbyID> getCharacterAccount(@WebParam(name="login") String login){
        return DAO.DAOCharacterbyID.getCharByID(login);
    }
    @WebMethod(operationName = "isFBLike")
    public Boolean isFBLike(@WebParam(name="like") String account){
        FBLike like=new FBLike();
        like.setAccount(account);
        return DAO.DAOFBLike.isSocialLike(like);
    }
    @WebMethod(operationName = "setFBLike")
    public Boolean setFBLike(@WebParam(name="like") FBLike like){
        return DAO.DAOFBLike.setSocialLike(like);
    }
     @WebMethod(operationName = "setLevelChar")
    public Boolean setLevelChar(@WebParam(name="character") CharacterbyID character){
        return DAO.DAOCharacterbyID.setLevel(character);
    }
     @WebMethod(operationName = "addCredit")
    public Boolean addCredit(@WebParam(name="credits") Credits cred){
        return DAO.DAOCredits.addCredits(cred);
    }
}
