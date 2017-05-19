namespace ProcesoPractica
{
    partial class EditarPracticante
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.txt_nombre = new System.Windows.Forms.TextBox();
            this.txt_rut = new System.Windows.Forms.TextBox();
            this.txt_correo = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.txt_telefono = new System.Windows.Forms.TextBox();
            this.cbo_carrera = new System.Windows.Forms.ComboBox();
            this.cbo_sede = new System.Windows.Forms.ComboBox();
            this.cbo_escuela = new System.Windows.Forms.ComboBox();
            this.btn_modificar = new System.Windows.Forms.Button();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.rdb_manual = new System.Windows.Forms.RadioButton();
            this.rdb_automatico = new System.Windows.Forms.RadioButton();
            this.chk_edicion = new System.Windows.Forms.CheckBox();
            this.SuspendLayout();
            // 
            // txt_nombre
            // 
            this.txt_nombre.Location = new System.Drawing.Point(86, 51);
            this.txt_nombre.Name = "txt_nombre";
            this.txt_nombre.Size = new System.Drawing.Size(131, 20);
            this.txt_nombre.TabIndex = 0;
            // 
            // txt_rut
            // 
            this.txt_rut.Location = new System.Drawing.Point(86, 91);
            this.txt_rut.Name = "txt_rut";
            this.txt_rut.Size = new System.Drawing.Size(131, 20);
            this.txt_rut.TabIndex = 1;
            // 
            // txt_correo
            // 
            this.txt_correo.Location = new System.Drawing.Point(86, 136);
            this.txt_correo.Name = "txt_correo";
            this.txt_correo.Size = new System.Drawing.Size(131, 20);
            this.txt_correo.TabIndex = 2;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(42, 57);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(42, 13);
            this.label1.TabIndex = 3;
            this.label1.Text = "nombre";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(45, 97);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(30, 13);
            this.label2.TabIndex = 4;
            this.label2.Text = "RUT";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(45, 142);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(37, 13);
            this.label3.TabIndex = 5;
            this.label3.Text = "correo";
            // 
            // txt_telefono
            // 
            this.txt_telefono.Location = new System.Drawing.Point(86, 178);
            this.txt_telefono.Name = "txt_telefono";
            this.txt_telefono.Size = new System.Drawing.Size(131, 20);
            this.txt_telefono.TabIndex = 6;
            // 
            // cbo_carrera
            // 
            this.cbo_carrera.FormattingEnabled = true;
            this.cbo_carrera.Location = new System.Drawing.Point(86, 296);
            this.cbo_carrera.Name = "cbo_carrera";
            this.cbo_carrera.Size = new System.Drawing.Size(131, 21);
            this.cbo_carrera.TabIndex = 7;
            // 
            // cbo_sede
            // 
            this.cbo_sede.FormattingEnabled = true;
            this.cbo_sede.Location = new System.Drawing.Point(86, 216);
            this.cbo_sede.Name = "cbo_sede";
            this.cbo_sede.Size = new System.Drawing.Size(131, 21);
            this.cbo_sede.TabIndex = 8;
            this.cbo_sede.SelectedIndexChanged += new System.EventHandler(this.cbo_sede_SelectedIndexChanged);
            // 
            // cbo_escuela
            // 
            this.cbo_escuela.FormattingEnabled = true;
            this.cbo_escuela.Location = new System.Drawing.Point(86, 259);
            this.cbo_escuela.Name = "cbo_escuela";
            this.cbo_escuela.Size = new System.Drawing.Size(131, 21);
            this.cbo_escuela.TabIndex = 9;
            // 
            // btn_modificar
            // 
            this.btn_modificar.Location = new System.Drawing.Point(25, 403);
            this.btn_modificar.Name = "btn_modificar";
            this.btn_modificar.Size = new System.Drawing.Size(131, 52);
            this.btn_modificar.TabIndex = 10;
            this.btn_modificar.Text = "Enviar";
            this.btn_modificar.UseVisualStyleBackColor = true;
            this.btn_modificar.Click += new System.EventHandler(this.btn_modificar_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(13, 355);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(71, 13);
            this.label4.TabIndex = 11;
            this.label4.Text = "Asigar prfesor";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(39, 181);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(45, 13);
            this.label5.TabIndex = 12;
            this.label5.Text = "telefono";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(40, 299);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(40, 13);
            this.label6.TabIndex = 13;
            this.label6.Text = "carrera";
            // 
            // rdb_manual
            // 
            this.rdb_manual.AutoSize = true;
            this.rdb_manual.Location = new System.Drawing.Point(104, 355);
            this.rdb_manual.Name = "rdb_manual";
            this.rdb_manual.Size = new System.Drawing.Size(60, 17);
            this.rdb_manual.TabIndex = 14;
            this.rdb_manual.Text = "Manual";
            this.rdb_manual.UseVisualStyleBackColor = true;
            // 
            // rdb_automatico
            // 
            this.rdb_automatico.AutoSize = true;
            this.rdb_automatico.Checked = true;
            this.rdb_automatico.Location = new System.Drawing.Point(171, 355);
            this.rdb_automatico.Name = "rdb_automatico";
            this.rdb_automatico.Size = new System.Drawing.Size(78, 17);
            this.rdb_automatico.TabIndex = 15;
            this.rdb_automatico.TabStop = true;
            this.rdb_automatico.Text = "Automatico";
            this.rdb_automatico.UseVisualStyleBackColor = true;
            // 
            // chk_edicion
            // 
            this.chk_edicion.AutoSize = true;
            this.chk_edicion.Location = new System.Drawing.Point(104, 378);
            this.chk_edicion.Name = "chk_edicion";
            this.chk_edicion.Size = new System.Drawing.Size(102, 17);
            this.chk_edicion.TabIndex = 17;
            this.chk_edicion.Text = "Habilitar Edicion";
            this.chk_edicion.UseVisualStyleBackColor = true;
            this.chk_edicion.CheckedChanged += new System.EventHandler(this.chk_edicion_CheckedChanged);
            // 
            // EditarPracticante
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(365, 467);
            this.Controls.Add(this.chk_edicion);
            this.Controls.Add(this.rdb_automatico);
            this.Controls.Add(this.rdb_manual);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.btn_modificar);
            this.Controls.Add(this.cbo_escuela);
            this.Controls.Add(this.cbo_sede);
            this.Controls.Add(this.cbo_carrera);
            this.Controls.Add(this.txt_telefono);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txt_correo);
            this.Controls.Add(this.txt_rut);
            this.Controls.Add(this.txt_nombre);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedToolWindow;
            this.Name = "EditarPracticante";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "EditarPracticante";
            this.Load += new System.EventHandler(this.EditarPracticante_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        public System.Windows.Forms.TextBox txt_nombre;
        public System.Windows.Forms.TextBox txt_rut;
        public System.Windows.Forms.TextBox txt_correo;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txt_telefono;
        private System.Windows.Forms.ComboBox cbo_carrera;
        private System.Windows.Forms.ComboBox cbo_sede;
        private System.Windows.Forms.ComboBox cbo_escuela;
        private System.Windows.Forms.Button btn_modificar;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.RadioButton rdb_manual;
        private System.Windows.Forms.RadioButton rdb_automatico;
        private System.Windows.Forms.CheckBox chk_edicion;
    }
}