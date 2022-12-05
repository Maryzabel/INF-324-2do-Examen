using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Drawing.Imaging;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

using System.Data.SqlClient;


namespace WindowsFormsApplication21
{
    public partial class Form1 : Form
    {
        int cR, cG, cB;
       

        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            openFileDialog1.ShowDialog();
            Bitmap bmp = new Bitmap(openFileDialog1.FileName);
            pictureBox1.Image = bmp;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Color c = new Color();
            c = bmp.GetPixel(10,10);
            textBox1.Text = c.R.ToString();
            textBox2.Text = c.G.ToString();
            textBox3.Text = c.B.ToString();
        }

        private void pictureBox1_MouseClick(object sender, MouseEventArgs e)
        {
            /*Bitmap bmp = new Bitmap(pictureBox1.Image);
            Color c = new Color();
            c = bmp.GetPixel(e.X, e.Y);
            textBox1.Text = c.R.ToString();
            textBox2.Text = c.G.ToString();
            textBox3.Text = c.B.ToString();

            cR = c.R;
            cG = c.G;
            cB = c.B;*/
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Color c = new Color();
            int x, y, mR=0, mG=0, mB=0;
            x = e.X; y = e.Y;
            for (int i = x; i < x + 10;i++)
                for (int j = y; j < y + 10; j++)
                {
                    c = bmp.GetPixel(i, j);
                    mR = mR + c.R;
                    mG = mG + c.G;
                    mB = mB + c.B;
                }
            mR = mR / 100;
            mG = mG / 100;
            mB = mB / 100;
            cR = mR;
            cG = mG;
            cB = mB;
            textBox1.Text = cR.ToString();
            textBox2.Text = cG.ToString();
            textBox3.Text = cB.ToString();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    cpoa.SetPixel(i, j, c);
                }
            pictureBox2.Image = cpoa;
        }

        private void openFileDialog1_FileOk(object sender, CancelEventArgs e)
        {

        }

        private void button4_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    cpoa.SetPixel(i, j, Color.FromArgb(c.R, 0, 0));
                }
            pictureBox2.Image = cpoa;
        }

        private void button5_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    cpoa.SetPixel(i, j, Color.FromArgb(0, c.G, 0));
                }
            pictureBox2.Image = cpoa;
        }

        private void button6_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    cpoa.SetPixel(i, j, Color.FromArgb(0, 0, c.B));
                }
            pictureBox2.Image = cpoa;
        }

        private void button7_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    if (((cR - 10) < c.R) && (c.R < (cR + 10)) && ((cG - 10) < c.G) && (c.G < (cG + 10)) && ((cB - 10) < c.B) && (c.B < (cB + 10)))
                        cpoa.SetPixel(i, j, Color.Black);
                    else
                        cpoa.SetPixel(i, j, c);
                }
            pictureBox2.Image = cpoa;
        }

        private void button7_MouseClick(object sender, MouseEventArgs e)
        {

        }

        private void button8_Click(object sender, EventArgs e)
        {
            int meR, meG, meB;
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 0; i < bmp.Width - 10; i += 10)
                for (int j = 0; j < bmp.Height - 10; j += 10)
                {
                    meR = 0;
                    meG = 0;
                    meB = 0;

                    for (int k = i; k < i + 10; k++)
                        for (int l = j; l < j + 10; l++)
                        {
                            c = bmp.GetPixel(k, l);
                            meR = meR + c.R;
                            meG = meG + c.G;
                            meB = meB + c.B;
                        }
                    meR = meR / 100;
                    meG = meG / 100;
                    meB = meB / 100;

                    if (((cR - 10) < meR) && (meR < (cR + 10)) && ((cG - 10) < meG) && (meG < (cG + 10)) && ((cB - 10) < meB) && (meB < (cB + 10)))
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                cpoa.SetPixel(k, l, Color.Black);
                            }

                    else
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                c = bmp.GetPixel(k, l);
                                cpoa.SetPixel(k, l, c);
                            }
                }
            pictureBox2.Image = cpoa;
        }

        private void button9_Click(object sender, EventArgs e)
        {
            
            string nombre = "punto1";
            SqlConnection con = new SqlConnection();
            SqlCommand cmd = new SqlCommand();
            con.ConnectionString = @"server=DESKTOP-STON6PA\SQLEXPRESS;user=usuario324;pwd=123456;database=bdpuntos";
            cmd.CommandText = "insert into puntos(nom,meR,meG,meB) values('" + nombre + "','" + cR + "','" + cG + "','" + cB + "')";
            cmd.CommandType = CommandType.Text;
            cmd.Connection = con;
            con.Open();
            cmd.ExecuteNonQuery();
            con.Close();



        }

        private void button10_Click(object sender, EventArgs e)
        {
            string nombre = "punto2";
            SqlConnection con = new SqlConnection();
            SqlCommand cmd = new SqlCommand();
            con.ConnectionString = @"server=DESKTOP-STON6PA\SQLEXPRESS;user=usuario324;pwd=123456;database=bdpuntos";
            cmd.CommandText = "insert into puntos(nom,meR,meG,meB) values('" + nombre + "','" + cR + "','" + cG + "','" + cB + "')";
            cmd.CommandType = CommandType.Text;
            cmd.Connection = con;
            con.Open();
            cmd.ExecuteNonQuery();
            con.Close();
        }

        private void button11_Click(object sender, EventArgs e)
        {
            string nombre = "punto3";
            SqlConnection con = new SqlConnection();
            SqlCommand cmd = new SqlCommand();
            con.ConnectionString = @"server=DESKTOP-STON6PA\SQLEXPRESS;user=usuario324;pwd=123456;database=bdpuntos";
            cmd.CommandText = "insert into puntos(nom,meR,meG,meB) values('" + nombre + "','" + cR + "','" + cG + "','" + cB + "')";
            cmd.CommandType = CommandType.Text;
            cmd.Connection = con;
            con.Open();
            cmd.ExecuteNonQuery();
            con.Close();
        }

        private void button12_Click(object sender, EventArgs e)
        {

            // recuperamos puntos

            int cR1=0, cG1=0, cB1=0;
            SqlConnection con = new SqlConnection();
            con.ConnectionString = @"server=DESKTOP-STON6PA\SQLEXPRESS;user=usuario324;pwd=123456;database=bdpuntos";

            string query = "select * from puntos";
            SqlCommand comando = new SqlCommand(query, con);
            SqlDataAdapter data = new SqlDataAdapter(comando);
            DataTable tabla = new DataTable();
            data.Fill(tabla);
            dataGridView1.DataSource = tabla;

            cR1 = Convert.ToInt32(dataGridView1.Rows[0].Cells[1].Value);
            cB1 = Convert.ToInt32(dataGridView1.Rows[0].Cells[3].Value);
            cG1 = Convert.ToInt32(dataGridView1.Rows[0].Cells[2].Value);
           
            textBox4.Text = Convert.ToString(cR1);
            textBox5.Text = Convert.ToString(cG1);
            textBox6.Text = Convert.ToString(cB1);


            int meR, meG, meB;

            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 0; i < bmp.Width - 10; i += 10)
                for (int j = 0; j < bmp.Height - 10; j += 10)
                {
                    meR = 0;
                    meG = 0;
                    meB = 0;

                    for (int k = i; k < i + 10; k++)
                        for (int l = j; l < j + 10; l++)
                        {
                            c = bmp.GetPixel(k, l);
                            meR = meR + c.R;
                            meG = meG + c.G;
                            meB = meB + c.B;
                        }
                    meR = meR / 100;
                    meG = meG / 100;
                    meB = meB / 100;

                    if (((cR1 - 10) < meR) && (meR < (cR1 + 10)) && ((cG1 - 10) < meG) && (meG < (cG1 + 10)) && ((cB1 - 10) < meB) && (meB < (cB1 + 10)))
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                cpoa.SetPixel(k, l, Color.Black);
                            }

                    else
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                c = bmp.GetPixel(k, l);
                                cpoa.SetPixel(k, l, c);
                            }
                }
            pictureBox2.Image = cpoa;






            // punto 2

            // recuperamos puntos
            int cR2 = Convert.ToInt32(dataGridView1.Rows[1].Cells[1].Value);
            int cB2 = Convert.ToInt32(dataGridView1.Rows[1].Cells[3].Value);
            int cG2 = Convert.ToInt32(dataGridView1.Rows[1].Cells[2].Value);

            textBox4.Text = Convert.ToString(cR2);
            textBox5.Text = Convert.ToString(cG2);
            textBox6.Text = Convert.ToString(cB2);

            int meR2, meG2, meB2;
            meR2 = 0;
            meG2 = 0;
            meB2 = 0;
            Bitmap bmp2 = new Bitmap(pictureBox2.Image);
            Bitmap cpoa2 = new Bitmap(bmp2.Width, bmp2.Height);
            Color c2 = new Color();
            for (int i1 = 0; i1 < bmp2.Width - 10; i1 += 10)
                for (int j1 = 0; j1 < bmp2.Height - 10; j1 += 10)
                {
                    meR2 = 0;
                    meG2 = 0;
                    meB2 = 0;

                    for (int k1 = i1; k1 < i1 + 10; k1++)
                        for (int l1 = j1; l1 < j1 + 10; l1++)
                        {
                            c2 = bmp2.GetPixel(k1, l1);
                            meR2 = meR2 + c2.R;
                            meG2 = meG2 + c2.G;
                            meB2 = meB2 + c2.B;
                        }
                    meR2 = meR2 / 100;
                    meG2 = meG2 / 100;
                    meB2 = meB2 / 100;

                    if (((cR2 - 10) < meR2) && (meR2 < (cR2 + 10)) && ((cG2 - 10) < meG2) && (meG2 < (cG2 + 10)) && ((cB2 - 10) < meB2) && (meB2 < (cB2 + 10)))
                        for (int k1 = i1; k1 < i1 + 10; k1++)
                            for (int l1 = j1; l1 < j1 + 10; l1++)
                            {
                                cpoa2.SetPixel(k1, l1, Color.Blue);
                            }

                    else
                    {
                        for (int k1 = i1; k1 < i1 + 10; k1++)
                            for (int l1 = j1; l1 < j1 + 10; l1++)
                            {
                                c2 = bmp2.GetPixel(k1, l1);
                                cpoa2.SetPixel(k1, l1, c2);
                            }
                    }
                }
            pictureBox2.Image = cpoa2;







            // punto 3

            // recuperamos puntos
            int cR3 = Convert.ToInt32(dataGridView1.Rows[2].Cells[1].Value);
            int cB3 = Convert.ToInt32(dataGridView1.Rows[2].Cells[3].Value);
            int cG3 = Convert.ToInt32(dataGridView1.Rows[2].Cells[2].Value);

            textBox4.Text = Convert.ToString(cR3);
            textBox5.Text = Convert.ToString(cG3);
            textBox6.Text = Convert.ToString(cB3);

            int meR3, meG3, meB3;
            meR3 = 0;
            meG3 = 0;
            meB3 = 0;
            Bitmap bmp3 = new Bitmap(pictureBox2.Image);
            Bitmap cpoa3 = new Bitmap(bmp3.Width, bmp3.Height);
            Color c3 = new Color();
            for (int i2 = 0; i2 < bmp3.Width - 10; i2 += 10)
                for (int j2 = 0; j2 < bmp3.Height - 10; j2 += 10)
                {
                    meR3 = 0;
                    meG3 = 0;
                    meB3 = 0;

                    for (int k2 = i2; k2 < i2 + 10; k2++)
                        for (int l2 = j2; l2 < j2 + 10; l2++)
                        {
                            c3 = bmp3.GetPixel(k2, l2);
                            meR3 = meR3 + c3.R;
                            meG3 = meG3 + c3.G;
                            meB3 = meB3 + c3.B;
                        }
                    meR3 = meR3 / 100;
                    meG3 = meG3 / 100;
                    meB3 = meB3 / 100;

                    if (((cR3 - 10) < meR3) && (meR3 < (cR3 + 10)) && ((cG3 - 10) < meG3) && (meG3 < (cG3 + 10)) && ((cB3 - 10) < meB3) && (meB3 < (cB3 + 10)))
                        for (int k2 = i2; k2 < i2 + 10; k2++)
                            for (int l2 = j2; l2 < j2 + 10; l2++)
                            {
                                cpoa3.SetPixel(k2, l2, Color.Red);
                            }

                    else
                    {
                        for (int k2 = i2; k2 < i2 + 10; k2++)
                            for (int l2 = j2; l2 < j2 + 10; l2++)
                            {
                                c3 = bmp3.GetPixel(k2, l2);
                                cpoa3.SetPixel(k2, l2, c3);
                            }
                    }
                }
            pictureBox2.Image = cpoa3;
            //fin del ejercicio





        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }
}
