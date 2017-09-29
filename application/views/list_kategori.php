<table class="table table-stripped">
	<thead>
		<th>No</th>
		<th>Nama Kategori</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php $no=1 ?>
		<?php foreach ($kategori as $k): ?>
			<tr>
				<td><?=$no?></td>
				<td><?=$k->nama_kategori?></td>
				<td>
					<a href="<?=site_url('kategori/edit/').$k->id_kategori?>" class="btn btn-warning">Edit</a>
					<a href="<?=site_url('kategori/delete/').$k->id_kategori?>" class="btn btn-danger" >Hapus</a>
				</td>
			</tr>
			<?php $no++ ?>
		<?php endforeach ?>
	</tbody>
</table>