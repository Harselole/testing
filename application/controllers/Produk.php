<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produk extends CI_Controller {
public function index()
{
$this->load->view('templates/header');
$this->load->view('produk/produk');
$this->load->view('templates/footer');
}               
}
