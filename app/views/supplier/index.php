<section>
  <div class="d-flex w-100 mb-4">
    <p class="h2">Daftar Supplier</p>
    <button type="button" class="btn btn-primary ms-auto">Tambah Supplier</button>
  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Supplier</th>
        <th>No Hp</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($params["data"] as $supplier) :?>
        <tr>
          <td><?= $supplier["IdSupplier"] ?></td>
          <td><?= $supplier["NamaSupplier"] ?></td>
          <td><?= $supplier["NoHp"] ?></td>
          <td><?= $supplier["Alamat"] ?></td>
        </tr>
      <?php endforeach?>
    </tbody>
  </table>
</section>