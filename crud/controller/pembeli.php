<?php

include "model/pembeliModel.php";

class pembeli {

    public $modeltransaksi;

    function __construct()
    {
        $this->modeltransaksi = new pembeliModel();
    }

    public function index() {
        $data = $this->modeltransaksi->selectAll();
        include "view/pembeli/view.php";
    }

    public function deleteItem($id) {
        $data = $this->modeltransaksi->deleteFiled($id);
        header("Location: index.php?pembeli=data");
    }

    public function addData() {
        include "view/pembeli/viewAdd.php";
    }

    public function insertData() {
        $idPembeli = $_POST["id_pembeli"];
        $namaPembeli = $_POST["nama_pembeli"];
        $emailPembeli = $_POST["email"];
        $alamatPembeli = $_POST["alamat"];
        $this->modeltransaksi->insert($idPembeli,$namaPembeli,$emailPembeli,$alamatPembeli);
        header("Location: index.php?pembeli=data");
    }

    public function viewEdit() {
        include "view/pembeli/viewEdit.php";
    }

    public function detailPembeli($id_pembeli) {
        return $this->modeltransaksi->selectPembeli($id_pembeli);
    }

    public function changePembeli() {
        $idPembeli = $_POST["id_pembeli"];
        $namaPembeli = $_POST["nama_pembeli"];
        $email = $_POST["email"];
        $alamat = $_POST["alamat"];
        $this->modeltransaksi->updatePembeli($idPembeli,$namaPembeli,$email,$alamat);
        header("Location: index.php?pembeli=data");
    }

    public function getAllIDPembeli() {
        return $this->modeltransaksi->listIDPembeli();
    }

}