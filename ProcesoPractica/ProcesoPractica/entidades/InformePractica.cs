using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class InformePractica
    {
        private int _id_informe;
        private int _puntaje;
        private String _observacion;
        private DateTime _fecha_entrega;

        public InformePractica() { }

        #region "accesadores y mutadores"

        public DateTime Fecha_entrega
        {
            get { return _fecha_entrega; }
            set { _fecha_entrega = value; }
        }

        public String Observacion
        {
            get { return _observacion; }
            set { _observacion = value; }
        }

        public int Puntaje
        {
            get { return _puntaje; }
            set { _puntaje = value; }
        }

        public int Id_informe
        {
            get { return _id_informe; }
            set { _id_informe = value; }
        }
        #endregion
    }
}
