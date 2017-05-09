namespace ProcesoPractica
{
    partial class FrPracticantes
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
            this.dtg_practicantes = new System.Windows.Forms.DataGridView();
            ((System.ComponentModel.ISupportInitialize)(this.dtg_practicantes)).BeginInit();
            this.SuspendLayout();
            // 
            // dtg_practicantes
            // 
            this.dtg_practicantes.AllowUserToAddRows = false;
            this.dtg_practicantes.AllowUserToDeleteRows = false;
            this.dtg_practicantes.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dtg_practicantes.Location = new System.Drawing.Point(51, 135);
            this.dtg_practicantes.Name = "dtg_practicantes";
            this.dtg_practicantes.ReadOnly = true;
            this.dtg_practicantes.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dtg_practicantes.Size = new System.Drawing.Size(977, 205);
            this.dtg_practicantes.TabIndex = 0;
            this.dtg_practicantes.CellDoubleClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dtg_practicantes_CellDoubleClick);
            // 
            // FrPracticantes
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1104, 427);
            this.Controls.Add(this.dtg_practicantes);
            this.Name = "FrPracticantes";
            this.Text = "FrPracticantes";
            this.Load += new System.EventHandler(this.FrPracticantes_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dtg_practicantes)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.DataGridView dtg_practicantes;
    }
}