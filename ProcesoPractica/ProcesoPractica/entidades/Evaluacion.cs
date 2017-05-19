using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Evaluacion
    {
        private int _id_evaluacion;
        private int _puntaje_total;

        public Evaluacion() { }

        #region "accesadores y mutadores"

        public int Puntaje_total
        {
            get { return _puntaje_total; }
            set { _puntaje_total = value; }
        }

        public int Id_evaluacion
        {
            get { return _id_evaluacion; }
            set { _id_evaluacion = value; }
        }
        #endregion
    }
}
