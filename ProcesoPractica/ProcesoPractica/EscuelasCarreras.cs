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
    public partial class EscuelasCarreras : Form
    {
        public EscuelasCarreras()
        {
            InitializeComponent();
        }

        private void btn_addEscuela_Click(object sender, EventArgs e)
        {
            if (DAOEscuela.sqlInsertar(new Escuela(txt_escuela.Text)))
            {

                MessageBox.Show("Se agrego la escuela " + txt_escuela.Text, "Confirmación", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else {
                MessageBox.Show("Ocurrio un error y no se agrego la Escuela","ERROR",MessageBoxButtons.OK,MessageBoxIcon.Error);
            }
        }

        private void EscuelasCarreras_Load(object sender, EventArgs e)
        {
            cargarEscuelas();
        }
        public void cargarEscuelas() {
            cbo_escuelas.DataSource = DAOEscuela.sqlSelectTodas();
            cbo_escuelas.ValueMember = "ID_ESCUELA";
            cbo_escuelas.DisplayMember = "NOMBRE_ESCUELA";
        }

        private void btn_addCarrera_Click(object sender, EventArgs e)
        {
            Carrera carrera=new Carrera();
            Escuela esc=new Escuela();
            carrera.Nombre_carrera=txt_carrera.Text;
            esc.Id_escuela=int.Parse(cbo_escuelas.SelectedValue.ToString());
            carrera.Escuela_carrera=esc;
            if (DAOCarrera.sqlInsertar(carrera)) {
                MessageBox.Show("Se agrego la Carrera " + txt_carrera.Text, "Confirmación", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
            {
                MessageBox.Show("Ocurrio un error y no se agrego la Carrera", "ERROR", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
}
