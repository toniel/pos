<div class="row">
<?php foreach ($barang as $row): ?>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <?php if ($row->gambar): ?>
	      	<img src="<?= base_url() ?>uploads/<?=$row->gambar?>" width="300" alt="...">
	      <?php else: ?>
	      	<img src="http://placehold.it/300x200" alt="">
	      <?php endif ?>
	      <div class="caption">
	        <h3><?= $row->nama_barang ?></h3>
	        <p><?= $row->harga?></p>
	        <p><?= $row->stok ?></p>
	      </div>
	      <form action="<?= site_url('penjualan/add_to_cart') ?>" class="form" method="post">
	      	<div class="form-group">
	      		<input type="hidden" name="id_barang" value="<?= $row->id_barang ?>">
	      		<input type="text" name="qty" class="form-control" >
	      		<button type="submit" class="btn btn-primary">Add To Cart</button>
	      	</div>
	      </form>
	    </div>
	  </div>
<?php endforeach ?>
</div>