<?php

class Pembelian_Model
{
  private $table = 'Pembelian';
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getAll()
  {
    $this->db->query(
    "SELECT
      IdPembelian,
      NamaBarang,
      JumlahPembelian,
      Satuan,
      Keterangan,
      NamaSupplier
    FROM
      Pembelian
    JOIN Barang ON Barang.IdBarang = Pembelian.IdBarang
    JOIN Supplier ON Supplier.IdSupplier = Pembelian.IdSupplier"
    );
    return $this->db->resultSet();
  }
}