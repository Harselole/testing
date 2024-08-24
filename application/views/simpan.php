<?php
include("koneksi.php");
$nm_pembeli=$_POST['nm_pembeli'];
$no_hp = $_POST['no_hp'];
$email=$_POST['email'];
$alamat = $_POST['alamat'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$kurir = $_POST['kurir'];
$buku = $_POST['buku'];
$sql="insert into pemesanan(nm_pembeli,no_hp,email,alamat,tanggal_pemesanan,kurir,buku) values ('$nama','$no_hp','$email','$alamat','$tanggal_pemesanan','$kurir','$buku')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
?>