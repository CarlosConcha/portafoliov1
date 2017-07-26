/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.consume;

import mu.online.service.Exception_Exception;
import mu.online.service.RankCS;
import mu.online.service.Statistics;

/**
 *
 * @author carlos
 */
public class Data {

    protected static java.util.List<mu.online.service.RankGuild> getRankGuild() {
        mu.online.service.ServicioWeb_Service service = new mu.online.service.ServicioWeb_Service();
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.getRankGuild();
    }

    protected static java.util.List<mu.online.service.RankChar> getRankCharacters() {
        mu.online.service.ServicioWeb_Service service = new mu.online.service.ServicioWeb_Service();
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.getRankCharacters();
    }

    protected static java.util.List<mu.online.service.RankPK> getRankPK() {
        mu.online.service.ServicioWeb_Service service = new mu.online.service.ServicioWeb_Service();
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.getRankPK();
    }

    protected static RankCS getRankCS() {
        mu.online.service.ServicioWeb_Service service = new mu.online.service.ServicioWeb_Service();
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.getRankCS();
    }

    protected static Statistics estadisticas() throws Exception_Exception {
        mu.online.service.ServicioWeb_Service service = new mu.online.service.ServicioWeb_Service();
        mu.online.service.ServicioWeb port = service.getServicioWebPort();
        return port.estadisticas();
    }
    
}
