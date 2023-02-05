<?php

class Pengguna_Model {
  private $table = 'Pengguna';
  private $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function getAll(){
    $this->db->query("SELECT IdPengguna, NamaPengguna, NamaDepan, NamaBelakang, Alamat, NamaAkses FROM Pengguna JOIN HakAkses ON Pengguna.IdAkses = HakAkses.IdAkses");
    return $this->db->resultSet();
  }

  public function addItem($data) {
    $query = "INSERT INTO $this->table (NamaPengguna, Password, NamaDepan, NamaBelakang, Alamat, IdAkses) VALUES (:namaPengguna, :password, :namaDepan, :namaBelakang, :alamat, :idAkses)";
    $this->db->query($query);

    $this->db->bind('namaPengguna', $data['namaPengguna']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('namaDepan', $data['namaDepan']);
    $this->db->bind('namaBelakang', $data['namaBelakang']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('idAkses', $data['hakAkses']);

    $this->db->execute();
    return $this->db->rowCount();
  }
  public function deleteItem($id) {
    $query = "DELETE FROM $this->table WHERE IdPengguna = :id";
    $this->db->query($query);

    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getById($id) {
    $query = "SELECT IdPengguna, Password, NamaPengguna, NamaDepan, NamaBelakang, Alamat, NamaAkses, Pengguna.IdAkses FROM Pengguna JOIN HakAkses ON Pengguna.IdAkses = HakAkses.IdAkses WHERE IdPengguna = :id";
    $this->db->query($query);

    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function updateItem($data) {
    $query = "UPDATE $this->table SET NamaPengguna = :namaPengguna, Password = :password, NamaDepan = :namaDepan, NamaBelakang = :namaBelakang, Alamat = :alamat, IdAkses = :idAkses WHERE IdPengguna = :id";
    $this->db->query($query);

    $this->db->bind('namaPengguna', $data['namaPengguna']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('namaDepan', $data['namaDepan']);
    $this->db->bind('namaBelakang', $data['namaBelakang']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('idAkses', $data['hakAkses']);
    $this->db->bind('id', $data['idPengguna']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}