using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;

namespace ProcesoPractica.DAO
{
    class DAORoles
    {
        public static DataTable sqlSelectAll()
        {
            String sql = string.Format("select id_rol,concat(nombre_rol,concat(' (',PRIVILEGIO)) || ')' as NOMBRE_ROL  from roles");
            return BD.BD.getInstance().sqlSelectTodos(sql);

        }
    }
}
