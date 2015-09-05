<?php
include "config/koneksi.php";
include "src/Obat.php";

$obat = new Obat($dbh);
$error ="";

if(isset($_POST['submit'])) {
	if (empty($_POST['namaobat'])) {
		$error .= "<p>Nama obat harus diisi</p>";
	}
	
	if (empty($_POST['jenis'])) {
		$error .= "<p>jenis obat harus diisi</p>";
	}
	
	if (empty($_POST['harga']))  {
		$error .= "<p>harga harus diisi</p>";
	}
	if (empty($_POST['stok']))  {
		$error .= "<p>stok harus diisi</p>";
	}

	if(empty($error)){
	$namaobat = $_POST['namaobat'];
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$obat->insertDataObat($namaobat, $jenis, $harga, $stok);
	{
		header("Location: index.php?inserted");
	}
	
	}
}
include "view/header.php";
include "view/add-data.php";
include "view/footer.php";
?>