using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    public class Usuario
    {
        private int _id_usuario;
        private String _nombre_usuario;
        private int _rut;
        private String _codver;
        private String _cuenta_usuario;
        private String _contrasena;
        private Roles _roles;
        private String _correo;
        private Establecimiento _establecimiento;
        private Carrera _carrera;
       
        public Usuario() { }
        #region "accesadoresa y mutadores"
        internal Carrera Carrera
        {
            get { return _carrera; }
            set { _carrera = value; }
        }
        internal Establecimiento Establecimiento
        {
            get { return _establecimiento; }
            set { _establecimiento = value; }
        }
        public String Correo
        {
            get { return _correo; }
            set { _correo = value; }
        }
        public int Id_usuario
        {
            get { return _id_usuario; }
            set { _id_usuario = value; }
        }
        public String Nombre_usuario
        {
            get { return _nombre_usuario; }
            set { _nombre_usuario = value; }
        }
        public int Rut
        {
            get { return _rut; }
            set { _rut = value; }
        }
        public String Codver
        {
            get { return _codver; }
            set { _codver = value; }
        }
        public String Cuenta_usuario
        {
            get { return _cuenta_usuario; }
            set { _cuenta_usuario = value; }
        }
        public String Contrasena
        {
            get { return _contrasena; }
            set { _contrasena = value; }
        }
        public Roles Role
        {
            get { return _roles; }
            set { _roles = value; }
        }
        #endregion
    }
}
