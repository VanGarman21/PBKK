<?php

class data_film extends CI_Controller
{
    public function index()
    {
        $data['film'] = $this->model_film->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_film', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $judul_film       = $this->input->post('judul_film');
        $genre          = $this->input->post('genre');
        $keterangan       = $this->input->post('keterangan');
        $harga          = $this->input->post('harga');
        $jml_kursi           = $this->input->post('jml_kursi');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path']      = './uploads';
            $config['allowed_types']    = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'judul_film'      => $judul_film,
            'genre'    => $genre,
            'keterangan'      => $keterangan,
            'harga'         => $harga,
            'jml_kursi'          => $jml_kursi,
            'gambar'        => $gambar
        );

        $this->model_film->tambah_film($data, 'tb_film');
        redirect('admin/data_film/index');
    }

    public function edit($id)
    {
        $where = array('id_film' => $id);
        $data['film'] = $this->model_film->edit_film($where, 'tb_film')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_film', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id             = $this->input->post('id_film');
        $judul_film       = $this->input->post('judul_film');
        $genre     = $this->input->post('genre');
        $keterangan       = $this->input->post('keterangan');
        $harga          = $this->input->post('harga');
        $jml_kursi           = $this->input->post('jml_kursi');

        $data = array(
            'judul_film'      => $judul_film,
            'genre'    => $genre,
            'keterangan'      => $keterangan,
            'harga'         => $harga,
            'jml_kursi'          => $jml_kursi
        );

        $where = array(
            'id_film' => $id
        );

        $this->model_film->update_data($where, $data, 'tb_film');
        redirect('admin/data_film/index');
    }

    public function hapus($id)
    {
        $where = array('id_film' => $id);
        $this->model_film->hapus_data($where, 'tb_film');
        redirect('admin/data_film/index');
    }
}
