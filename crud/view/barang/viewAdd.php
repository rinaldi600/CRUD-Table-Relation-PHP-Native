<?php

    if (isset($_POST["submit"])) {
        $this->insertData();
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
</head>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }
    h1 {
        text-align: center;
    }
    input[type=text]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type=submit]:hover {
        background-color: #45a049;
    }

    .form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        margin-top: 20px;
    }
    .link {
        text-align: center;
    }
</style>
<body>
    <h1>Tambah Data Barang</h1>
    <div class="link">
        <a href="index.php?barang=data">Home Data Barang</a>
    </div>
    <div class="form">
        <form action="" method="post">
            <label for="id_barang">ID Barang</label>
            <input type="text" id="id_barang" name="id_barang" placeholder="ID Barang">

            <label for="nama_barang">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang" placeholder="Nama Barang">

            <label for="harga">Harga</label>
            <input type="text" id="harga" name="harga" placeholder="Harga">

            <label for="stok">Stok</label>
            <input type="text" id="stok" name="stok" placeholder="Stok">

            <button type="submit" name="submit" value="submit">Submit</button>
        </form>
    </div>
</body>
</html>
