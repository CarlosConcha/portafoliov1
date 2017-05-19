using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using System.Configuration;
using Oracle.ManagedDataAccess.Client;
using Oracle.ManagedDataAccess.Types;

namespace ProcesoPractica.BD
{
    class BD
    {
        private static BD bd;
        public OracleConnection conn;

        private BD() {
            conn = new OracleConnection();
            conn.ConnectionString = System.Configuration.ConfigurationManager.ConnectionStrings["conexion"].ConnectionString;
            conn.Open();
        }

        public static BD getInstance() {
            if (bd == null)
            {
                bd = new BD();
            }
            return bd;
        }

        public Boolean sqlEjecutar(String sql) {

            OracleCommand cmd = new OracleCommand(sql,conn);
            int resp = cmd.ExecuteNonQuery();
            
            if (resp == 0)
            {
                return false;
            }
            
            return true;
            
        }
        public Boolean sqlEjecutarProcedure(String sql,object[] parametro)
        {

            OracleCommand cmd = new OracleCommand(sql, conn);
            cmd.CommandType = CommandType.StoredProcedure;

            foreach (var valor in parametro) {
                Type tipo = valor.GetType();
                if(tipo.Equals(typeof(int))){
                    cmd.Parameters.Add("v_practicante", "number").Value = valor;
                }
                if (tipo.Equals(typeof(String)))
                {
                    cmd.Parameters.Add("v_practicante", "varchar2").Value = valor;
                }
            }
            
            int resp = cmd.ExecuteNonQuery();

            if (resp == 0)
            {
                return false;
            }

            return true;

        }
        public DataRow sqlSelectUnico(String sql) {
            DataTable dt = new DataTable();
            OracleCommand cmd = new OracleCommand(sql, conn);
            OracleDataAdapter da = new OracleDataAdapter(cmd);
            da.Fill(dt);
            if (dt.Rows.Count == 0) {
                return null;
            }
            return dt.Rows[0];
        }
        public DataTable sqlSelectTodos(String sql)
        {
            DataTable dt = new DataTable();
            OracleCommand cmd = new OracleCommand(sql, conn);
            OracleDataAdapter da = new OracleDataAdapter(cmd);
            da.Fill(dt);
            return dt;
        }
        public Boolean sqlSelectLogin(String sql)
        {
            
            OracleCommand cmd = new OracleCommand(sql, conn);
            int result = int.Parse(cmd.ExecuteScalar().ToString());
            
            if (result==0)
            {
                return false;
            }
            return true;
        }
        
    }
}
