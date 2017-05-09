using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using ProcesoPractica.controlador;
using Oracle.ManagedDataAccess.Client;
using ProcesoPractica.entidades;

namespace ProcesoPractica
{
    public partial class Main : Form
    {
        public String idioma = "es-chile";
        private Usuario uss = new Usuario();

        public Usuario Uss
        {
            get { return uss; }
            set { uss = value; }
        }
        public Main()
        {
            InitializeComponent();
            cambiarLenguaje(idioma);
            btn_sede.BackColor = Color.FromArgb(250, 175, 58);
            
        }

       private void insertarForm(Form formulario){
            if (this.contenedor.Controls.Count > 0){
                this.contenedor.Controls.RemoveAt(0);    
            }
            formulario.TopLevel = false;
            formulario.FormBorderStyle = FormBorderStyle.None;
            formulario.Dock = DockStyle.Fill;
            this.contenedor.Controls.Add(formulario);
            this.contenedor.Tag = formulario;
            formulario.Show();
          }


      

       private void Main_Load(object sender, EventArgs e)
       {
           lbl_saludo.Text = Uss.Nombre_usuario;
           lbl_rol.Text = Uss.Role.Nombre_rol;
           lbl_privilegio.Text = Uss.Role.privilegios;
           privilegios();
       }

       public void privilegios() {
           int rol=Uss.Role.Id_rol;
           switch (rol) { 
               case 2:
                   btn_sede.Visible = false;
                   btn_carrera.Visible = false;
                   btn_alertas.Visible = false;
                   break;
               case 3:
                   btn_sede.Visible = false;
                   btn_carrera.Visible = false;
                   break;
           }
       
       }



       public void cambiarLenguaje(String lang)
       {

           btn_sede.Text = Builder.Leer(lang, "btn_sede");
           btn_carrera.Text = Builder.Leer(lang, "btn_carrera");
           btn_usuario.Text = Builder.Leer(lang, "btn_usuario");
           btn_practica.Text = Builder.Leer(lang, "btn_practica");
           btn_actas.Text = Builder.Leer(lang, "btn_actas");
           btn_doc_infor.Text = Builder.Leer(lang,"btn_doc");
           btn_alertas.Text = Builder.Leer(lang,"btn_alerta");
           btn_sistema.Text = Builder.Leer(lang,"btn_sistema");
           btn_reporte.Text = Builder.Leer(lang,"btn_reporte");
           lbl_bienvenida.Text = Builder.Leer(lang, "lbl_bienvenida");
           btn_centroprac.Text = Builder.Leer(lang, "btn_centroprac");
       }

       private void btn_sede_Click(object sender, EventArgs e)
       {
           var formulario = Application.OpenForms.OfType<Sedes>().FirstOrDefault();
           Sedes admin = formulario ?? new Sedes();
           insertarForm(admin);
           limpiarColor();
           btn_sede.BackColor = Color.FromArgb(250, 175, 58);
           
       }


       private void button8_Click(object sender, EventArgs e)
       {
           OracleConnection conn = new OracleConnection();
           conn.ConnectionString = System.Configuration.ConfigurationManager.ConnectionStrings["conexion"].ConnectionString;
           conn.Open();
           MessageBox.Show(conn.State.ToString());
           conn.Close();
       }

       private void btn_carrera_Click(object sender, EventArgs e)
       {
           var formulario = Application.OpenForms.OfType<EscuelasCarreras>().FirstOrDefault();
           EscuelasCarreras admin = formulario ?? new EscuelasCarreras();
           insertarForm(admin);
           limpiarColor();
           btn_carrera.BackColor = Color.FromArgb(250, 175, 58);
       }

       public void limpiarColor() {
           btn_actas.BackColor = Color.FromArgb(207, 214, 219);
           btn_carrera.BackColor = Color.FromArgb(207, 214, 219);
           btn_doc_infor.BackColor = Color.FromArgb(207, 214, 219);
           btn_practica.BackColor = Color.FromArgb(207, 214, 219);
           btn_sede.BackColor = Color.FromArgb(207, 214, 219);
           btn_usuario.BackColor = Color.FromArgb(207, 214, 219);
       }

       private void label1_Click(object sender, EventArgs e)
       {

       }

       private void lbl_bienvenida_Click(object sender, EventArgs e)
       {

       }

       private void btn_usuario_Click(object sender, EventArgs e)
       {
           var formulario = Application.OpenForms.OfType<CrearUsuario>().FirstOrDefault();
           CrearUsuario admin = formulario ?? new CrearUsuario();
           admin.cambiarLenguaje(idioma);
           insertarForm(admin);
           limpiarColor();
           btn_usuario.BackColor = Color.FromArgb(250, 175, 58);
           
       }

       private void label1_Click_1(object sender, EventArgs e)
       {

       }

       private void btn_actas_Click(object sender, EventArgs e)
       {
           var formulario = Application.OpenForms.OfType<Acta1>().FirstOrDefault();
           Acta1 admin = formulario ?? new Acta1();
           insertarForm(admin);
           limpiarColor();
           btn_usuario.BackColor = Color.FromArgb(250, 175, 58);

       }

       private void btn_prac_Click(object sender, EventArgs e)
       {
           var formulario = Application.OpenForms.OfType<FrPracticantes>().FirstOrDefault();
           FrPracticantes admin = formulario ?? new FrPracticantes();
           insertarForm(admin);
           limpiarColor();
           btn_usuario.BackColor = Color.FromArgb(250, 175, 58);
       }
    }
}
