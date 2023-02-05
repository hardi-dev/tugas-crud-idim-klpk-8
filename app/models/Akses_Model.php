<?php

class Akses_Model {
  private $table = 'HakAkses';
  private $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function getAll(){
    $this->db->query("SELECT * FROM HakAkses");
    return $this->db->resultSet();
  }
}