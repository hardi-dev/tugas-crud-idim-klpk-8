<section>
  <div class="d-flex w-100 mb-4">
    <p class="h2">Daftar Pembelian</p>
    <button type="button" class="btn btn-primary ms-auto">Tambah Pembelian</button>
  </div>
  <!-- <?php var_dump($params["data"]) ?> -->

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Satuan</th>
        <th>Keterangan</th>
        <th>Nama Supplier</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($params["data"] as $pembelian) :?>
        <tr>
          <td><?= $pembelian["IdPembelian"] ?></td>
          <td><?= $pembelian["NamaBarang"] ?></td>
          <td><?= $pembelian["JumlahPembelian"] ?></td>
          <td><?= $pembelian["Satuan"] ?></td>
          <td><?= $pembelian["Keterangan"] ?></td>
          <td><?= $pembelian["NamaSupplier"] ?></td>
        </tr>
      <?php endforeach?>
    </tbody>
  </table>
</section>