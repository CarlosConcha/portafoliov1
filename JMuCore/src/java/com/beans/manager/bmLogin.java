/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.beans.manager;

import java.io.Serializable;
import javax.enterprise.context.RequestScoped;
import javax.faces.application.FacesMessage;
import javax.faces.context.FacesContext;
import javax.inject.Inject;
import javax.inject.Named;
import javax.xml.ws.WebServiceRef;
import mu.online.service.Exception_Exception;
import mu.online.service.Login;
import mu.online.service.ServicioWeb_Service;


/**
 *
 * @author carlos
 */
@Named(value = "bmLogin")
@RequestScoped
public class bmLogin implements Serializable{

    @WebServiceRef(wsdlLocation = "WEB-INF/wsdl/localhost_8080/ServicioWebV1/servicioWeb.wsdl")
    private ServicioWeb_Service service;

    private String user;
    private String pass;
    @Inject
    private SessionController session;
    public bmLogin() {
    }

    public String getUser() {
        return user;
    }

    public void setUser(String user) {
        this.user = user;
    }

    public String getPass() {
        return pass;
    }

    public void setPass(String pass) {
        this.pass = pass;
    }
    public String validLogin() throws Exception_Exception{
        Login log=new Login();
        log=loginUser(user, pass);
        if(log != null){
            session.addSession(log);
            return "account/account?faces-redirect=true";
        }else{
            FacesContext context=FacesContext.getCurrentInstance();
            context.addMessage(null, new FacesMessage(FacesMessage.SEVERITY_ERROR, "No login","Usuario y/o Contraseña incorrecto"));
            return null;
        }
    
    }
    public String validTest(){
        return "index";
    }
    public String removeLogin(){
        session.removeSession();
        return "/index";  
    }

    private Login loginUser(java.lang.String user, java.lang.String pwd) throws Exception_Exception {
        // Note that the injected javax.xml.ws.Service reference as well as port objects are not thread safe.
        // If the calling of port operations may lead to race condition some synchronization is required.
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.loginUser(user, pwd);
    }
    
}
