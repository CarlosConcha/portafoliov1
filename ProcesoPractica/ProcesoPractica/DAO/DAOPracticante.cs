using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using ProcesoPractica.entidades;
namespace ProcesoPractica.DAO
{
    class DAOPracticante
    {
        public static Boolean sqlUpdate(Practicante usuario)
        {
            String sql = string.Format("UPDATE PRACTICANTE" 
            +" SET NOMBRE_USUARIO='{0}',RUT={1},DIGITO_VER={2},CUENTA_USUARIO='{3}',CONTRASENA='{4}',CORREO='{5}',TELEFONO='{6}',TAREAS='{7}',CARRERA_ID_CARRERA={8},ID_ESTABLECIMIENTO={9}"
            +" WHERE ID_PRACTICANTE={10}"

                , usuario.Nombre_usuario
                , usuario.Rut
                , usuario.Codver
                , usuario.Cuenta_usuario
                , usuario.Contrasena
               
                , usuario.Correo);
            BD.BD.getInstance().sqlEjecutar(sql);


            return true;
        }
        public static DataTable sqlSelectAll()
        {
           //String sql = string.Format("SELECT PRAC.NOMBRE_USUARIO,PRAC.RUT ||'-'|| PRAC.DIGITO_VER AS RUT,PRAC.CORREO,PRAC.TELEFONO,EST.TIPO_ESTADO FROM PRACTICANTE PRAC"
           //                          +" INNER JOIN ESTADO EST ON PRAC.ID_ESTADO=EST.ID_ESTADO");
            String sql = string.Format("SELECT * FROM PRACTICANTE");
            return BD.BD.getInstance().sqlSelectTodos(sql);

        }
        public static DataTable sqlSelectEstado()
        {
            String sql = string.Format("SELECT  * FROM ESTADO");
            return BD.BD.getInstance().sqlSelectTodos(sql);

        }
        public static Practicante sqlSelectId(String id)
        {

            string sqlc = string.Format("SELECT PRAC.NOMBRE_USUARIO,PRAC.RUT,PRAC.CORREO,PRAC.TELEFONO,PRAC.CARRERA_ID_CARRERA,PRAC.ID_ESTABLECIMIENTO,ESC.ID_ESCUELA,SED.ID_SEDE"
                                           +" FROM PRACTICANTE PRAC"
                                           +" INNER JOIN ESCUELA_SEDE EST ON PRAC.ID_ESTABLECIMIENTO=EST.ID_ESTABLECIMIENTO"
                                           +" INNER JOIN ESCUELA ESC ON ESC.ID_ESCUELA=EST.ESCUELA_ID_ESCUELA"
                                           +" INNER JOIN SEDE SED ON SED.ID_SEDE=EST.SEDE_ID_SEDE"
                                           +" WHERE ID_PRACTICANTE={0}"
               , id);
            DataRow dr = BD.BD.getInstance().sqlSelectUnico(sqlc);
            Practicante usuario = new Practicante();
            if (dr == null)
            {
                return null;
            }
            usuario.Nombre_usuario = dr["NOMBRE_USUARIO"].ToString();
            usuario.Rut = int.Parse(dr["RUT"].ToString());
            usuario.Correo = dr["CORREO"].ToString();
            usuario.Telefono = dr["TELEFONO"].ToString();
            Carrera carrera=new Carrera();
            carrera.Id_carrera=int.Parse(dr["CARRERA_ID_CARRERA"].ToString());
            usuario.Carrera_prac = carrera;
            Establecimiento est=new Establecimiento();
            est.Id_establecimiento=int.Parse(dr["ID_ESTABLECIMIENTO"].ToString());
            Sede sede = new Sede();
            sede.Id_sede = int.Parse(dr["ID_SEDE"].ToString());
            est.sede = sede;
            Escuela escuela = new Escuela();
            escuela.Id_escuela = int.Parse(dr["ID_ESCUELA"].ToString());
            est.escuela = escuela;
            usuario.Establecimiento_prac = est;

            return usuario;


        }
    }
}
