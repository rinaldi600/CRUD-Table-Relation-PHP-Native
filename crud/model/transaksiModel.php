<?php

class transaksiModel {

    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect("localhost","root","","tugas");
    }

    public function execute($query) {
        return mysqli_query($this->connect,$query);
    }

    public function selectAll() {
        $query = "SELECT * FROM transaksi";
        return $this->execute($query);
    }

    public function detailField($id_transaksi) {
        $query = "select nama_pembeli, nama_barang, harga, jumlah, total from pembeli, barang, transaksi where
                    transaksi.id_pembeli = pembeli.id_pembeli and transaksi.id_barang = barang.id_barang and id_transaksi = '$id_transaksi'";
        return $this->execute($query);
    }

    public function deleteFiled($id_transaksi) {
        $query = "delete from transaksi where id_transaksi='$id_transaksi'";
        return $this->execute($query);
    }

    public function fetch($var) {
        return mysqli_fetch_array($var);
    }

    public function idPem() {
        $query = "SELECT id_pembeli FROM transaksi";
        return $this->execute($query);
    }

    public function insertData($id_transaksi,$id_pembeli,$id_barang,$jumlah,$total) {
        $query = "INSERT INTO transaksi(id_transaksi, id_pembeli, id_barang, jumlah, total) 
                    VALUES ('$id_transaksi','$id_pembeli','$id_barang','$jumlah','$total')";
        return $this->execute($query);
    }

    public function detailTransaksi($id_transaksi) {
        $query = "SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'";
        return $this->execute($query);
    }

    public function updateData($id_transaski, $id_pembeli, $id_barang, $jumlah, $total) {
        $query = "UPDATE transaksi SET id_pembeli = '$id_pembeli', id_barang = '$id_barang', jumlah = '$jumlah', total = '$total' WHERE id_transaksi = '$id_transaski'";
        return $this->execute($query);
    }


}