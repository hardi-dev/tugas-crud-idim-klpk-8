<?php

class Barang extends Controller{
  public function index(){
    $params["data"] = $this->model("Barang_Model")->getAll();
    $this->view('templates/header', $params);
    $this->view("barang/index", $params);
    $this->view('templates/footer');
  }
}