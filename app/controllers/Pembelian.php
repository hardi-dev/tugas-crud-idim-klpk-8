<?php

class Pembelian extends Controller{
  public function index(){
    $params["data"] = $this->model("Pembelian_Model")->getAll();
    $this->view('templates/header', $params);
    $this->view("pembelian/index", $params);
    $this->view('templates/footer');
  }
}