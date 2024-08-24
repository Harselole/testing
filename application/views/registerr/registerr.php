<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
header(base_url()."/home/Login/user_login_process");
}
?>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo
base_url(); ?>assets/css/loginn.css">
<link
href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Op
en+Sans+Condensed:300|Raleway' rel='stylesheet'
type='text/css'>
</head>
<body>
<div id="main">
<div id="login">
<h2>Registration Form</h2>
<hr/>
<?php
echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
echo
form_open(site_url().'/login/new_user_regist
ration');
echo form_label('Create Username : ');
echo"<br/>";
echo form_input('username');
echo "<div class='error_msg'>";
if (isset($message_display)) {
echo $message_display;
}
echo "</div>";
echo"<br/>";
echo form_label('Email : ');
echo"<br/>";
$data = array(
'type' => 'email',
'name' => 'email_value'
);
echo form_input($data);
echo"<br/>";
echo"<br/>";
echo form_label('Password : ');
echo"<br/>";
echo form_password('password');
echo"<br/>";
echo"<br/>";
echo form_submit('submit', 'Sign Up');
echo form_close();
?>
<p>Sudah punya akun? <a href="<?= base_url() ?>login">Login disini</a></p>
</div>
</div>
</body>
</html>

