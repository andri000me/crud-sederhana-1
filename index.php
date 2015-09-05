<?php
include "config/koneksi.php";
include "src/Obat.php";

$hapus_obat = new Obat($dbh);
$hasil = $hapus_obat->getDataObat();


if (isset($_GET['delete'])) {
    $hapus_obat->deleteObat($_GET['delete']);
    }
include "view/header.php";
?>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    Selamat Data Telah Tersimpan...!
   	</div>
	</div>
    <?php
    
}
if(isset($_GET['update']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    Selamat Data Telah diubah...!
   	</div>
	</div>
    <?php
    
}
if(isset($_GET['delete']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    Selamat Data Telah dihapus...!
   	</div>
	</div>
    <?php
    
}
?>
<?php

include "view/view-obat.php";
include "view/footer.php";
?>

