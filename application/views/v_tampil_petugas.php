<!DOCTYPE html>
<html>
<head>
	<title>Data Petugas</title>
</head>
<body>
	<center><h1>Data Petugas Perpustakaan</h1></center>
	<center><?php echo anchor('crud_petugas/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr> 
			<th width="70">Nomor</th>
			<th width="170">Nama</th>
			<th width="200">Alamat</th>
			<th width="150">Email</th>
			<th width="130">Username</th>
			<th width="130">Password</th>
			<th width="140" colspan="2">Aksi</Th>	
		</tr>
		<?php $no = 1;
		foreach($data_anggota as $u){
			?>
			<tr>
				<td><center><?php echo $no++ ?></center></td>
				<td><center><?php echo $u->nama ?></center></td>
				<td><center><?php echo $u->alamat ?></center></td>
				<td><center><?php echo $u->email ?></center></td>
				<td><center><?php echo $u->username ?></center></td>
				<td><center><?php echo $u->password ?></center></td>
				<td><center>
					<?php echo anchor('crud_petugas/edit/'.$u->id,'Edit'); ?>	
				</center></td>
				<td><center>
					<?php echo anchor('crud_petugas/hapus/'.$u->id,'Hapus'); ?>
				</center></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>