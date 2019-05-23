
	<table style="margin:20px auto;" border="1"><div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
					
			<th width="70">Nomor</th>
			<th width="170">Nama Buku</th>
			<th width="200">Penulis</th>
			<th width="150">Penerbit</th>
			<th width="130">Kategori</th>
			<th width="140" colspan="2">Aksi</Th>	
		</tr>
		<?php $no = 1;
		foreach($data_buku as $u){
			?>
			<tr>
				<td><center><?php echo $no++ ?></center></td>
				<td><center><?php echo $u->nama_buku ?></center></td>
				<td><center><?php echo $u->penulis ?></center></td>
				<td><center><?php echo $u->penerbit ?></center></td>
				<td><center><?php echo $u->kategori ?></center></td>
				<td><center>
					<?php echo anchor('crud_buku/edit/'.$u->id,'Edit'); ?>	
				</center></td>
				<td><center>
					<?php echo anchor('crud_buku/hapus/'.$u->id,'Hapus'); ?>
				</center></td>
			</tr>
		<?php } ?>
	</table>
