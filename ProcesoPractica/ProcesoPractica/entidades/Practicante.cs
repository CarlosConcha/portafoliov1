using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    class Practicante
    {
        private int _id_practicante;
        private String _nombre_usuario;
        private int _rut;
        private int _codver;
        private String _cuenta_usuario;
        private String _contrasena;
        private String _correo;
        private ProfesorGuia _profesor;
        private Practica _practica_prac;
        private Empleador _empleador_prac;
        private String _telefono;
        private String _tareas;
        private InformePractica _informe;
        private Establecimiento _establecimiento_prac;
        private Carrera _carrera_prac;

        public Practicante() { }

        #region "accesadores y mutadores"

        internal Establecimiento Establecimiento_prac
        {
            get { return _establecimiento_prac; }
            set { _establecimiento_prac = value; }
        }
        internal Carrera Carrera_prac
        {
            get { return _carrera_prac; }
            set { _carrera_prac = value; }
        }

        internal InformePractica Informe
        {
            get { return _informe; }
            set { _informe = value; }
        }

        public String Tareas
        {
            get { return _tareas; }
            set { _tareas = value; }
        }

        public String Telefono
        {
            get { return _telefono; }
            set { _telefono = value; }
        }

        internal Empleador Empleador_prac
        {
            get { return _empleador_prac; }
            set { _empleador_prac = value; }
        }

        internal Practica Practica_prac
        {
            get { return _practica_prac; }
            set { _practica_prac = value; }
        }

        internal ProfesorGuia Profesor
        {
            get { return _profesor; }
            set { _profesor = value; }
        }
        
        public String Correo
        {
            get { return _correo; }
            set { _correo = value; }
        }

        public String Contrasena
        {
            get { return _contrasena; }
            set { _contrasena = value; }
        }

        public String Cuenta_usuario
        {
            get { return _cuenta_usuario; }
            set { _cuenta_usuario = value; }
        }
        

        public int Codver
        {
            get { return _codver; }
            set { _codver = value; }
        }

        public int Rut
        {
            get { return _rut; }
            set { _rut = value; }
        }

        public String Nombre_usuario
        {
            get { return _nombre_usuario; }
            set { _nombre_usuario = value; }
        }

        public int Id_practicante
        {
            get { return _id_practicante; }
            set { _id_practicante = value; }
        }
        #endregion
    }
}
