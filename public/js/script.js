const BASEURL = 'http://localhost/toko-klpk-8/public';

$(function(){
  scriptPengguna();
})

function scriptPengguna(){
  $('.show-update-modal').on('click', function(){
    $('.modal-title').html("Ubah Data Pengguna");
    $('.modal-footer button[type=submit]').html("Ubah Data")
    $('.modal-dialog form').attr("action", BASEURL + '/pengguna/update');

    const idPengguna = $(this).data('id');

    $.ajax({
      url: BASEURL + '/pengguna/getById',
      data: { idPengguna },
      method: 'post',
      dataType: 'json',
      success: function(data){

        $('#idPengguna').val(data.IdPengguna)
        $('#namaPengguna').val(data.NamaPengguna)
        $('#password').val(data.Password)
        $('#namaDepan').val(data.NamaDepan)
        $('#namaBelakang').val(data.NamaBelakang)
        $('#alamat').val(data.Alamat)
        $('#hakAkses').val(data.IdAkses);
      }
    })

  })

  $('.show-add-modal').on('click', function(){
    $('.modal-title').html("Tambah Data Pengguna");
    $('.modal-footer button[type=submit]').html("Tambah Data")
    $('.modal-dialog form').attr("action", BASEURL + '/pengguna/add');

  })
}