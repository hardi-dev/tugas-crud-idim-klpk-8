<section>
  <div class="d-flex w-100 mb-4">
    <p class="h2">Daftar Barang</p>
  </div>
  <!-- <?php var_dump($params["data"]) ?> -->

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($params["data"] as $barang) :?>
        <tr>
          <td><?= $barang["IdBarang"] ?></td>
          <td><?= $barang["NamaBarang"] ?></td>
          <td><?= $barang["Satuan"] ?></td>
          <td><?= $barang["Keterangan"] ?></td>
        </tr>
      <?php endforeach?>
    </tbody>
  </table>
</section>