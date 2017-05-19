using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class ProfesorGuia
    {
        private int _id_profesor;
        private String _nombre_profesor;
        private int _rut;
        private int _cod_ver;
        private String _cuenta_user;
        private String _password;
        private String _correo;

        public ProfesorGuia() { }

        #region "accesadores y mutadores"

        public String Correo
        {
            get { return _correo; }
            set { _correo = value; }
        }

        public String Password
        {
            get { return _password; }
            set { _password = value; }
        }

        public String Cuenta_user
        {
            get { return _cuenta_user; }
            set { _cuenta_user = value; }
        }
       


        public int Cod_ver
        {
            get { return _cod_ver; }
            set { _cod_ver = value; }
        }

        public int Rut
        {
            get { return _rut; }
            set { _rut = value; }
        }

        public String Nombre_profesor
        {
            get { return _nombre_profesor; }
            set { _nombre_profesor = value; }
        }

        public int Id_profesor
        {
            get { return _id_profesor; }
            set { _id_profesor = value; }
        }
        #endregion
    }
}
