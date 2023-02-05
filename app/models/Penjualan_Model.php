<?php

class Penjualan_Model
{
  private $table = 'Penjualan';
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getAll()
  {
    $this->db->query(
      "SELECT
        IdPenjualan,
        NamaBarang,
        JumlahPenjualan,
        Satuan,
        Keterangan,
        NamaPelanggan
      FROM
        Penjualan
        JOIN Barang ON Barang.IdBarang = Penjualan.IdBarang
        JOIN Pelanggan ON Pelanggan.IdPelanggan = Penjualan.IdPelanggan"
    );
    return $this->db->resultSet();
  }
}