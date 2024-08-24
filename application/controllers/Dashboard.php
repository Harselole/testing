<?php
class Dashboard extends CI_Controller {
    public function index() {
        $this->load->model('User_model');
        $user_id = $this->session->userdata('user_id');
        $user = $this->User_model->get($user_id); // Tambahkan method get pada User_model untuk mengambil data user berdasarkan id
        if ($user) {
            $data['user'] = $user;
            $this->load->view('dashboard/dasboard', $data);
        } else {
            redirect('login');
        }
    }
}
?>
