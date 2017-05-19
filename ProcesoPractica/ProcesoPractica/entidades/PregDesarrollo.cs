using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class PregDesarrollo
    {
        private int _id_pregunta;
        private String _pregunta;
        private DateTime _fecha;
        private int _puntaje;
        private Evaluacion _evaluacion_preg;

        public PregDesarrollo() { }
        #region "accesadores y mutadores"

        internal Evaluacion Evaluacion_preg
        {
            get { return _evaluacion_preg; }
            set { _evaluacion_preg = value; }
        }

        public int Puntaje
        {
            get { return _puntaje; }
            set { _puntaje = value; }
        }

        public DateTime Fecha
        {
            get { return _fecha; }
            set { _fecha = value; }
        }

        public String Pregunta
        {
            get { return _pregunta; }
            set { _pregunta = value; }
        }

        public int Id_pregunta
        {
            get { return _id_pregunta; }
            set { _id_pregunta = value; }
        }
        #endregion
    }
}
