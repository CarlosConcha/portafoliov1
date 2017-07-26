/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.beans.manager;

import com.builder.FactoryXml;
import com.consume.Data;
import com.entity.Estadis;
import com.entity.ListRankChar;
import com.entity.ListRankPK;
import com.entity.News;
import com.entity.RankG;
import com.entity.Rank_CS;
import javax.inject.Named;
import java.io.Serializable;
import java.net.MalformedURLException;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.ViewScoped;
import javax.xml.bind.JAXBException;
import mu.online.service.Exception_Exception;
import mu.online.service.Statistics;


/**
 *
 * @author carlos
 */
@ManagedBean
@Named(value = "mbEstadisticas")
@ViewScoped
public class mbEstadisticas extends Data implements Serializable {

    

    /**
     * Creates a new instance of mbEstadisticas
     */
    public mbEstadisticas() {
    }
    public Statistics getEstadistic() throws Exception_Exception{
        return estadisticas();
    }

  
    public Estadis getEstadis() throws JAXBException, MalformedURLException{
      return (Estadis)FactoryXml.loadXml(new Estadis());
    }
    public News getNews() throws JAXBException, MalformedURLException{
        return (News)FactoryXml.loadXml(new News());
    }

   
    public ListRankPK getRank_PK(){
        
         return (ListRankPK)FactoryXml.loadXml(new ListRankPK());
    }

  
    public ListRankChar getRankChar(){
    return (ListRankChar)FactoryXml.loadXml(new ListRankChar());
    }

   
    public RankG getRankG(){
    return (RankG)FactoryXml.loadXml(new RankG());
    }

    public Rank_CS getRankCastleSieg(){
        return (Rank_CS)FactoryXml.loadXml(new Rank_CS());
    }
}
