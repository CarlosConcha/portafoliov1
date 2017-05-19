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
    public partial class FrPracticantes : Form
    {
        public FrPracticantes()
        {
            InitializeComponent();
        }

        private void FrPracticantes_Load(object sender, EventArgs e)
        {
            this.cargarDataGrid();
        }
        public void cargarDataGrid() {
                  
            dtg_practicantes.DataSource = DAOPracticante.sqlSelectAll();

          
            
        }

        private void dtg_practicantes_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            
        }

        private void dtg_practicantes_CellDoubleClick(object sender, DataGridViewCellEventArgs e)
        {
            String id = dtg_practicantes.Rows[e.RowIndex].Cells["ID_PRACTICANTE"].Value.ToString();
            String nombre = dtg_practicantes.Rows[e.RowIndex].Cells["NOMBRE_USUARIO"].Value.ToString();
            EditarPracticante edit = new EditarPracticante();
            edit.Text = nombre;
            edit.Id = id;
            edit.Visible = true;
        }

       

        
    }
}
