namespace ProcesoPractica
{
    partial class EscuelasCarreras
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
            this.txt_escuela = new System.Windows.Forms.TextBox();
            this.grp_escuela = new System.Windows.Forms.GroupBox();
            this.label1 = new System.Windows.Forms.Label();
            this.btn_addEscuela = new System.Windows.Forms.Button();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.txt_carrera = new System.Windows.Forms.TextBox();
            this.cbo_escuelas = new System.Windows.Forms.ComboBox();
            this.btn_addCarrera = new System.Windows.Forms.Button();
            this.grp_escuela.SuspendLayout();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // txt_escuela
            // 
            this.txt_escuela.Location = new System.Drawing.Point(53, 67);
            this.txt_escuela.Name = "txt_escuela";
            this.txt_escuela.Size = new System.Drawing.Size(251, 20);
            this.txt_escuela.TabIndex = 0;
            // 
            // grp_escuela
            // 
            this.grp_escuela.Controls.Add(this.label1);
            this.grp_escuela.Controls.Add(this.btn_addEscuela);
            this.grp_escuela.Controls.Add(this.txt_escuela);
            this.grp_escuela.Location = new System.Drawing.Point(29, 22);
            this.grp_escuela.Name = "grp_escuela";
            this.grp_escuela.Size = new System.Drawing.Size(380, 171);
            this.grp_escuela.TabIndex = 1;
            this.grp_escuela.TabStop = false;
            this.grp_escuela.Text = "Añadir Escuela";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(53, 48);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(61, 13);
            this.label1.TabIndex = 2;
            this.label1.Text = "lbl_Escuela";
            // 
            // btn_addEscuela
            // 
            this.btn_addEscuela.Location = new System.Drawing.Point(138, 106);
            this.btn_addEscuela.Name = "btn_addEscuela";
            this.btn_addEscuela.Size = new System.Drawing.Size(75, 23);
            this.btn_addEscuela.TabIndex = 1;
            this.btn_addEscuela.Text = "button1";
            this.btn_addEscuela.UseVisualStyleBackColor = true;
            this.btn_addEscuela.Click += new System.EventHandler(this.btn_addEscuela_Click);
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.btn_addCarrera);
            this.groupBox1.Controls.Add(this.cbo_escuelas);
            this.groupBox1.Controls.Add(this.txt_carrera);
            this.groupBox1.Location = new System.Drawing.Point(475, 22);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(338, 171);
            this.groupBox1.TabIndex = 2;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Añadir Carrera";
            // 
            // txt_carrera
            // 
            this.txt_carrera.Location = new System.Drawing.Point(87, 67);
            this.txt_carrera.Name = "txt_carrera";
            this.txt_carrera.Size = new System.Drawing.Size(226, 20);
            this.txt_carrera.TabIndex = 0;
            // 
            // cbo_escuelas
            // 
            this.cbo_escuelas.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.cbo_escuelas.FormattingEnabled = true;
            this.cbo_escuelas.Location = new System.Drawing.Point(87, 94);
            this.cbo_escuelas.Name = "cbo_escuelas";
            this.cbo_escuelas.Size = new System.Drawing.Size(226, 21);
            this.cbo_escuelas.TabIndex = 1;
            // 
            // btn_addCarrera
            // 
            this.btn_addCarrera.Location = new System.Drawing.Point(143, 122);
            this.btn_addCarrera.Name = "btn_addCarrera";
            this.btn_addCarrera.Size = new System.Drawing.Size(75, 23);
            this.btn_addCarrera.TabIndex = 2;
            this.btn_addCarrera.Text = "button1";
            this.btn_addCarrera.UseVisualStyleBackColor = true;
            this.btn_addCarrera.Click += new System.EventHandler(this.btn_addCarrera_Click);
            // 
            // EscuelasCarreras
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1104, 427);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.grp_escuela);
            this.Name = "EscuelasCarreras";
            this.Text = "EscuelasCarreras";
            this.Load += new System.EventHandler(this.EscuelasCarreras_Load);
            this.grp_escuela.ResumeLayout(false);
            this.grp_escuela.PerformLayout();
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.TextBox txt_escuela;
        private System.Windows.Forms.GroupBox grp_escuela;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button btn_addEscuela;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.Button btn_addCarrera;
        private System.Windows.Forms.ComboBox cbo_escuelas;
        private System.Windows.Forms.TextBox txt_carrera;
    }
}