<?php

class Pengguna extends Controller{
  public function index(){
    $params["data"] = $this->model("Pengguna_Model")->getAll();
    $params["akses"] = $this->model("Akses_Model")->getAll();
    $this->view('templates/header', $params);
    $this->view("pengguna/index", $params);
    $this->view('templates/footer');
  }

  public function add(){
    if($this->model("Pengguna_Model")->addItem($_POST) > 0) {
      Flasher::setFlasher('Pengguna', 'Berhasil ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/pengguna/index');
      exit;
    } else {
      Flasher::setFlasher('Pengguna', 'Gagal ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/pengguna/index');
      exit;
    }
  }

  public function delete($id){
    if($this->model("Pengguna_Model")->deleteItem($id) > 0) {
      Flasher::setFlasher('Pengguna', 'Berhasil dihapus', 'success');
      header('Location: ' . BASE_URL . '/pengguna/index');
      exit;
    } else {
      Flasher::setFlasher('Pengguna', 'Gagal dihapus', 'danger');
      header('Location: ' . BASE_URL . '/pengguna/index');
      exit;
    }
  }

  public function getById(){
    $data = $this->model("Pengguna_Model")->getById($_POST["idPengguna"]);
    echo json_encode($data);
  }

  public function update(){
    if($this->model("Pengguna_Model")->updateItem($_POST) > 0) {
      Flasher::setFlasher('Pengguna', 'Berhasil diupdate', 'success');
      header('Location: ' . BASE_URL . '/pengguna/index');
      exit;
    } else {
      Flasher::setFlasher('Pengguna', 'Gagal diupdate', 'danger');
      header('Location: ' . BASE_URL . '/pengguna/index');
      exit;
    }
  }
}