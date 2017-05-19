namespace ProcesoPractica
{
    partial class Sedes
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
            this.gmap_sedes = new GMap.NET.WindowsForms.GMapControl();
            this.pn_mapa = new System.Windows.Forms.Panel();
            this.label1 = new System.Windows.Forms.Label();
            this.txt_sede = new System.Windows.Forms.TextBox();
            this.btn_crearsede = new System.Windows.Forms.Button();
            this.tableLayoutPanel1 = new System.Windows.Forms.TableLayoutPanel();
            this.panel1 = new System.Windows.Forms.Panel();
            this.panel4 = new System.Windows.Forms.Panel();
            this.panel3 = new System.Windows.Forms.Panel();
            this.panel2 = new System.Windows.Forms.Panel();
            this.pn_mapa.SuspendLayout();
            this.tableLayoutPanel1.SuspendLayout();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // gmap_sedes
            // 
            this.gmap_sedes.Anchor = ((System.Windows.Forms.AnchorStyles)((((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom)
                        | System.Windows.Forms.AnchorStyles.Left)
                        | System.Windows.Forms.AnchorStyles.Right)));
            this.gmap_sedes.Bearing = 0F;
            this.gmap_sedes.CanDragMap = true;
            this.gmap_sedes.EmptyTileColor = System.Drawing.Color.Navy;
            this.gmap_sedes.GrayScaleMode = false;
            this.gmap_sedes.HelperLineOption = GMap.NET.WindowsForms.HelperLineOptions.DontShow;
            this.gmap_sedes.LevelsKeepInMemmory = 5;
            this.gmap_sedes.Location = new System.Drawing.Point(8, 8);
            this.gmap_sedes.MarkersEnabled = true;
            this.gmap_sedes.MaxZoom = 2;
            this.gmap_sedes.MinZoom = 2;
            this.gmap_sedes.MouseWheelZoomType = GMap.NET.MouseWheelZoomType.MousePositionAndCenter;
            this.gmap_sedes.Name = "gmap_sedes";
            this.gmap_sedes.NegativeMode = false;
            this.gmap_sedes.PolygonsEnabled = true;
            this.gmap_sedes.RetryLoadTile = 0;
            this.gmap_sedes.RoutesEnabled = true;
            this.gmap_sedes.ScaleMode = GMap.NET.WindowsForms.ScaleModes.Integer;
            this.gmap_sedes.SelectedAreaFillColor = System.Drawing.Color.FromArgb(((int)(((byte)(33)))), ((int)(((byte)(65)))), ((int)(((byte)(105)))), ((int)(((byte)(225)))));
            this.gmap_sedes.ShowTileGridLines = false;
            this.gmap_sedes.Size = new System.Drawing.Size(679, 412);
            this.gmap_sedes.TabIndex = 0;
            this.gmap_sedes.Zoom = 0D;
            this.gmap_sedes.DoubleClick += new System.EventHandler(this.gmap_sedes_DoubleClick);
            // 
            // pn_mapa
            // 
            this.pn_mapa.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(45)))), ((int)(((byte)(87)))));
            this.pn_mapa.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.pn_mapa.Controls.Add(this.gmap_sedes);
            this.pn_mapa.Cursor = System.Windows.Forms.Cursors.Cross;
            this.pn_mapa.Dock = System.Windows.Forms.DockStyle.Left;
            this.pn_mapa.Location = new System.Drawing.Point(0, 0);
            this.pn_mapa.Margin = new System.Windows.Forms.Padding(5);
            this.pn_mapa.Name = "pn_mapa";
            this.pn_mapa.Padding = new System.Windows.Forms.Padding(5);
            this.pn_mapa.Size = new System.Drawing.Size(697, 430);
            this.pn_mapa.TabIndex = 1;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.label1.Location = new System.Drawing.Point(3, 111);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(356, 13);
            this.label1.TabIndex = 2;
            this.label1.Text = "Nombre_sede";
            // 
            // txt_sede
            // 
            this.txt_sede.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txt_sede.Cursor = System.Windows.Forms.Cursors.IBeam;
            this.txt_sede.Dock = System.Windows.Forms.DockStyle.Fill;
            this.txt_sede.Font = new System.Drawing.Font("Arial Narrow", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txt_sede.ForeColor = System.Drawing.SystemColors.WindowFrame;
            this.txt_sede.Location = new System.Drawing.Point(3, 127);
            this.txt_sede.Name = "txt_sede";
            this.txt_sede.Size = new System.Drawing.Size(356, 26);
            this.txt_sede.TabIndex = 1;
            this.txt_sede.TextAlign = System.Windows.Forms.HorizontalAlignment.Center;
            // 
            // btn_crearsede
            // 
            this.btn_crearsede.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(45)))), ((int)(((byte)(87)))));
            this.btn_crearsede.Dock = System.Windows.Forms.DockStyle.Fill;
            this.btn_crearsede.FlatAppearance.BorderSize = 0;
            this.btn_crearsede.FlatAppearance.MouseDownBackColor = System.Drawing.Color.FromArgb(((int)(((byte)(253)))), ((int)(((byte)(186)))), ((int)(((byte)(49)))));
            this.btn_crearsede.FlatAppearance.MouseOverBackColor = System.Drawing.Color.FromArgb(((int)(((byte)(253)))), ((int)(((byte)(186)))), ((int)(((byte)(49)))));
            this.btn_crearsede.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_crearsede.Font = new System.Drawing.Font("Arial Narrow", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_crearsede.ForeColor = System.Drawing.SystemColors.Control;
            this.btn_crearsede.Location = new System.Drawing.Point(3, 156);
            this.btn_crearsede.Name = "btn_crearsede";
            this.btn_crearsede.Size = new System.Drawing.Size(356, 45);
            this.btn_crearsede.TabIndex = 4;
            this.btn_crearsede.Text = "Agregar";
            this.btn_crearsede.UseVisualStyleBackColor = false;
            this.btn_crearsede.Click += new System.EventHandler(this.btn_crearsede_Click);
            // 
            // tableLayoutPanel1
            // 
            this.tableLayoutPanel1.ColumnCount = 1;
            this.tableLayoutPanel1.ColumnStyles.Add(new System.Windows.Forms.ColumnStyle(System.Windows.Forms.SizeType.Percent, 50F));
            this.tableLayoutPanel1.Controls.Add(this.txt_sede, 0, 0);
            this.tableLayoutPanel1.Controls.Add(this.label1, 0, 0);
            this.tableLayoutPanel1.Controls.Add(this.btn_crearsede, 0, 2);
            this.tableLayoutPanel1.Location = new System.Drawing.Point(33, 120);
            this.tableLayoutPanel1.Name = "tableLayoutPanel1";
            this.tableLayoutPanel1.RowCount = 3;
            this.tableLayoutPanel1.RowStyles.Add(new System.Windows.Forms.RowStyle(System.Windows.Forms.SizeType.Percent, 81.04575F));
            this.tableLayoutPanel1.RowStyles.Add(new System.Windows.Forms.RowStyle(System.Windows.Forms.SizeType.Percent, 18.95425F));
            this.tableLayoutPanel1.RowStyles.Add(new System.Windows.Forms.RowStyle(System.Windows.Forms.SizeType.Absolute, 50F));
            this.tableLayoutPanel1.Size = new System.Drawing.Size(362, 204);
            this.tableLayoutPanel1.TabIndex = 6;
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.panel4);
            this.panel1.Controls.Add(this.panel3);
            this.panel1.Controls.Add(this.panel2);
            this.panel1.Controls.Add(this.tableLayoutPanel1);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Fill;
            this.panel1.Location = new System.Drawing.Point(697, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(407, 430);
            this.panel1.TabIndex = 7;
            // 
            // panel4
            // 
            this.panel4.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.panel4.Location = new System.Drawing.Point(27, 330);
            this.panel4.Name = "panel4";
            this.panel4.Size = new System.Drawing.Size(380, 100);
            this.panel4.TabIndex = 9;
            // 
            // panel3
            // 
            this.panel3.Dock = System.Windows.Forms.DockStyle.Top;
            this.panel3.Location = new System.Drawing.Point(27, 0);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(380, 114);
            this.panel3.TabIndex = 8;
            // 
            // panel2
            // 
            this.panel2.Dock = System.Windows.Forms.DockStyle.Left;
            this.panel2.Location = new System.Drawing.Point(0, 0);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(27, 430);
            this.panel2.TabIndex = 7;
            // 
            // Sedes
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(230)))), ((int)(((byte)(230)))), ((int)(((byte)(230)))));
            this.ClientSize = new System.Drawing.Size(1104, 430);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.pn_mapa);
            this.Name = "Sedes";
            this.Text = "Sedes";
            this.Load += new System.EventHandler(this.Sedes_Load);
            this.pn_mapa.ResumeLayout(false);
            this.tableLayoutPanel1.ResumeLayout(false);
            this.tableLayoutPanel1.PerformLayout();
            this.panel1.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion

        private GMap.NET.WindowsForms.GMapControl gmap_sedes;
        private System.Windows.Forms.Panel pn_mapa;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button btn_crearsede;
        private System.Windows.Forms.TextBox txt_sede;
        private System.Windows.Forms.TableLayoutPanel tableLayoutPanel1;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Panel panel4;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Panel panel2;

    }
}