using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Establecimiento
    {
        private int _id_establecimiento;
        private Sede _sede;
        private Escuela _escuela;

        public Establecimiento() { }

        internal Escuela escuela
        {
            get { return _escuela; }
            set { _escuela = value; }
        }

        internal Sede sede
        {
            get { return _sede; }
            set { _sede = value; }
        }

        public int Id_establecimiento
        {
            get { return _id_establecimiento; }
            set { _id_establecimiento = value; }
        }
    }
}
