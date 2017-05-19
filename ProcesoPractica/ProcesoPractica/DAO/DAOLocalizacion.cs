using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using ProcesoPractica.entidades;
using System.Data;

namespace ProcesoPractica.DAO
{
    class DAOLocalizacion
    {
        public static Boolean sqlInsertar(Localizacion loc)
        {
            String sql = string.Format("INSERT INTO LOCACION VALUES(sec_locacion.nextval,'{0}','{1}')"
                , loc.Latitud
                , loc.Longitud);


            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }
        public static List<Localizacion> sqlSelectLoc()
        {

            string sqlc = "SELECT * FROM LOCACION";

            DataTable dt = BD.BD.getInstance().sqlSelectTodos(sqlc);
            List<Localizacion> lista = new List<Localizacion>();

            foreach (DataRow fila in dt.Rows)
            {
               
                 lista.Add(new Localizacion(fila["LATITUD"].ToString(),fila["LONGITUD"].ToString()));
                 
            }
            return lista;
        }
        public static int sqlGetid(double lat, double lng)
        {

            string sqlc = string.Format("SELECT ID_LOCACION FROM LOCACION WHERE LATITUD='{0}' and LONGITUD='{1}'"
                , lat
                , lng);

            DataRow dr = BD.BD.getInstance().sqlSelectUnico(sqlc);
            int id = int.Parse(dr["ID_LOCACION"].ToString());
            return id;
        }
    }
}
