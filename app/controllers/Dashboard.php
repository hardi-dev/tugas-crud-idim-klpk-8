<?php

class Dashboard extends Controller{
  public function index(){
    $params["title"] = "Dashboard";
    $this->view('templates/header', $params);
    $this->view('dashboard/index');
    $this->view('templates/footer');
  }
}