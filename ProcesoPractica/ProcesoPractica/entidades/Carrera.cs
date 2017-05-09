using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Carrera
    {
        private int _id_carrera;
        private String _nombre_carrera;
        private Escuela _escuela_carrera;

        public Carrera() { }
        #region "accesadores y mutadores"
        public int Id_carrera
        {
            get { return _id_carrera; }
            set { _id_carrera = value; }
        }
        public String Nombre_carrera
        {
            get { return _nombre_carrera; }
            set { _nombre_carrera = value; }
        }
        internal Escuela Escuela_carrera
        {
            get { return _escuela_carrera; }
            set { _escuela_carrera = value; }
        }
        #endregion
    }
}
