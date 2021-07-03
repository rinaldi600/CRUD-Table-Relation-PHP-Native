<?php

if (isset($_GET["edit"])) {
    $IDTransaksi = $_GET["edit"];
    $dataTransaksi = $this->modeltransaksi->fetch($this->modeltransaksi->detailTransaksi($IDTransaksi));
}

if (isset($_POST["submit"])) {
    $this->updateDataTransaksi();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Transaksi</title>
</head>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }
    h1 {
        text-align: center;
    }
    .link {
        text-align: center;
        margin-bottom: 20px;
    }
    input[type=text], select {
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

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>
<h1>Edit Data Transaksi</h1>
<div class="link">
    <a href="index.php">Home</a>
</div>
<div class="form">
    <form action="" method="post">
        <input class="random-string" type="hidden" id="id_transaksi" name="id_transaksi" value="<?= $dataTransaksi["id_transaksi"] ?>">

        <label for="id_pembeli">ID Pembeli</label>
        <select id="id_pembeli" name="id_pembeli">
            <?php while ($rowID = $this->modeltransaksi->fetch($dataALLIDPembeli)) { ?>
                <option value="<?= $rowID["id_pembeli"] ?>" <?= $dataTransaksi["id_pembeli"] == $rowID["id_pembeli"] ? 'selected="selected"' : "" ?>><?= $rowID["id_pembeli"] ?> :
                    <?= $rowID["nama_pembeli"] ?></option>
            <?php } ?>
        </select>

        <label for="id_barang">ID Barang</label>
        <select id="id_barang" name="id_barang">
            <?php while ($rowIDBarang = $this->modeltransaksi->fetch($dataALLIDBarang)) { ?>
                <option value="<?= $rowIDBarang["id_barang"] ?>" <?= $dataTransaksi["id_barang"] == $rowIDBarang["id_barang"] ? 'selected="selected"' : "" ?>><?= $rowIDBarang["id_barang"] ?> :
                    <?= $rowIDBarang["nama_barang"] ?></option>
            <?php } ?>
        </select>

        <label for="jumlah">Jumlah</label>
        <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah" value="<?= $dataTransaksi["jumlah"] ?>">

        <button type="submit" value="submit" name="submit">Submit</button>
    </form>
</div>
</body>
</html>

