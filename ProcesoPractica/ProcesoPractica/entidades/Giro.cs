using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Giro
    {
        private int _id_giro;
        private String _nombre_giro;

        public Giro() { }

        #region "accesadores y mutadores" 

        public String Nombre_giro
        {
            get { return _nombre_giro; }
            set { _nombre_giro = value; }
        }

        public int Id_giro
        {
            get { return _id_giro; }
            set { _id_giro = value; }
        }
        #endregion
    }
}
