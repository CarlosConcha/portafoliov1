/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package util;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

/**
 *
 * @author carlos
 */
public class Encrypt {
    private static final char[] HEX = { '0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f' };
    public static String encrypt_md5(String noEncrypt){
        try{
            MessageDigest mnsg=MessageDigest.getInstance("MD5");
            byte[] bytes=mnsg.digest(noEncrypt.getBytes());
            StringBuilder strbCadenaMD5 = new StringBuilder(2 * bytes.length);
           for (int i = 0; i < bytes.length; i++)
           {
               int bajo = (int)(bytes[i] & 0x0f);
               int alto = (int)((bytes[i] & 0xf0) >> 4);
               strbCadenaMD5.append(HEX[alto]);
               strbCadenaMD5.append(HEX[bajo]);
           }
           return strbCadenaMD5.toString();
        }catch(NoSuchAlgorithmException err){
        return null;
        }
    
    }
}
