<section>
  <div class="d-flex w-100 mb-4">
    <p class="h2">Daftar Pengguna</p>
    <button type="button" class="btn btn-primary ms-auto show-add-modal'" data-bs-toggle="modal"
      data-bs-target="#tambahPenggunaModal">Tambah Pengguna</button>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Pengguna</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Alamat</th>
        <th>Nama Akses</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($params["data"] as $pengguna): ?>
        <tr>
          <td>
            <?= $pengguna["IdPengguna"] ?>
          </td>
          <td>
            <?= $pengguna["NamaPengguna"] ?>
          </td>
          <td>
            <?= $pengguna["NamaDepan"] ?>
          </td>
          <td>
            <?= $pengguna["NamaBelakang"] ?>
          </td>
          <td>
            <?= $pengguna["Alamat"] ?>
          </td>
          <td>
            <?= $pengguna["NamaAkses"] ?>
          </td>
          <td>
            <button type="button" class="btn btn-primary show-update-modal" data-bs-toggle="modal"
              data-id="<?= $pengguna["IdPengguna"] ?>" data-bs-target="#tambahPenggunaModal">Edit</button>
            <a type="button" class="btn btn-danger" href="<?= BASE_URL; ?>/pengguna/delete/<?= $pengguna["IdPengguna"] ?>"
              onclick="return confirm('Apakah anda yakin akan menghapus data?')">Delete</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</section>

<!-- Modal Tambah Pengguna -->
<div class="modal fade" id="tambahPenggunaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form action="<?= BASE_URL; ?>/pengguna/add" method="post">
      <input type="hidden" id="idPengguna" name="idPengguna" value="<?= $pengguna["IdPengguna"] ?>">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <label for="namaPengguna" class="col-sm-4 col-form-label">Nama Pengguna</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="namaPengguna" name="namaPengguna">
            </div>
          </div>
          <div class="row mb-3">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password" name="password">
            </div>
          </div>
          <div class="row mb-3">
            <label for="namaDepan" class="col-sm-4 col-form-label">Nama Depan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="namaDepan" name="namaDepan">
            </div>
          </div>
          <div class="row mb-3">
            <label for="namaBelakang" class="col-sm-4 col-form-label">Nama Belakang</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="namaBelakang" name="namaBelakang">
            </div>
          </div>
          <div class="row mb-3">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
          </div>
          <div class="row mb-3">
            <label for="hakAkses" class="col-sm-4 col-form-label">Hak Akses</label>
            <div class="col-sm-8">
              <select class="form-select" id="hakAkses" name="hakAkses">
                <?php foreach ($params["akses"] as $akses): ?>
                  <option value="<?= $akses["IdAkses"] ?>"><?= $akses["NamaAkses"] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </form>

  </div>
</div>
</div>