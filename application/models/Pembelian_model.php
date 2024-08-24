<?php
// application/models/Pembelian_model.php

class Pembelian_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function simpan_pembelian($data) {
        $this->db->insert('pembelian', $data);
        return $this->db->insert_id(); // Mengembalikan ID dari data yang baru saja disimpan
    }

}

?>
