<?php
$host="localhost";
$user_db="u774857108_zydan";
$pass_db="Zydandaro123";
$db="u774857108_sikutubuku";
$koneksi=mysqli_connect ($host,$user_db,$pass_db) or die 
(mysqli_error());
mysqli_select_db ($koneksi,$db) or die (mysqli_error());
if ($koneksi){
    header('location:home');

}else {
    echo "Server not connection";
}
?>