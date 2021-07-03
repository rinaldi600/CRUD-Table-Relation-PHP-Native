<?php

    if (isset($_GET["pembeli_edit"])) {
        $idPembeli = $_GET["pembeli_edit"];
        $editInfo = $this->detailPembeli($idPembeli);
    }

    if (isset($_POST["submit"])) {
        $this->changePembeli();
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Pembeli</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            text-align: center;
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
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Edit Data Pembeli</h1>
<div class="link">
    <a href="index.php?pembeli=data">Home Data Pembeli</a>
</div>
<div class="form">
    <form action="" method="post">
        <input type="hidden" id="id_pembeli" name="id_pembeli" placeholder="ID Pembeli" value="<?= $editInfo["id_pembeli"] ?>">

        <label for="nama_pembeli">Nama Pembeli</label>
        <input type="text" id="nama_pembeli" name="nama_pembeli" placeholder="Nama Pembeli" value="<?= $editInfo["nama_pembeli"] ?>">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email" value="<?= $editInfo["email"] ?>">

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" placeholder="Alamat" value="<?= $editInfo["alamat"] ?>">

        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</div>
</body>
</html>
