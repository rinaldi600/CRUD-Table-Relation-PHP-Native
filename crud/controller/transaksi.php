<?php

include "model/transaksiModel.php";


class transaksi {

    public $modeltransaksi;
    public $tablePembeli;
    public $tableBarang;

    function __construct()
    {
        $this->modeltransaksi = new transaksiModel();
        $this->tablePembeli = new pembeli();
        $this->tableBarang = new barang();
    }

    public function index() {
        $data = $this->modeltransaksi->selectAll();
        include "view/transaksi/view.php";
    }

    public function deleteItem($id) {
        $data = $this->modeltransaksi->deleteFiled($id);
        header("Location: index.php");
    }

    public function detailItem($id) {
        $data = $this->modeltransaksi->detailField($id);
        include "view/transaksi/detailView.php";
    }

    public function addData() {
        $dataAllID = $this->tablePembeli->getAllIDPembeli();
        $dataAllIDBarang = $this->tableBarang->getAllIDBarang();
        include "view/transaksi/viewAdd.php";
    }

    public function getDataTransaksi() {
        $idTransaksi = $_POST["id_transaksi"];
        $idPembeli = $_POST["id_pembeli"];
        $idBarang = $_POST["id_barang"];
        $jumlah = $_POST["jumlah"];
        $hargaSatuan = $this->tableBarang->detailBarang($idBarang);
        $hargaSatuan = $hargaSatuan["harga"];
        $hargaTotal = (string) ((int) $jumlah * (int) $hargaSatuan);
        $this->modeltransaksi->insertData($idTransaksi,$idPembeli,$idBarang,$jumlah,$hargaTotal);
        header("Location: index.php");
    }

    public function viewEdit() {
        $dataALLIDPembeli = $this->tablePembeli->getAllIDPembeli();
        $dataALLIDBarang = $this->tableBarang->getAllIDBarang();
        include "view/transaksi/viewEdit.php";
    }

    public function updateDataTransaksi() {
        $idTransaksi = $_POST["id_transaksi"];
        $idPembeli = $_POST["id_pembeli"];
        $idBarang = $_POST["id_barang"];
        $jumlah = $_POST["jumlah"];
        $hargaSatuan = $this->tableBarang->detailBarang($idBarang);
        $hargaSatuan = $hargaSatuan["harga"];
        $total = (string) ((int) $hargaSatuan * (int) $jumlah);
        $this->modeltransaksi->updateData($idTransaksi, $idPembeli, $idBarang, $jumlah, $total);
        header("Location: index.php");
    }

}