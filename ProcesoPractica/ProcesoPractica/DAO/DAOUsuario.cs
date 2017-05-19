using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using ProcesoPractica.entidades;
using System.Data;
using ProcesoPractica.BD;
namespace ProcesoPractica.DAO
{
    class DAOUsuario
    {
        public static Boolean sqlInsertar(Usuario usuario)
        {
            String sql = string.Format("INSERT INTO USUARIO VALUES(sec_usuario.nextval,'{0}',{1},{2},'{3}','{4}',{5},'{6}',{7}) "
               
                , usuario.Nombre_usuario
                , usuario.Rut
                , usuario.Codver
                , usuario.Cuenta_usuario
                , usuario.Contrasena
                , usuario.Role.Id_rol
                , usuario.Correo
                , usuario.Establecimiento.Id_establecimiento);
            BD.BD.getInstance().sqlEjecutar(sql);


            return true;
        }
        public static Boolean sqlSelect(Usuario usuario)
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




        public static Boolean sqlDelete(Usuario usuario)
        {
            return true;
        }



        public static Boolean sqlUpdate(Usuario usuario)
        {
            return true;
        }
        public static DataTable sqlSelectAll()
        {
            String sql = string.Format("SELECT  ID_AUTOR,NOMBRE_AUTOR FROM Autor");
            return BD.BD.getInstance().sqlSelectTodos(sql);

        }

        public static Usuario sqlSelectLogin(Usuario user)
        {

            string sqlc = string.Format("SELECT US.ROLES_ID_ROL,US.NOMBRE_USUARIO,ROL.NOMBRE_ROL,ROL.PRIVILEGIO,SE.NOMBRE_SEDE,ES.NOMBRE_ESCUELA FROM USUARIO US" 
                                        +" INNER JOIN ROLES ROL ON US.ROLES_ID_ROL=ROL.ID_ROL"
                                        +" INNER JOIN ESCUELA_SEDE EST ON EST.ID_ESTABLECIMIENTO=US.ESCUELA_SEDE_ID_LOCACION"
                                        +" INNER JOIN SEDE SE ON EST.SEDE_ID_SEDE=SE.ID_SEDE"
                                        +" INNER JOIN ESCUELA ES ON EST.ESCUELA_ID_ESCUELA=ES.ID_ESCUELA WHERE US.CUENTA_USUARIO='{0}' AND US.CONTRASENA='{1}'"
               , user.Cuenta_usuario
               , user.Contrasena);
            DataRow dr = BD.BD.getInstance().sqlSelectUnico(sqlc);
            Usuario usuario = new Usuario();
            if (dr == null)
            {
                return null;
            }
            usuario.Nombre_usuario = dr["NOMBRE_USUARIO"].ToString();
            Roles rol = new Roles();
            rol.Id_rol = int.Parse(dr["ROLES_ID_ROL"].ToString());
            rol.Nombre_rol = dr["NOMBRE_ROL"].ToString();
            rol.privilegios = dr["PRIVILEGIO"].ToString();
            usuario.Role = rol;
            Establecimiento est = new Establecimiento();
            Sede sede = new Sede();
            sede.Nombre_sede = dr["NOMBRE_SEDE"].ToString();
            Escuela esc = new Escuela();
            esc.Nombre_escuela = dr["NOMBRE_ESCUELA"].ToString();
            est.escuela = esc;
            est.sede = sede;
            usuario.Establecimiento = est;
            return usuario;


        }
    }
}
