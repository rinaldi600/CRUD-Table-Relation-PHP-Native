<?php

include "controller/transaksi.php";
include "controller/pembeli.php";
include "controller/barang.php";

$main = new transaksi();
$mainPembeli = new pembeli();
$mainBarang = new barang();

if (isset($_GET["detail"])) {
    $getId = $_GET["detail"];
    $main->detailItem($getId);
} else if (isset($_GET["hapus"])) {
    $getId = $_GET["hapus"];
    $main->deleteItem($getId);
}else if (isset($_GET["edit"])) {
    $getId = $_GET["edit"];
    $main->viewEdit($getId);
} else if (isset($_GET["tambah"])) {
    $main->addData();
} else if (isset($_GET["pembeli"])) {
    $mainPembeli->index();
} else if (isset($_GET["barang"])) {
    $mainBarang->index();
} else if (isset($_GET["pembeli_hapus"])) {
    $idPembeli = $_GET["pembeli_hapus"];
    $mainPembeli->deleteItem($idPembeli);
} else if (isset($_GET["barang_hapus"])) {
    $idBarang = $_GET["barang_hapus"];
    $mainBarang->deleteItem($idBarang);
} else if (isset($_GET["tambah_barang"])) {
    $mainBarang->addData();
} else if (isset($_GET["tambah_pembeli"])) {
    $mainPembeli->addData();
} else if (isset($_GET["pembeli_edit"])) {
    $mainPembeli->viewEdit();
} else if (isset($_GET["barang_edit"])) {
    $mainBarang->viewEdit();
} else {
    $main->index();
}