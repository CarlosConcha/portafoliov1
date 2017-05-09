using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Comuna
    {
        private int _id_comuna;
        private String _nombre_comuna;
        private Sede _sede;
        private Region _region;

        public Comuna() { }
        #region "accesadores y mutadores"
        public int Id_comuna
        {
            get { return _id_comuna; }
            set { _id_comuna = value; }
        }

        public String Nombre_comuna
        {
            get { return _nombre_comuna; }
            set { _nombre_comuna = value; }
        }
        internal Sede Sede_comuna
        {
            get { return _sede; }
            set { _sede = value; }
        }
        internal Region Region_comuna
        {
            get { return _region; }
            set { _region = value; }
        }
        #endregion
    }
}
