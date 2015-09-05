<div class="container">
	<a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>
<div class="clearfix"></div><br />
<div class="container">
	<table class="table table-border table-responsive">
		<tr>
			<th>#</th>
			<th>Nama Obat</th>
			<th>jenis</th>
			<th>harga</th>
			<th>Stock</th>
			<th>Option</th>
		</tr>
		<?php foreach ($hasil as $row) :?>
		<tr>
			<td><?=$row['idobat'] ?></td>
			<td><?=$row['namaobat'] ?></td>
			<td><?=$row['jenis'] ?></td>
			<td><?=$row['harga'] ?></td>
			<td><?=$row['stock'] ?></td>
			<td align="center">
                <a href="edit-data.php?id_edit=<?=$row['idobat']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="index.php?delete=<?php print($row['idobat']); ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="glyphicon glyphicon-remove-circle"></i></a>
            </td>
        </tr>
	<?php endforeach; ?>
	</table>
</div>