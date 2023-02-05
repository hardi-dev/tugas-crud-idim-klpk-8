<?php

class Penjualan extends Controller{
  public function index(){
    $params["data"] = $this->model("Penjualan_Model")->getAll();
    $this->view('templates/header', $params);
    $this->view("penjualan/index", $params);
    $this->view('templates/footer');
  }
}