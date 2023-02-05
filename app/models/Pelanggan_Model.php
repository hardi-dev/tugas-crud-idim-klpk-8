<?php

class Pelanggan_Model {
  private $table = 'Pelanggan';
  private $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function getAll(){
    $this->db->query("SELECT * FROM Pelanggan");
    return $this->db->resultSet();
  }

  public function addItem($data) {
    $query = "INSERT INTO $this->table (NamaPelanggan, NoHp, Alamat, IdPengguna) VALUES (:namaPelanggan, :noHp, :alamat, :idPengguna)";
    $this->db->query($query);

    $this->db->bind('namaPelanggan', $data['namaPelanggan']);
    $this->db->bind('noHp', $data['noHp']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('idPengguna', $data['idPengguna']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteItem($id) {
    $query = "DELETE FROM $this->table WHERE IdPelanggan = :id";
    $this->db->query($query);

    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }
}