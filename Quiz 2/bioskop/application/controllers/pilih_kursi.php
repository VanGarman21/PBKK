<?php

class Pilih_kursi extends CI_Controller
{

    public function index()
    {
        $data['film'] = $this->model_film->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pilih_kursi', $data);
        $this->load->view('template/footer');
    }
}
