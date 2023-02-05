<?php

class Pelanggan extends Controller{
  public function index(){
    $params["data"] = $this->model("Pelanggan_Model")->getAll();
    $params["pengguna"] = $this->model("Pengguna_Model")->getAll();
    $this->view('templates/header', $params);
    $this->view("pelanggan/index", $params);
    $this->view('templates/footer');
  }

  public function add(){
    if($this->model("Pelanggan_Model")->addItem($_POST) > 0) {
      Flasher::setFlasher('Pelanggan', 'Berhasil ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/pelanggan/index');
      exit;
    } else {
      Flasher::setFlasher('Pelanggan', 'Gagal ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/pelanggan/index');
      exit;
    }
  }

  public function delete($id){
    if($this->model("Pelanggan_Model")->deleteItem($id) > 0) {
      Flasher::setFlasher('Pelanggan', 'Berhasil dihapus', 'success');
      header('Location: ' . BASE_URL . '/pelanggan/index');
      exit;
    } else {
      Flasher::setFlasher('Pelanggan', 'Gagal dihapus', 'danger');
      header('Location: ' . BASE_URL . '/pelanggan/index');
      exit;
    }
  }

}