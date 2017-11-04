<a href="<?= site_url('kategori/create') ?>" class="btn btn-primary">Tambah Kategori</a>

<table class="table table-stripped" id="tabel">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Action</th>
		</tr>
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
<script>
 $(document).ready(function() {
		 $('#tabel').mouseover(function(event) {
		 	/* Act on the event */
			alert('success');
		 });
 });
 </script>
