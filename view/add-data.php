<div class="clearfix">
	<div class="container">
     <?php if(!empty($error)) : ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?=$error?>
        </div>
        <?php endif; ?>
		<form method="POST">
		<table class="table table-border">
			<tr>
            	<td>Nama Obat</td>
            	<td><input type='text' name='namaobat' class='form-control' placeholder="namaobat" value="<?=$_POST['namaobat'];?>"></td>
        	</tr>
        	<tr>
            	<td>Jenis</td>
            	<td><input type='text' name='jenis' class='form-control' placeholder="Jenis Obat" value="<?=$_POST['jenis'];?>"></td>
        	</tr>
        	<tr>
            	<td>Harga</td>
            	<td><input type='text' name='harga' class='form-control' placeholder="Harga" value="<?=$_POST['harga'];?>"></td>
        	</tr>
        	<tr>
            	<td>Stok</td>
            	<td><input type='text' name='stok' class='form-control' placeholder="Stok" value="<?=$_POST['stok'];?>"></td>
        	</tr>
        	<tr>
	            <td colspan="2">
	            <button type="submit" class="btn btn-primary" name="submit">
	    		<span class="glyphicon glyphicon-plus"></span> Create New Record
				</button>  
	            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
            </td>
        	</tr>
        </table>
		</form>
	</div>
</div>