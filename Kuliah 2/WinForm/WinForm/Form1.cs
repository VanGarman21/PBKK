﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinForm
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            int nilai1 = int.Parse(textBox1.Text);
            int nilai2 = int.Parse(textBox2.Text);
            int hasil;
            hasil = nilai1 + nilai2;
            textBox3.Text = hasil.ToString();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            textBox1.Text = "";
            textBox2.Text = "";
            textBox3.Text = "";
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            int nilai1 = int.Parse(textBox1.Text);
            int nilai2 = int.Parse(textBox2.Text);
            int hasil;
            hasil = nilai1 * nilai2;
            textBox3.Text = hasil.ToString();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            int nilai1 = int.Parse(textBox1.Text);
            int nilai2 = int.Parse(textBox2.Text);
            int hasil;
            hasil = nilai1 - nilai2;
            textBox3.Text = hasil.ToString();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            int nilai1 = int.Parse(textBox1.Text);
            int nilai2 = int.Parse(textBox2.Text);
            int hasil;
            hasil = nilai1 / nilai2;
            textBox3.Text = hasil.ToString();
        }
    }
}
