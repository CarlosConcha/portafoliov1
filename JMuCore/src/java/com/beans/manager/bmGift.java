/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.beans.manager;

import java.io.Serializable;
import java.util.Map;
import javax.annotation.PostConstruct;
import javax.faces.context.FacesContext;
import javax.inject.Named;
import javax.faces.view.ViewScoped;
import javax.inject.Inject;
import javax.xml.ws.WebServiceRef;
import mu.online.service.Credits;
import mu.online.service.FbLike;
import mu.online.service.ServicioWeb_Service;

/**
 *
 * @author carlos
 */
@Named(value = "bmGift")
@ViewScoped
public class bmGift implements Serializable{

    private String socialParam;
    @WebServiceRef(wsdlLocation = "WEB-INF/wsdl/localhost_8080/ServicioWebV1/servicioWeb.wsdl")
    private ServicioWeb_Service service;
    
    @Inject
    private SessionController session;
    @Inject
    private ParameterController parameter;
    public bmGift() {
        
    }
    
    public Boolean isSocialLike(){
        if(isFBLike(session.getSession().getUser())){
            return false;
        }
       return true;
    }

    public String getSocialParam() {
        return socialParam;
    }

    public void setSocialParam(String socialParam) {
        this.socialParam = socialParam;
    }

    public void getParamSocial(){
        
        String result=parameter.getParam().get("social");
        if(result!=null){
            setSocialParam(result);
            if(isSocialLike()){
                if(getSocialParam().equals("like")){
                    FbLike like=new FbLike();
                    like.setFbLike("yes");
                    like.setAccount(session.getSession().getUser());
                    setFBLike(like);
                    Credits credits=new Credits();
                    credits.setUser(like.getAccount());
                    credits.setCredit(20000);
                    addCredit(credits);
                }
            }
        }else{
            setSocialParam("no hay mano");
        }
    }
    
    private Boolean isFBLike(java.lang.String like) {
        // Note that the injected javax.xml.ws.Service reference as well as port objects are not thread safe.
        // If the calling of port operations may lead to race condition some synchronization is required.
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.isFBLike(like);
    }

    private Boolean setFBLike(mu.online.service.FbLike like) {
        // Note that the injected javax.xml.ws.Service reference as well as port objects are not thread safe.
        // If the calling of port operations may lead to race condition some synchronization is required.
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.setFBLike(like);
    }

    private Boolean addCredit(mu.online.service.Credits credits) {
        // Note that the injected javax.xml.ws.Service reference as well as port objects are not thread safe.
        // If the calling of port operations may lead to race condition some synchronization is required.
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.addCredit(credits);
    }
    
}
