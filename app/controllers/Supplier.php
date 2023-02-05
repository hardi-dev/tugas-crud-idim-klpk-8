<?php

class Supplier extends Controller{
  public function index(){
    $params["data"] = $this->model("Supplier_Model")->getAll();
    $this->view('templates/header', $params);
    $this->view("supplier/index", $params);
    $this->view('templates/footer');
  }
}