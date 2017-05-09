using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using Oracle.DataAccess.Client;
namespace ProcesoPractica
{
    public partial class wea : Form
    {
        String conex = "User Id=portafolio;Password=portafolio;Data Source=orcl";
        
        public wea()
        {
            InitializeComponent();
            
        }
        
        
        private void button1_Click(object sender, EventArgs e)
        {
            OracleConnection conn = new OracleConnection(conex);
            conn.Open();
            OracleDataAdapter dt = new OracleDataAdapter("Select * from USUARIO", conn);
            DataTable table = new DataTable();
            dt.Fill(table);
            dataGridView1.DataSource = table;
            conn.Close();
        }
    }
}
