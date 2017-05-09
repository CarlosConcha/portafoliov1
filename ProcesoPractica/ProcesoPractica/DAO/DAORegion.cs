using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using ProcesoPractica.entidades;
using System.Data;

namespace ProcesoPractica.DAO
{
    class DAORegion
    {
        public static Boolean sqlInsertar(Region reg)
        {
            String sql = string.Format("INSERT INTO REGION VALUES({0},'{1}')"
                , reg.Id_region
                , reg.Nombre_region);


            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }
        public static Boolean sqlSelect(Carrera carr)
        {

            // string sql = string.Format("SELECT NOMBRE_AUTOR from Autor where id_autor={0} "
            //    , autor.IdAutor
            //   );
            //  DataRow row = BD.BD.getInstance().sqlSelectOne(sql);
            // if (row == null)
            //    return false;
            //autor.NombreAutor = row["NOMBRE_AUTOR"].ToString();
            return true;
        }




        public static Boolean sqlDelete(Region reg)
        {
            String sql = string.Format("DELETE FROM REGION WHERE ID_REGION={0}"
                , reg.Id_region);


            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }



        public static Boolean sqlUpdate(Region reg)
        {
            String sql = string.Format("UPDATE REGION SET NOMBRE_REGION={1} WHERE ID_REGION={0}"
                , reg.Id_region
                , reg.Nombre_region);


            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }
        public static DataTable sqlSelectAll()
        {
            String sql = string.Format("SELECT  * FROM CARRERA");
            return BD.BD.getInstance().sqlSelectTodos(sql);

        }
    }
}
