/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mu.online.service;

import DAO.*;
import Entidades.Login;
import Entidades.statistics;
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
    public Login loginUser(@WebParam(name = "user") String user,@WebParam(name = "pwd") String pwd) throws  Exception
    {
        Login logg=new Login();
        if(!user.isEmpty() || user.length()>5){
        logg.setPass(pwd);
        logg.setUser(user);
        logg=DAOMemb.login(logg);
        }else{
        return null;
        }
        if(logg == null){
        return null;
        }else{
            if(!logg.getUser().equals(user) && !logg.getPass().equals(pwd)){
            return null;
            }
        }
        return logg;
    }
    @WebMethod(operationName = "estadisticas")
    public statistics login() throws  Exception
    {
       return DAO.DAOStatistics.getEstadistics();
    }
}
