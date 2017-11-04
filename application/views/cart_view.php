<table class="table table-striped">
	<thead>
		<th>No</th>
		<th>Nama Barang</th>
		<th>Qty</th>
		<th>Harga</th>
		<th>Sub Total</th>
	</thead>
	<tbody>
		<?php $no=1 ?>
		<?php foreach ($this->cart->contents() as $items): ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $items['name'] ?></td>
				<td><?= $items['qty'] ?></td>
				<td><?= rupiah($items['price']) ?></td>
				<td><?= $items['subtotal'] ?></td>
			</tr>
		<?php $no++ ?>
		<?php endforeach ?>
		<tr>
			<td colspan="4">Total</td>
			<td><?= $this->cart->total() ?></td>
		</tr>
	</tbody>
</table>