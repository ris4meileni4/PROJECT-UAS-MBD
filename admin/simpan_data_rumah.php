<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_unit = $_POST['id_unit'];
$id_lokasi = $_POST['id_lokasi'];
$Ukuran = $_POST['ukuran'];
$No_rumah = $_POST['no_rumah'];

$insert_data = mysqli_query($koneksi, "INSERT INTO `tbl_unit_rumah` (`id_unit`, `id_lokasi`, `ukuran`, `nomor_rumah`) VALUES (NULL, '$id_lokasi', '$ukuran', '$nomor_rumah')");

if ($insert_data) {
header('location:data_rumah.php?pesan=Data Berasil Di simpan');
} else {
// header('location:data_rumah.php?pesan=Data Gagal Di simpan');
echo ('ERROR' . mysqli_error($koneksi));
} 