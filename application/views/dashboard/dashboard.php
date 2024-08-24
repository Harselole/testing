<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/login.css') ?>">
</head>
<body>
    <div class="dashboard">
        <h1>Welcome, <?= $user->name ?></h1>
        <p>Your email: <?= $user->email ?></p>
        <a href="<?= base_url('login/logout') ?>">Logout</a>
    </div>
</body>
</html>
