/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BD;

/**
 *
 * @author carlos
 */
public class permiso {
    private final static String serverName = "localhost";
    private final static String portNumber = "1433";
    private final static String databaseName = "MuOnline";
    private final static String userName = "sa";
    private final static String password = "54287210aa";
    
    public static String getUrl(){
    return "jdbc:microsoft:sqlserver://"+serverName+":"+portNumber+";DatabaseName="+databaseName+"";
    }

    public static String getUserName() {
        return userName;
    }

    public static String getPassword() {
        return password;
        
    }
    
}
