using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProcesoPractica.entidades
{
    public class Localizacion
    {
        private int _idLocalizacion;
        private String _latitud;
        private String _longitud;

        public Localizacion() { }
        public Localizacion(String lat,String lon) {
            this.Latitud = lat; this.Longitud = lon;
         }
        #region accesadores y mutadores
        public String Longitud
        {
            get { return _longitud; }
            set { _longitud = value; }
        }

        public String Latitud
        {
            get { return _latitud; }
            set { _latitud = value; }
        }

        public int IdLocalizacion
        {
            get { return _idLocalizacion; }
            set { _idLocalizacion = value; }
        }
        #endregion
    }
}
