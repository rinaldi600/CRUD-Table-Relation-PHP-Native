<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Transaksi</title>
    <style>
        .text {
            text-align: center;
            margin-bottom: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .tambah {
            text-align: center;
            margin-top: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>
<div class="text">
    <h1>Data Pembeli</h1>
    <a href="index.php">Home</a>
    <a href="index.php?barang=data">Data Alat Olahraga</a>
</div>
<table id="customers">
    <tr>
        <th>No</th>
        <th>ID Pembeli</th>
        <th>Nama Pembeli</th>
        <th>Email </th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php $number = 1; ?>
    <?php while ($row = $this->modeltransaksi->fetch($data)) { ?>
        <tr>
            <td><?= $number++ ?></td>
            <td><?= $row["id_pembeli"] ?></td>
            <td><?= $row["nama_pembeli"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["alamat"] ?></td>
            <td>
                <a href="index.php?pembeli_edit=<?=  $row["id_pembeli"] ?>">Edit</a>
                <a href="index.php?pembeli_hapus=<?=  $row["id_pembeli"] ?>" onclick="return confirm('Apakah Anda Ingin Hapus')">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</table>
<div class="tambah">
    <a href="index.php?tambah_pembeli=data">Tambah Data Pembeli</a>
</div>
</body>
</html>

