using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class TipoPractica
    {
        private int _id_tipo_prac;
        private String _nombre_prac;
        private int _horas;

        public TipoPractica() { }

        #region "accesadores y mutadores"

        public int Horas
        {
            get { return _horas; }
            set { _horas = value; }
        }

        public String Nombre_prac
        {
            get { return _nombre_prac; }
            set { _nombre_prac = value; }
        }

        public int Id_tipo_prac
        {
            get { return _id_tipo_prac; }
            set { _id_tipo_prac = value; }
        }
        #endregion
    }
}
