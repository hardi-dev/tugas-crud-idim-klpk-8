<section>
  <div class="d-flex w-100 mb-4">
    <p class="h2">Daftar Penjualan</p>
    <button type="button" class="btn btn-primary ms-auto">Tambah Penjualan</button>
  </div>
  <!-- <?php var_dump($params["data"]) ?> -->

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Barang</th>
        <th>Jumlah Penjualan</th>
        <th>Satuan</th>
        <th>Keterangan</th>
        <th>Nama Pelanggan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($params["data"] as $penjualan) :?>
        <tr>
          <td><?= $penjualan["IdPenjualan"] ?></td>
          <td><?= $penjualan["NamaBarang"] ?></td>
          <td><?= $penjualan["JumlahPenjualan"] ?></td>
          <td><?= $penjualan["Satuan"] ?></td>
          <td><?= $penjualan["Keterangan"] ?></td>
          <td><?= $penjualan["NamaPelanggan"] ?></td>
        </tr>
      <?php endforeach?>
    </tbody>
  </table>
</section>