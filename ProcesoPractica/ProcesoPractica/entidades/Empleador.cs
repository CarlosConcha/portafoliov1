using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Empleador
    {
        private int _id_empleador;
        private String _nombre_empleador;
        private int _rut;
        private int _cod_ver;
        private String _cargo;
        private String _correo;
        private String _telefono;
        private CentroPractica _centro_prac;

        public Empleador() { }

        #region "accesadores y mutadores"

        internal CentroPractica Centro_prac
        {
            get { return _centro_prac; }
            set { _centro_prac = value; }
        }

        public String Telefono
        {
            get { return _telefono; }
            set { _telefono = value; }
        }

        public String Correo
        {
            get { return _correo; }
            set { _correo = value; }
        }

        public String Cargo
        {
            get { return _cargo; }
            set { _cargo = value; }
        }

        public int Cod_ver
        {
            get { return _cod_ver; }
            set { _cod_ver = value; }
        }


        public int Rut
        {
            get { return _rut; }
            set { _rut = value; }
        }

        public String Nombre_empleador
        {
            get { return _nombre_empleador; }
            set { _nombre_empleador = value; }
        }
        

        public int Id_empleador
        {
            get { return _id_empleador; }
            set { _id_empleador = value; }
        }
        #endregion
    }
}
