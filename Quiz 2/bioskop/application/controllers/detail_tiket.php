<?php

class Detail_tiket extends CI_Controller
{

    public function index()
    {
        $data['film'] = $this->model_film->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('detail_tiket', $data);
        $this->load->view('template/footer');
    }
}
