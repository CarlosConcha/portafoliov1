using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    public class Roles
    {
        private int _id_rol;
        private String _nombre_rol;
        private String _privilegio;

        public Roles() { 
        }
        public Roles(int id)
        {
            Id_rol = id;
        }
        #region "mutadores y accesadores"
        public int Id_rol
        {
            get { return _id_rol; }
            set { _id_rol = value; }
        }
        public String Nombre_rol
        {
            get { return _nombre_rol; }
            set { _nombre_rol = value; }
        }
        public String privilegios
        {
            get { return _privilegio; }
            set { _privilegio = value; }
        }
        #endregion
    }
}
