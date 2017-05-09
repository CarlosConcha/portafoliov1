using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using ProcesoPractica.entidades;
using System.Data;

namespace ProcesoPractica.DAO
{
    class DAOCarrera
    {
        public static Boolean sqlInsertar(Carrera carr)
        {
            String sql = string.Format("INSERT INTO CARRERA VALUES(SEC_CARRERA.NEXTVAL,'{0}',{1})"
                , carr.Nombre_carrera
                , carr.Escuela_carrera.Id_escuela);


            if (BD.BD.getInstance().sqlEjecutar(sql)) {
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




        public static Boolean sqlDelete(Carrera carr)
        {
            String sql = string.Format("DELETE FROM CARRERA WHERE ID_CARRERA={0}"
                , carr.Id_carrera
                );

            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }



        public static Boolean sqlUpdate(Carrera carr)
        {
            String sql = string.Format("UPDATE CARRERA SET NOMBRE_CARRERA={0}, ESCUELA_ID_ESCUELA={1} WHERE ID_ESCUELA={2}" 
                , carr.Nombre_carrera
                , carr.Escuela_carrera
                , carr.Id_carrera);


            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }
        public static DataTable sqlSelectAll(int id)
        {
            String sql = string.Format("SELECT  * FROM CARRERA WHERE ESCUELA_ID_ESCUELA={0}", id);
            return BD.BD.getInstance().sqlSelectTodos(sql);
        }

        
    }
}
