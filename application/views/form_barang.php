<?php 
	$method = isset($barang->id_barang)?'update':'store';
	$id_barang = isset($barang->id_barang)?$barang->id_barang:'';
	$nama_barang = isset($barang->nama_barang)?$barang->nama_barang:'';
	$id_kategori = isset($barang->id_kategori)?$barang->id_kategori:'';
	$harga = isset($barang->harga)?$barang->harga:0;
	$stok = isset($barang->stok)?$barang->stok:0;
 ?>

<form class="form-horizontal" method="post" action="<?=site_url('barang/'.$method)?>" enctype="multipart/form-data" >
	<input type="hidden" name="id_barang" value="<?=$id_barang?>">
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" name="nama_barang" class="form-control" value="<?=$nama_barang?>" required>
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<select name="id_kategori" class="form-control">
			<?php foreach ($kategori as $row): ?>
				<option value="<?=$row->id_kategori?>" ><?=$row->nama_kategori?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control" value="<?=$harga?>" required>
	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="number" value="<?=$stok?>" name="stok" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Gambar</label>
		<input type="file"  name="gambar" class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success"><?=$method?></button>
		<button type="reset" class="btn btn-warning">Reset</button>
	</div>
</form>