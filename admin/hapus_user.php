<?php
include_once "../config/koneksi.php";
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");
if($hapus) {
    // echo "<script> alert('Data Berhasil Dihapus');
    
    header('location:data_user.php?pesan=Data Berhasil Di Hapus');
}else{
    // echo "<script> alert('Data Gagal Dihapus');
    
    header('location:data_user.php?pesan=Data Gagal Di Hapus');
}