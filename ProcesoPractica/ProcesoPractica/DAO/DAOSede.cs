using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using ProcesoPractica.entidades;
namespace ProcesoPractica.DAO
{
    class DAOSede
    {
        public static DataTable sqlSelectAll()
        {
            String sql = string.Format("SELECT ID_SEDE,NOMBRE_SEDE FROM SEDE ORDER BY ID_SEDE");
            return BD.BD.getInstance().sqlSelectTodos(sql);

        }
        public static Boolean sqlInsertar(Sede sede)
        {
            String sql = string.Format("INSERT INTO SEDE VALUES(sec_sede.nextval,'{0}',{1})"
                , sede.Nombre_sede
                , sede.Locacion.IdLocalizacion);

            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }
    }
}
