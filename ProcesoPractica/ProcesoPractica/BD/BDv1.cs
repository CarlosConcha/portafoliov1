using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Configuration;
using Oracle.ManagedDataAccess.Client;

namespace ProcesoPractica.BD
{
    class BDv1
    {
        String conexionString = ConfigurationManager.ConnectionStrings["conexion"].ConnectionString;
        OracleConnection conn;
        public  BDv1()
        {
            OracleConnection conn = new OracleConnection(conexionString);
            conn.Open();
            System.Windows.Forms.MessageBox.Show("Conexatado");

        }
        public Boolean sqlSelectLogin(String sql)
        {

            OracleCommand cmd = new OracleCommand(sql, conn);
            int result = int.Parse(cmd.ExecuteScalar().ToString());

            if (result == 0)
            {
                return false;
            }
            return true;
        }
    }
}
