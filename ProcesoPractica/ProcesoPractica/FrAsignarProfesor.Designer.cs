namespace ProcesoPractica
{
    partial class FrAsignarProfesor
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
            this.dtg_profesor = new System.Windows.Forms.DataGridView();
            ((System.ComponentModel.ISupportInitialize)(this.dtg_profesor)).BeginInit();
            this.SuspendLayout();
            // 
            // dtg_profesor
            // 
            this.dtg_profesor.AllowUserToAddRows = false;
            this.dtg_profesor.AllowUserToDeleteRows = false;
            this.dtg_profesor.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dtg_profesor.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dtg_profesor.Location = new System.Drawing.Point(12, 12);
            this.dtg_profesor.MultiSelect = false;
            this.dtg_profesor.Name = "dtg_profesor";
            this.dtg_profesor.ReadOnly = true;
            this.dtg_profesor.RowHeadersVisible = false;
            this.dtg_profesor.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dtg_profesor.Size = new System.Drawing.Size(381, 230);
            this.dtg_profesor.TabIndex = 0;
            this.dtg_profesor.CellDoubleClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dtg_profesor_CellDoubleClick);
            // 
            // FrAsignarProfesor
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(405, 254);
            this.Controls.Add(this.dtg_profesor);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedToolWindow;
            this.Name = "FrAsignarProfesor";
            this.Text = "Asignar Profesor Manual";
            this.Load += new System.EventHandler(this.FrAsignarProfesor_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dtg_profesor)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.DataGridView dtg_profesor;
    }
}