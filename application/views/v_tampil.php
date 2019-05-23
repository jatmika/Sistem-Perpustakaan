<!DOCTYPE html>
<html>
<head>
	<title>Data Anggota</title>
</head>
<body>
	<center><h1>Data Anggota Perpustakaan</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr> 
			<th width="70">Nomor</th>
			<th width="170">Nama</th>
			<th width="200">Alamat</th>
			<th width="150">Email</th>
			<th width="130">Nomor HP</th>
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
				<td><center><?php echo $u->no_hp ?></center></td>
				<td><center>
					<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>	
				</center></td>
				<td><center>
					<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
				</center></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>