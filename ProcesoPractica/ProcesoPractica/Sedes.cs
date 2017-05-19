using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using GMap.NET;
using GMap.NET.MapProviders;
using GMap.NET.WindowsForms;
using GMap.NET.WindowsForms.Markers;
using ProcesoPractica.entidades;
using ProcesoPractica.DAO;

namespace ProcesoPractica
{
    public partial class Sedes : Form
    {
        PointLatLng ultimopunto;
        public Sedes()
        {
            InitializeComponent();
        }

        private void Sedes_Load(object sender, EventArgs e)
        {
            cargarMapa();
            this.cargarMarkas();
            
        }
        public void cargarMapa() {
            //gmap_sedes.DragButton = MouseButtons.Left;
            
            gmap_sedes.CanDragMap = true;
            gmap_sedes.MapProvider = GMapProviders.GoogleMap;
            gmap_sedes.SetPositionByKeywords("Santiago, Chile");
            gmap_sedes.MinZoom = 3;
            gmap_sedes.MaxZoom = 17;
            gmap_sedes.Zoom = 10;
            gmap_sedes.ShowCenter = false;
            gmap_sedes.Manager.Mode = AccessMode.ServerAndCache;
         
        }
        public void cargarMarkas() {
            foreach (Localizacion temp in DAOLocalizacion.sqlSelectLoc())
            {
                GMapOverlay overlay = new GMapOverlay("markers");
                double lat = double.Parse(temp.Latitud);
                double lon = double.Parse(temp.Longitud);
                GMarkerGoogle marker = new GMarkerGoogle(new PointLatLng(lat, lon), GMarkerGoogleType.arrow);
                gmap_sedes.Overlays.Add(overlay);
                marker.ToolTipText = getReverseGeoCod(lat,lon);
                overlay.Markers.Add(marker);
            }
        }
       

        private void gmap_sedes_DoubleClick(object sender, EventArgs e)
        {
            GMapControl gm = (GMapControl)sender;
            MouseEventArgs hj = (MouseEventArgs)e;
            PointLatLng plg = gm.FromLocalToLatLng(hj.X, hj.Y);
            ultimopunto = plg;
            GMapOverlay markersOverlay = new GMapOverlay("markers");
            GMarkerGoogle marker = new GMarkerGoogle(ultimopunto,GMarkerGoogleType.red_dot);
            gmap_sedes.Overlays.Clear();
            gmap_sedes.Overlays.Add(markersOverlay);  
            marker.ToolTipText = getReverseGeoCod(ultimopunto.Lat,ultimopunto.Lng);
            markersOverlay.Markers.Clear();
            this.cargarMarkas();
            markersOverlay.Markers.Add(marker);   
        }

        private void btn_crearsede_Click(object sender, EventArgs e)
        {
            try
            {
                Sede sede = new Sede();
                Localizacion loc = new Localizacion();
                loc.Latitud = ultimopunto.Lat.ToString();
                loc.Longitud = ultimopunto.Lng.ToString();
                sede.Nombre_sede = txt_sede.Text;
                sede.Locacion = loc;
                if (!ultimopunto.IsEmpty)
                {
                    if (txt_sede.Text.Length > 7)
                    {
                        DAOLocalizacion.sqlInsertar(loc);
                        loc.IdLocalizacion = DAOLocalizacion.sqlGetid(ultimopunto.Lat, ultimopunto.Lng);
                        DAOSede.sqlInsertar(sede);
                        MessageBox.Show("Se Agrego una nueva Sede", "Aviso", MessageBoxButtons.OK, MessageBoxIcon.Information);
                       
                    }
                    else {
                        MessageBox.Show("Escriba el nombre de la Sede minimo 7 caracteres","Alerta",MessageBoxButtons.OK,MessageBoxIcon.Exclamation);
                    }
                    
                }
                else {
                    MessageBox.Show("No Ha seleccionado un lugar","Alerta",MessageBoxButtons.OK,MessageBoxIcon.Exclamation);
                }
            }
            catch (Exception err) {
                MessageBox.Show("ha ocurrido un Error","Error",MessageBoxButtons.OK,MessageBoxIcon.Error);
            }
        }

        public String getReverseGeoCod(double lat,double lng) {
            GeoCoderStatusCode status;
            var pos = GMapProviders.GoogleMap.GetPlacemark(new PointLatLng(lat,lng), out status);
            String direccion = pos.Value.Address;
            return direccion;
        }

        
    }
}
