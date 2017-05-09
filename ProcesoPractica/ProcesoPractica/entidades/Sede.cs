using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Sede
    {
        private int _id_sede;
        private String _nombre_sede;
        private Localizacion _locacion;

      
        public Sede() { }

        #region "accesadoresa y mutadores"
        public int Id_sede
        {
            get { return _id_sede; }
            set { _id_sede = value; }
        }
        public String Nombre_sede
        {
            get { return _nombre_sede; }
            set { _nombre_sede = value; }
        }
        public Localizacion Locacion
        {
            get { return _locacion; }
            set { _locacion = value; }
        }
        #endregion
        
    }
}
