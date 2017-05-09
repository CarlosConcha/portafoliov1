using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using ProcesoPractica.entidades;
using System.Data;

namespace ProcesoPractica.DAO
{
    class DAOEscuela
    {

        public static Boolean sqlInsertar(Escuela escuela)
        {
            
            String sql = string.Format("INSERT INTO ESCUELA VALUES(sec_escuela.nextval,'{0}')"
                , escuela.Nombre_escuela);


            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }
        public static DataTable sqlSelectTodas()
        {

            string sql = "SELECT * FROM ESCUELA ORDER BY ID_ESCUELA";
            DataTable dt = BD.BD.getInstance().sqlSelectTodos(sql);
            if (dt == null)
            {
                return null;
            }
            return dt;
        }




        public static Boolean sqlDelete(Escuela escuela)
        {
            String sql = string.Format("DELETE FROM ESCUELA WHERE ID_CARRERA={0}"
                , escuela.Id_escuela
                );

            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }



        public static Boolean sqlUpdate(Escuela escuela)
        {
            String sql = string.Format("UPDATE CARRERA SET NOMBRE_CARRERA={0}, ESCUELA_ID_ESCUELA={1} WHERE ID_ESCUELA={2}"
               );


            if (BD.BD.getInstance().sqlEjecutar(sql))
            {
                return true;
            }

            return false;
        }
        public static DataTable sqlSelectEsc(int id_sede)
        {

            String sql = string.Format("select es.ID_ESTABLECIMIENTO,esc.NOMBRE_ESCUELA,esc.ID_ESCUELA from ESCUELA_SEDE es"
                                      +" inner join sede se on es.sede_id_sede=se.id_sede"
                                      +" inner join escuela esc on es.ESCUELA_ID_ESCUELA=esc.ID_ESCUELA"
                                      +" where es.SEDE_ID_SEDE={0}"
                                      ,id_sede);
            return BD.BD.getInstance().sqlSelectTodos(sql);

        }

    }
}
