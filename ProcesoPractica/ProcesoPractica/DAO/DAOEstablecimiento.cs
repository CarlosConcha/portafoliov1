using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;

namespace ProcesoPractica.DAO
{
    class DAOEstablecimiento
    {
         public static DataTable sqlSelectAll()
        {
            String sql = string.Format("select id_rol,concat(nombre_rol,concat(' (',PRIVILEGIO)) || ')' as WEA  from roles");
            return BD.BD.getInstance().sqlSelectTodos(sql);

        }
         public static int sqlSelectId(int idsede,int idescuela)
         {
             String sqlc = string.Format("SELECT * FROM ESCUELA_SEDE WHERE ESCUELA_ID_ESCUELA={0} AND SEDE_ID_SEDE={1}", idescuela,idsede);
             DataRow dr = BD.BD.getInstance().sqlSelectUnico(sqlc);
             
             if(dr == null){
                 return -1;
             }
             int resultado = int.Parse(dr["ID_ESTABLECIMIENTO"].ToString());
             return resultado;
         }
    
    }
}
