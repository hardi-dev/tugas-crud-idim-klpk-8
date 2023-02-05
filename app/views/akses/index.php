<section>
  <div class="d-flex w-100 mb-4">
    <p class="h2">Daftar Hak Akses</p>
  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Akses</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($params["data"] as $akses) :?>
        <tr>
          <td><?= $akses["IdAkses"] ?></td>
          <td><?= $akses["NamaAkses"] ?></td>
          <td><?= $akses["Keterangan"] ?></td>
        </tr>
      <?php endforeach?>
    </tbody>
  </table>
</section>