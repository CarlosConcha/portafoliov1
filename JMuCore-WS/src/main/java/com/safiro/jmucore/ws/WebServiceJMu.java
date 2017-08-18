/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.safiro.jmucore.ws;

import com.safiro.jmucore.dao.imp.IRankCS;
import com.safiro.jmucore.dao.imp.IRankChar;
import com.safiro.jmucore.dao.imp.IRankGuild;
import com.safiro.jmucore.dao.imp.IRankPK;
import com.safiro.jmucore.model.Rank_CS;
import com.safiro.jmucore.model.Rank_Char;
import com.safiro.jmucore.model.Rank_Guild;
import com.safiro.jmucore.model.Rank_PK;
import java.util.List;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;

/**
 *
 * @author carlos
 */
@WebService(serviceName = "WebServiceJMu")
public class WebServiceJMu {

    /**
     * This is a sample web service operation
     */
    ApplicationContext context = new ClassPathXmlApplicationContext("com/safiro/jmucore/xml/beans.xml");
    
    @WebMethod(operationName = "hello")
    public String hello(@WebParam(name = "name") String txt) {
        return "Hello " + txt + " !";
    }
    
    @WebMethod(operationName = "getRankCharacters")
    public List<Rank_Char> getRankCharacters()
    {
        IRankChar rankchar=(IRankChar)context.getBean("DAORankChar");
        List<Rank_Char> rankchars=rankchar.getRankChar();
        return rankchars;
    }
     @WebMethod(operationName = "getRankPK")
    public List<Rank_PK> getRankPK()
    {
       IRankPK rankpk=(IRankPK)context.getBean("DAORankPK");
        List<Rank_PK> rankpks=rankpk.getRankPK();
        return rankpks;
    }
      @WebMethod(operationName = "getRankGuild")
    public List<Rank_Guild> getRankGuild()
    {
        IRankGuild rankguild=(IRankGuild)context.getBean("DAORankGuild");
        List<Rank_Guild> rankguilds=rankguild.getRankGuild();
        return rankguilds;
    }
      @WebMethod(operationName = "getRankCS")
    public Rank_CS getRankCS()
    {
        IRankCS rankcs=(IRankCS)context.getBean("DAORankCS");
        Rank_CS rankcss=rankcs.getRankChar();
        return rankcss;
    }
}
