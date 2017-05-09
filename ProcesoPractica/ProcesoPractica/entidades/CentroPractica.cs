using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class CentroPractica
    {
        private int _id_centro;
        private String _direccion;
        private String _nombre_centro;
        private Giro _giro_centroprac;

        public CentroPractica() { }
        #region "accesadores y mutadores"

        internal Giro Giro_centroprac
        {
            get { return _giro_centroprac; }
            set { _giro_centroprac = value; }
        }

        public String Nombre_centro
        {
            get { return _nombre_centro; }
            set { _nombre_centro = value; }
        }

        public String Direccion
        {
            get { return _direccion; }
            set { _direccion = value; }
        }

        public int Id_centro
        {
            get { return _id_centro; }
            set { _id_centro = value; }
        }
        #endregion
    }
}
