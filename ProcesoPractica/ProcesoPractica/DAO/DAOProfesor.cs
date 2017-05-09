using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using ProcesoPractica.entidades;

namespace ProcesoPractica.DAO
{
    class DAOProfesor
    {
        public static Boolean sqlAsignarProfesor(Practicante practicante)
        {
            String sql = string.Format("PR_ASIGNAR_PROFESOR");
            object[] parametros = new object[1];
            parametros[0] = practicante.Id_practicante.ToString();
            BD.BD.getInstance().sqlEjecutarProcedure(sql, parametros);


            return true;
        }
        public static DataTable sqlSelectAll()
        {
            String sql = string.Format("SELECT ID_PROFESOR,NOMBRE_USUARIO AS NOMBRE,RUT,CUPOS,MAXIMO FROM PROFESOR_GUIA");
            return BD.BD.getInstance().sqlSelectTodos(sql);

        }
    }
}
