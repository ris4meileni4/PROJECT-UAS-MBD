<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
$Alamat = $_POST['alamat'];

$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_lokasi (`id_lokasi`, `alamat`) VALUES (NULL, '$Alamat')");
//INSERT INTO `tbl_lokasi` (`id_lokasi`, `alamat`) VALUES (NULL, '$Alamat');
if ($insert_data) {
header('location:data_lokasi.php?pesan=Data Berasil Di simpan');
} else {
// header('location:data_jns_ekskul.php?pesan=Data Gagal Di simpan');
echo ('ERROR' . mysqli_error($koneksi));
}