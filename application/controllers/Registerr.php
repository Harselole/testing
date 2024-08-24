<?php
Class Registerr extends CI_Controller {
public function __construct() {
parent::__construct();
// Load form helper library
$this->load->helper('form');
// Load form validation library
$this->load->library('form_validation');
// Load session library
$this->load->library('session');
// Load database
$this->load->model('login_database');
}
// Show login page
public function index() {
$this->load->view('templates/header');
$this->load->view('registerr/registerr');
}
// Show registration page
public function user_registration_show() {
$this->load->view('registerr/registerr');
}
// Validate and store registration data in database
public function new_user_registration() {
// Check validation for user input in SignUp form
$this->form_validation->set_rules('username', 'Username',
'trim|required');
$this->form_validation->set_rules('email_value', 'Email',
'trim|required');
$this->form_validation->set_rules('password', 'Password',
'trim|required');
if ($this->form_validation->run() == FALSE) {
$this->load->view('registerr/registerr');
}
else
{
$data = array(
'user_name' => $this->input->post('username'),
'user_email' => $this->input->post('email_value'),
'user_password' => $this->input->post('password')
);
$result = $this->login_database->registration_insert($data);
if ($result == TRUE) {
$data['message_display'] = 'Registration Successfully !';
$this->load->view('login/login', $data);
} else {
$data['message_display'] = 'Username already exist!';
$this->load->view('registerr/registerr', $data);
}
}
}
// Check for user login process
public function user_login_process() {
$this->form_validation->set_rules('username', 'Username',
'trim|required');
$this->form_validation->set_rules('password', 'Password',
'trim|required');
if ($this->form_validation->run() == FALSE) {
if(isset($this->session->userdata['logged_in'])){
//$this->load->view('home');
redirect(base_url().'home/home');
}else{
$this->load->view('login/login');
}
} else {
$data = array(
'username' => $this->input->post('username'),
'password' => $this->input->post('password')
);
$result = $this->login_database->login($data);
if ($result == TRUE) {
$username = $this->input->post('username');
$result = $this->login_database->read_user_information($username);
if ($result != false) {
$session_data = array(
'iduser' => $result[0]->id,
'username' => $result[0]->user_name,
'email' => $result[0]->user_email,
);
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
redirect(base_url().'home/home');
//$this->load->view('home');
}
} else {
$data = array(
'error_message' => 'Invalid Username or Password'
);
$this->load->view('login/login', $data);
}
}
}
// Logout from admin page
public function logout() {
// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Successfully Logout';
$this->load->view('login/login', $data);
}
}
?>