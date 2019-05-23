<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Buku</title>
</head>
<body>
	<center>
		<h1>Edit Data Buku Perpustakaan</h1>
	</center>
	<?php foreach($data_buku as $u){ ?>
	<form action="<?php echo base_url(). 'crud_buku/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Buku</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama_buku" value="<?php echo $u->nama_buku ?>">
				</td>
			</tr>
			<tr>
				<td>Penulis</td>
					<td><input type="text" name="penulis" value="<?php echo $u->penulis ?>"></td>
			</tr>
			<tr>
				<td>penerbit</td>
					<td><input type="text" name="penerbit" value="<?php echo $u->penerbit ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
					<td><input type="text" name="kategori" value="<?php echo $u->kategori ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>