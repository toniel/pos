<a href="<?= site_url('barang/create') ?>" class="btn btn-primary">Tambah Barang</a>

<?php if ($this->session->has_userdata('status')): ?>
	
<div class="alert alert-success" role="alert"><?= $this->session->userdata('status') ?>
	
</div>
<?php endif ?>

<table class="table table-bordered">
	<thead>
		<th>ID Barang</th>
		<th>Nama Barang</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php foreach ($barangs as $row): ?>
			<tr>
				<td><?= $row->id_barang?></td>
				<td><?= $row->nama_barang?></td>
				<td><?= $row->nama_kategori?></td>
				<td><?= $row->harga?></td>
				<td><?= $row->stok?></td>
				<td>
					<a class="btn btn-warning" href="<?= site_url('barang/edit/'.$row->id_barang) ?>">Edit</a>
					<a class="btn btn-danger" href="<?= site_url('barang/delete/'.$row->id_barang) ?>">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>