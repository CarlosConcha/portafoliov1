using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Escuela
    {
        private int _id_escuela;
        private String _nombre_escuela;

        public Escuela() { }
        public Escuela(String  nombre) {
            Nombre_escuela = nombre;
        }

        public String Nombre_escuela
        {
            get { return _nombre_escuela; }
            set { _nombre_escuela = value; }
        }

        public int Id_escuela
        {
            get { return _id_escuela; }
            set { _id_escuela = value; }
        }
    }
}
