<!DOCTYPE html>
<html>
<head>
	<title>Input Buku</title>
</head>
<body>
	<center>
	<h1>Input Buku Perpustakaan
	</center>
	<form action="<?php echo base_url(). 'crud_buku/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto:">
			<tr>
				<td>Nama Buku</td>
				<td><input type="text" name="nama_buku"></td>
			</tr>
			<tr>
				<td>penulis</td>
				<td><input type="text" name="penulis"></td>
			</tr>
			<tr>
				<td>penerbit</td>
				<td><input type="text" name="penerbit"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>