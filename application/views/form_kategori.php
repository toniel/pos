<?php 
	$method = isset($kategori->id_kategori)?'update':'store';
	$id_kategori = isset($kategori->id_kategori)?$kategori->id_kategori:'';
	$nama_kategori = isset($kategori->nama_kategori)?$kategori->nama_kategori:'';
 ?>

<form class="form-horizontal" method="post" action="<?=site_url('kategori/'.$method)?>">
	<input type="hidden" name="id_kategori" value="<?=$id_kategori?>">
	<div class="form-group">
		<label>Nama kategori</label>
		<input type="text" name="nama_kategori" class="form-control" value="<?=$nama_kategori?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success"><?=$method?></button>
		<button type="reset" class="btn btn-warning">Reset</button>
	</div>
</form>