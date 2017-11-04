<table class="table table-striped" id="tabel">
  <thead>
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Hak Akses</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1 ?>
    <?php foreach ($users as $row): ?>
      <tr>
        <td><?= $no ?></td>
        <td><?= $row->username ?></td>
        <td><?= $row->hak_akses ?></td>
        <td></td>
      </tr>
      <?php $no++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
