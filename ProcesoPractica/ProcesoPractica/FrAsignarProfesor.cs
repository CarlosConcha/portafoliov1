using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using ProcesoPractica.DAO;

namespace ProcesoPractica
{
    public partial class FrAsignarProfesor : Form
    {
        public FrAsignarProfesor()
        {
            InitializeComponent();
        }

        private void FrAsignarProfesor_Load(object sender, EventArgs e)
        {
            cargarProfesores();
        }
        public void cargarProfesores() {
            dtg_profesor.DataSource = DAOProfesor.sqlSelectAll();
            dtg_profesor.Columns[0].Visible = false;
        }

        private void dtg_profesor_CellDoubleClick(object sender, DataGridViewCellEventArgs e)
        {
            String id = dtg_profesor.Rows[e.RowIndex].Cells["ID_PROFESOR"].Value.ToString();
            String nombre = dtg_profesor.Rows[e.RowIndex].Cells["NOMBRE"].Value.ToString();
            int cupos = int.Parse(dtg_profesor.Rows[e.RowIndex].Cells["CUPOS"].Value.ToString());
            int maximo = int.Parse(dtg_profesor.Rows[e.RowIndex].Cells["MAXIMO"].Value.ToString());
            if (cupos <= maximo)
            {
                DialogResult result = MessageBox.Show("Esta asignando al profesor(a) " + nombre, "Mensaje", MessageBoxButtons.YesNo, MessageBoxIcon.Question);
                if (result == DialogResult.Yes)
                {
                    //DAOProfesor asignar profesor manual
                    //mensaje de exito o error
                }
            }
            else {
                MessageBox.Show("El profesor excede la capacidad de practicantes", "No Asignado", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
           
        }
    }
}
