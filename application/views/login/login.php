<?php
if (isset($this->session->userdata['logged_in'])) {
header(base_url()."/home/Login/user_login_process");
}
?>
<head>
<title>Login Form</title>
<link
href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+
Sans+Condensed:300|Raleway
' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo
base_url(); ?>assets/css/loginn.css">
</head>
<body>
<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<div id="main">
<div id="login">
<h2>Login Form</h2>
<hr/>
<?php echo
form_open('Login/user_login_process'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
<label>UserName :</label>
<input type="text" name="username" id="name"
placeholder="username"/><br /><br />
<label>Password :</label>
<input type="password" name="password" id="password"
placeholder="**********"/><br/><br />
<input type="submit" value=" Login " name="submit"/><br />
<p>Belum punya akun? <a href="<?= base_url() ?>registerr">Register disini</a></p>
<?php echo form_close(); ?>
</div>
</div>
</body>


