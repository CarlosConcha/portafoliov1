using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Practica
    {
        private int _id_practica;
        private DateTime _fecha_inicio;
        private DateTime _fecha_termino;
        private TipoPractica _tipo_practica;

        public Practica() { }

        #region "accesadores y mutadores" 

        internal TipoPractica Tipo_practica
        {
            get { return _tipo_practica; }
            set { _tipo_practica = value; }
        }

        public DateTime Fecha_termino
        {
            get { return _fecha_termino; }
            set { _fecha_termino = value; }
        }

        public DateTime Fecha_inicio
        {
            get { return _fecha_inicio; }
            set { _fecha_inicio = value; }
        }

        public int Id_practica
        {
            get { return _id_practica; }
            set { _id_practica = value; }
        }
        #endregion
    }
}
