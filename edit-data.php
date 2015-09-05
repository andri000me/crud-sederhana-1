<?php 
include "config/koneksi.php";
include "src/Obat.php";
$error ="";
$edit_obat = new Obat($dbh);
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
	if (empty($_POST['stock']))  {
		$error .= "<p>stok harus diisi</p>";
	}
	if (empty($error)) {
	    $idobat = $_GET['id_edit'];
	    $namaobat = $_POST['namaobat'];
	    $jenis = $_POST['jenis'];
	   	$harga =$_POST['harga'];
	   	$stock = $_POST['stock'];

	   	$edit_obat->updateDataObat($idobat, $namaobat, $jenis, $harga, $stock);
	    {
			header("Location: index.php?update");
	    }
}
}  
if (isset($_GET['id_edit'])) {
   $idobat = $_GET['id_edit'];
   extract($edit_obat->getId($idobat));
}
?>
<?php
include "view/header.php";
include "view/edit-data.php";
?>