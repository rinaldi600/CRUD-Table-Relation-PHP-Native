<?php

class barangModel {

    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect("localhost","root","","tugas");
    }

    public function execute($query) {
        return mysqli_query($this->connect,$query);
    }

    public function selectAll() {
        $query = "SELECT * FROM barang";
        return $this->execute($query);
    }

    public function deleteFiled($id_barang) {
        $query = "delete from barang where id_barang='$id_barang'";
        return $this->execute($query);
    }

    public function insert($id_barang, $nama_barang, $harga, $stok) {
        $query = "INSERT INTO barang(id_barang, nama_barang, harga, stok) VALUES ('$id_barang', '$nama_barang', '$harga', '$stok')";
        return $this->execute($query);
    }

    public function fetch($var) {
        return mysqli_fetch_array($var);
    }

    public function selectBarang($id_barang) {
        $query = "SELECT * FROM barang WHERE id_barang = '$id_barang'";
        return $this->fetch($this->execute($query));
    }

    public function updateBarang($id_barang,$nama_barang,$harga,$stok) {
        $query = "UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga', stok = $stok WHERE id_barang = '$id_barang'";
        return $this->execute($query);
    }

    public function listIDBarang() {
        $query = "SELECT id_barang,nama_barang,harga FROM barang";
        return $this->execute($query);
    }

}
