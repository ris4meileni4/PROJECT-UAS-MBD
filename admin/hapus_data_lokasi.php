<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	//melakukan pengalihan
	header("location:../login/login.php");
}
include "../config/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_lokasi where id_lokasi=$id");

if ($query) {
	header('location:data_lokasi.php?pesan=Data Berhasil Di Hapus');
} else {
	echo mysqli_error($koneksi);
	// header('location:data_lokasi.php?pesan=Data Gagal Di Hapus');
}