<!DOCTYPE html>
<html>
<head>
	<title>Form Input Petugas Perpustakaan</title>
</head>
<body>
	<center>
	<h1>Input Petugas
	</center>
	<form action="<?php echo base_url(). 'crud_petugas/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto:">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>