using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using ProcesoPractica.controlador;
using ProcesoPractica.DAO;
using ProcesoPractica.entidades;
using ProcesoPractica.BD;
using Oracle.ManagedDataAccess.Client;
using Oracle.ManagedDataAccess.Types;

namespace ProcesoPractica
{
    public partial class Login : Form
    {
        public String idioma = "es-chile";
        public Login()
        {
            InitializeComponent();
            cambiarLenguaje(idioma);
            cbo_lang.SelectedIndex = 0;
            
        }

        private void Login_Load(object sender, EventArgs e)
        {
          
           
        }

        private void cbo_lang_SelectedIndexChanged(object sender, EventArgs e)
        {
            String lenguaje = cbo_lang.SelectedItem.ToString().ToLower();
            cambiarLenguaje(lenguaje);
        }

        public void cambiarLenguaje(String lang) {

            lbl_user.Text = Builder.Leer(lang, "lbl_user");
            lbl_pass.Text = Builder.Leer(lang, "lbl_pass");
            btn_login.Text = Builder.Leer(lang, "btn_login");
            btn_salir.Text = Builder.Leer(lang,"btn_salir");
        }

        private void btn_salir_Click(object sender, EventArgs e)
        {
            

            idioma = cbo_lang.SelectedItem.ToString().ToLower();
            String mensaje = Builder.Leer(idioma, "msg_salir");
            DialogResult resultado = MessageBox.Show(mensaje, "Mensaje", MessageBoxButtons.YesNo, MessageBoxIcon.Question);
            if (resultado == DialogResult.Yes)
            {
                this.Close();
            }
           
        }

        private void btn_login_Click(object sender, EventArgs e)
        {
            Usuario user = new Usuario();
            user.Cuenta_usuario = txt_user.Text;
            user.Contrasena = txt_pass.Text;

            Usuario usuario=DAOUsuario.sqlSelectLogin(user);
            if (usuario!=null)
            {
                Main main = new Main();
                main.Uss = usuario;

                main.Text = usuario.Establecimiento.escuela.Nombre_escuela;
                main.Show();
                this.Hide();
            }
            else
            {

                MessageBox.Show("La clave o contraseña es incorrecta!", "Acceso denegado", MessageBoxButtons.OK, MessageBoxIcon.Stop);
            }
            
        }

        private void txt_pass_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (e.KeyChar.Equals(Convert.ToChar(13)))
            {
                btn_login_Click(sender, e);
            }
        }

       

      
       
    }
}
