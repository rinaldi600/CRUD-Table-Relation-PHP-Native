<?php

include "model/barangModel.php";


class barang {

    public $modeltransaksi;

    function __construct()
    {
        $this->modeltransaksi = new barangModel();
    }

    public function index() {
        $data = $this->modeltransaksi->selectAll();
        include "view/barang/view.php";
    }

    public function deleteItem($id) {
        $data = $this->modeltransaksi->deleteFiled($id);
        header("Location: index.php?barang=data");
    }

    public function addData() {
        include "view/barang/viewAdd.php";
    }

    public function insertData() {
        $idBarang = $_POST["id_barang"];
        $namaBarang = $_POST["nama_barang"];
        $harga = $_POST["harga"];
        $stok = $_POST["stok"];
        $this->modeltransaksi->insert($idBarang,$namaBarang,$harga,$stok);
        header("Location: index.php?barang=data");
    }

    public function viewEdit() {
        include "view/barang/viewEdit.php";
    }

    public function detailBarang($id_barang) {
        return $this->modeltransaksi->selectBarang($id_barang);
    }

    public function changeBarang() {
        $idBarang = $_POST["id_barang"];
        $namaBarang = $_POST["nama_barang"];
        $harga = $_POST["harga"];
        $stok = $_POST["stok"];
        $this->modeltransaksi->updateBarang($idBarang,$namaBarang,$harga,$stok);
        header("Location: index.php?barang=data");
    }

    public function getAllIDBarang() {
        return $this->modeltransaksi->listIDBarang();
    }
}