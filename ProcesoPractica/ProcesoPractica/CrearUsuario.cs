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

namespace ProcesoPractica
{
    public partial class CrearUsuario : Form
    {
        
        public CrearUsuario()
        {
            InitializeComponent();
        }

        private void CrearUsuario_Load(object sender, EventArgs e)
        {
            this.cargarRoles();
            this.cargarSedes();
            this.cargarEscuela(int.Parse(cbo_sede.SelectedValue.ToString()));
        }
        public void cambiarLenguaje(String lang)
        {

            tabPage1.Text = Builder.Leer(lang, "tabPage1");
            tabPage2.Text = Builder.Leer(lang, "tabPage2");
            
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void btn_agregar_Click(object sender, EventArgs e)
        {
            String nombre = txt_nombre.Text;
            String rut = txt_rut.Text;
            String codver = txt_codver.Text;
            String username = txt_username.Text;
            String pass = txt_password.Text;
            int roles = int.Parse(cbo_rol.SelectedValue.ToString());
            String correo = txt_correo.Text;
            Usuario user = new Usuario();
            user.Id_usuario = 4;
            user.Nombre_usuario = nombre;
            user.Rut = int.Parse(rut);
            user.Codver = codver;
            user.Cuenta_usuario = username;
            user.Contrasena = pass;
            user.Role = new Roles(roles);
            user.Correo = txt_correo.Text;
            Establecimiento stbto = new Establecimiento();
            stbto.Id_establecimiento = int.Parse(cbo_escuela.SelectedValue.ToString());
            user.Establecimiento = stbto;
            DAOUsuario.sqlInsertar(user);
        }
        public void cargarRoles() {
            cbo_rol.DataSource = DAORoles.sqlSelectAll();
            cbo_rol.DisplayMember = "NOMBRE_ROL";
            cbo_rol.ValueMember = "ID_ROL";
            
        }
        public void cargarSedes()
        {
            cbo_sede.DataSource = DAOSede.sqlSelectAll();
            cbo_sede.DisplayMember = "NOMBRE_SEDE";
            cbo_sede.ValueMember = "ID_SEDE";

        }
        public void cargarEscuela(int id)
        {
            
                cbo_escuela.DataSource = DAOEscuela.sqlSelectEsc(id);
                cbo_escuela.DisplayMember = "NOMBRE_ESCUELA";
                cbo_escuela.ValueMember = "ID_ESTABLECIMIENTO";
                if (cbo_escuela.Items.Count == 0)
                {
                    throw new ArgumentException("No se encontraron escuelas");
                }
            
        }

        private void label9_Click(object sender, EventArgs e)
        {

        }

        private void cbo_sede_SelectedIndexChanged(object sender, EventArgs e)
        {
            try
            {
                if (cbo_escuela.Items.Count >= 1) { //ejecuta el evento si hay 1 o mas items en cbo_escuela
                    String result = cbo_sede.SelectedValue.ToString();
                    cargarEscuela(int.Parse(result));

                }
               
                
            }
            catch (Exception err) {
                MessageBox.Show("Error al seleccionar una sede y cargar las escuelas");
            }
        }
     
    }
}
