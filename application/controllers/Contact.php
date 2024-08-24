<?php
// application/controllers/Pembelian.php

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Pembelian_model');
    }

    public function index() {
        // Menampilkan form pembelian
        $this->load->view('templates/header');
        $this->load->view('contact/contact');
        $this->load->view('templates/footer');
    }

    public function simpan_data()
    {
        // Ambil data dari form
        $nama = $this->input->post('nm_pembeli');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $tanggal_pemesanan = $this->input->post('tanggal_pemesanan');
        $kurir = $this->input->post('kurir');
        $buku = implode(", ", $this->input->post('buku'));

        // Lakukan penyimpanan data ke database
        $data = array(
            'nama' => $nama,
            'no_hp' => $no_hp,
            'email' => $email,
            'alamat' => $alamat,
            'tanggal_pemesanan' => $tanggal_pemesanan,
            'kurir' => $kurir,
            'buku' => $buku
        );

        $this->db->insert('pemesanan', $data);

        // Tambahkan logika atau proses lain yang Anda perlukan

        // Redirect ke halaman atau tampilkan pesan sukses
        redirect('home/home');
    }

}

?>
