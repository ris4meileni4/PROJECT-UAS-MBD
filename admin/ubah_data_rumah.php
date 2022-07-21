<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
	//melakukan pengalihan
	header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_unit_rumah where id_unit=$id");
$rs = mysqli_fetch_assoc($query);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div 
	class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Form ubah data rumah</h1>

	</div>
	<div class="table-responsive">
		<form action="simpan_ubah_data_rumah.php" method="POST">
			<div class="col-6">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Alamat rumah</label>
					<input class="form-control" name="alamat" value="<?= $rs['alamat'];?>">
					<input type="hidden" name="id_lokasi" value="<?= $id;?>">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Ukuran</label>
					<input class="form-control" name="ukuran" value="<?= $rs['ukuran'];?>">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Nomor rumah</label>
					<input class="form-control" name="nomor_rumah" value="<?= $rs['nomor_rumah'];?>">
				</div>
			<div class="mb-3">
				<button type="submit" class="btn btn-sm btn-primary">Simpan</button>

				</div>
				</div>
				</form>
				</div>
				</main>
			<?php
			include "../layout/footer.php";
			?>