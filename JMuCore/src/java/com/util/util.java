/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.util;

import com.entity.Estadis;
import java.io.File;
import javax.sound.midi.Patch;
import javax.xml.bind.JAXBContext;
import javax.xml.bind.JAXBException;
import javax.xml.bind.Unmarshaller;

/**
 *
 * @author carlos
 */
public class util {
    public static Estadis loadXml() throws JAXBException {
        
        File file=new File("C:\\Users\\carlos\\Documents\\NetBeansProjects\\JMuCore\\src\\java\\com\\consume\\statistics.xml");
        JAXBContext jax=JAXBContext.newInstance(Estadis.class);
        Unmarshaller jaxUn=jax.createUnmarshaller();
        Estadis est=(Estadis) jaxUn.unmarshal(file);
        return est;
    }
}
