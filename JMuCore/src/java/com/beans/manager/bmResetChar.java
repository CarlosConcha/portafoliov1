/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.beans.manager;

import com.entity.ResetOPT;
import java.io.Serializable;
import java.util.List;
import javax.annotation.PostConstruct;
import javax.faces.application.FacesMessage;
import javax.faces.context.FacesContext;
import javax.faces.view.ViewScoped;
import javax.inject.Inject;
import javax.inject.Named;
import javax.xml.ws.WebServiceRef;
import mu.online.service.CharacterbyID;
import mu.online.service.ServicioWeb_Service;


/**
 *
 * @author carlos
 */
@Named (value = "bmResetChar")
@ViewScoped
public class bmResetChar implements Serializable{
    @Inject
    SessionController session;
    
    @Inject
    bmReqReset reqreset;
    
    @WebServiceRef(wsdlLocation = "WEB-INF/wsdl/localhost_8080/ServicioWebV1/servicioWeb.wsdl")
    private ServicioWeb_Service service;

    private List<CharacterbyID> charList;
    private CharacterbyID characterSelect;
    
    @PostConstruct
    public void Init(){
        charList=getCharacterAccount(session.getSession().getUser());
    }

    public List<CharacterbyID> getCharList() {
        return charList;
    }

    public void setCharList(List<CharacterbyID> charList) {
        this.charList = charList;
    }

    public CharacterbyID getCharacterSelect() {
        return characterSelect;
    }

    public void setCharacterSelect(CharacterbyID characterSelect) {
        this.characterSelect = characterSelect;
    }

    public void resetChar(){
        
        
        Boolean isValidChar=charList.stream().anyMatch(x -> x.getName().equals(characterSelect.getName()));
        if(isValidChar){
            ResetOPT rstop=reqreset.getReqrst();
            if(characterSelect.getLevel()>=rstop.getLevelNeed() && characterSelect.getMoney()>=rstop.getMoneyNeed()){
               //do something 
               FacesContext.getCurrentInstance().addMessage(null, new FacesMessage("Reset", "Personaje reseteado satisfactoriamente"));
            }else{
               FacesContext.getCurrentInstance().addMessage(null, new FacesMessage(FacesMessage.SEVERITY_WARN,"Advertencia", "El Personaje no cumple los requisitos"));
            }
            
        }else{
            FacesContext.getCurrentInstance().addMessage(null, new FacesMessage(FacesMessage.SEVERITY_FATAL,"no", "no"));
        }
    }
    
    
    private java.util.List<mu.online.service.CharacterbyID> getCharacterAccount(java.lang.String login) {
        // Note that the injected javax.xml.ws.Service reference as well as port objects are not thread safe.
        // If the calling of port operations may lead to race condition some synchronization is required.
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.getCharacterAccount(login);
    }
    
    
    
}
