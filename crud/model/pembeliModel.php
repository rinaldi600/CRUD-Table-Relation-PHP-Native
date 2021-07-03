<?php

class pembeliModel {

    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect("localhost","root","","tugas");
    }

    public function execute($query) {
        return mysqli_query($this->connect,$query);
    }

    public function selectAll() {
        $query = "SELECT * FROM pembeli";
        return $this->execute($query);
    }

    public function deleteFiled($id_pembeli) {
        $query = "delete from pembeli where id_pembeli='$id_pembeli'";
        return $this->execute($query);
    }

    public function fetch($var) {
        return mysqli_fetch_array($var);
    }

    public function insert($id_pembeli,$nama_pembeli,$email,$alamat) {
        $query = "INSERT INTO pembeli(id_pembeli,nama_pembeli,email,alamat) VALUES ('$id_pembeli','$nama_pembeli','$email','$alamat')";
        return $this->execute($query);
    }

    public function selectPembeli($id_pembeli) {
        $query = "SELECT * FROM pembeli WHERE id_pembeli = '$id_pembeli'";
        return $this->fetch($this->execute($query));
    }

    public function updatePembeli($id_pembeli,$nama_pembeli,$email,$alamat) {
        $query = "UPDATE pembeli SET nama_pembeli = '$nama_pembeli', email = '$email', alamat = '$alamat' WHERE id_pembeli = '$id_pembeli'";
        return $this->execute($query);
    }

    public function listIDPembeli() {
        $query = "SELECT id_pembeli,nama_pembeli FROM pembeli";
        return $this->execute($query);
    }


}
