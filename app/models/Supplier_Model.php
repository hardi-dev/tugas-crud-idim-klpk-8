<?php

class Supplier_Model {
  private $table = 'Supplier';
  private $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function getAll(){
    $this->db->query("SELECT * FROM Supplier");
    return $this->db->resultSet();
  }
}