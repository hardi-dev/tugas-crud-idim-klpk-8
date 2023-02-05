<?php

class Akses extends Controller{
  public function index(){
    $params["data"] = $this->model("Akses_Model")->getAll();
    $this->view('templates/header', $params);
    $this->view("akses/index", $params);
    $this->view('templates/footer');
  }
}