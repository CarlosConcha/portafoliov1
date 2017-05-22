/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.beans.manager;

import com.entity.Estadis;
import com.util.util;
import javax.inject.Named;
import javax.enterprise.context.SessionScoped;
import java.io.Serializable;
import javax.xml.bind.JAXBException;
import javax.xml.ws.WebServiceRef;
import mu.online.service.Exception_Exception;
import mu.online.service.ServicioWeb_Service;
import mu.online.service.Statistics;

/**
 *
 * @author carlos
 */
@Named(value = "mbEstadisticas")
@SessionScoped
public class mbEstadisticas implements Serializable {

    @WebServiceRef(wsdlLocation = "WEB-INF/wsdl/localhost_8080/ServicioWebV1/servicioWeb.wsdl")
    private ServicioWeb_Service service;

    /**
     * Creates a new instance of mbEstadisticas
     */
    public mbEstadisticas() {
    }
    public Statistics getEstadistic() throws Exception_Exception{
        return estadisticas();
    }

    private Statistics estadisticas() throws Exception_Exception {
        // Note that the injected javax.xml.ws.Service reference as well as port objects are not thread safe.
        // If the calling of port operations may lead to race condition some synchronization is required.
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.estadisticas();
    }
    public Estadis getEstadis() throws JAXBException{
        
      return util.loadXml();
    }
}
