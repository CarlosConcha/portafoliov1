using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.controlador
{
    class Builder
    {
        private static String path = "..\\..\\lenguaje\\idiomas.ini";

        public static String Leer (string lang, string Key){

            String msgcod=IniFile.ReadValue(lang, Key, path);
            byte[] bytes = Encoding.Default.GetBytes(msgcod);
            String mensaje = Encoding.UTF8.GetString(bytes);

            return mensaje;
        }
    }
}
