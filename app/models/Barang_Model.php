<?php

class Barang_Model {
  private $table = 'Barang';
  private $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function getAll(){
    $this->db->query("SELECT * FROM Barang");
    return $this->db->resultSet();
  }
}