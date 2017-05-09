using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using ProcesoPractica.DAO;
using ProcesoPractica.entidades;

namespace ProcesoPractica
{
    public partial class EditarPracticante : Form
    {
        private String _id;
        private String _idProf;

       
        #region "accesadores mutadores"
        public String IdProf
        {
            get { return _idProf; }
            set { _idProf = value; }
        }
        public String Id
        {
            get { return _id; }
            set { _id = value; }
        }
        #endregion
        public EditarPracticante()
        {
            InitializeComponent();
        }

        private void EditarPracticante_Load(object sender, EventArgs e)
        {
            cargarDatos();
            cargarSedes();
            cargarEscuela(int.Parse(cbo_sede.SelectedValue.ToString()));
            cargarCarreras(int.Parse(cbo_escuela.SelectedValue.ToString()));
            desabilitarCampos();
        }

        public void cargarDatos() {
            Practicante practicante = DAOPracticante.sqlSelectId(this.Id);
            txt_nombre.Text = practicante.Nombre_usuario;
            txt_correo.Text = practicante.Correo;
            txt_rut.Text = practicante.Rut.ToString();
            txt_telefono.Text = practicante.Telefono;
        }
        public void cargarSedes()
        {
            Practicante practicante = DAOPracticante.sqlSelectId(this.Id);
            cbo_sede.DataSource = DAOSede.sqlSelectAll();
            cbo_sede.DisplayMember = "NOMBRE_SEDE";
            cbo_sede.ValueMember = "ID_SEDE";
            cbo_sede.SelectedValue = practicante.Establecimiento_prac.sede.Id_sede.ToString();
        }
        public void cargarEscuela(int id)
        {
            Practicante practicante = DAOPracticante.sqlSelectId(this.Id);
            cbo_escuela.DataSource = DAOEscuela.sqlSelectEsc(id);
            cbo_escuela.DisplayMember = "NOMBRE_ESCUELA";
            cbo_escuela.ValueMember = "ID_ESCUELA";
            if (cbo_escuela.Items.Count == 0)
            {
                throw new ArgumentException("No se encontraron escuelas");
            }
            cbo_escuela.SelectedValue = practicante.Establecimiento_prac.escuela.Id_escuela.ToString();
        }
        public void cargarCarreras(int id) {
            Practicante practicante = DAOPracticante.sqlSelectId(this.Id);
            cbo_carrera.DataSource = DAOCarrera.sqlSelectAll(id);
            cbo_carrera.DisplayMember = "NOMBRE_CARRERA";
            cbo_carrera.ValueMember = "ID_CARRERA";
            cbo_carrera.SelectedValue = practicante.Carrera_prac.Id_carrera.ToString();
            
        }

        private void btn_modificar_Click(object sender, EventArgs e)
        {
            if (chk_edicion.Checked) {
                if (rdb_automatico.Checked) {
                    asignarProfesorAut();
                }
                if (rdb_manual.Checked) {
                    FrAsignarProfesor prof = new FrAsignarProfesor();
                    prof.Visible = true;
                }
                int sede = int.Parse(cbo_sede.SelectedValue.ToString());
                int escuela = int.Parse(cbo_escuela.SelectedValue.ToString());
                int getIdEst = DAOEstablecimiento.sqlSelectId(sede,escuela);
                if (getIdEst != -1)
                {
                    MessageBox.Show("ok");
                }
                else {
                    MessageBox.Show("No existe la escuela seleccionada en la sede");
                }
            }
            if (!chk_edicion.Checked) {
                if (rdb_automatico.Checked)
                {
                    asignarProfesorAut();
                }
                if (rdb_manual.Checked)
                {
                    FrAsignarProfesor prof = new FrAsignarProfesor();
                    prof.Visible = true;
                }
            }
            
        }
        public void asignarProfesorAut() {
            Practicante prac = new Practicante();
            prac.Id_practicante = int.Parse(Id);
            DAOProfesor.sqlAsignarProfesor(prac);
        }

        private void chk_edicion_CheckedChanged(object sender, EventArgs e)
        {
            if (chk_edicion.Checked) {
                habilitarCampos();
            }
            if (!chk_edicion.Checked) {
                desabilitarCampos();
            }
        }
        public void desabilitarCampos() {
            txt_nombre.Enabled = false;
            txt_rut.Enabled = false;
            txt_correo.Enabled = false;
            txt_telefono.Enabled = false;
            cbo_carrera.Enabled = false;
            cbo_escuela.Enabled = false;
            cbo_sede.Enabled = false;
        }
        public void habilitarCampos() {

            txt_nombre.Enabled = true;
            txt_rut.Enabled = true;
            txt_correo.Enabled = true;
            txt_telefono.Enabled = true;
            cbo_carrera.Enabled = true;
            cbo_escuela.Enabled = true;
            cbo_sede.Enabled = true;
        }

        private void cbo_sede_SelectedIndexChanged(object sender, EventArgs e)
        {
            try
            {
                int id = int.Parse(cbo_sede.SelectedValue.ToString());
                cargarEscuela(id);
            }catch(Exception error){}
        }

        
    }
}
