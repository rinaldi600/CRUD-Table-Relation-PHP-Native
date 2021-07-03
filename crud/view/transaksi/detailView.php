<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pembeli</title>
    <style>
        .text {
            text-align: center;
            margin-bottom: 20px;
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
    <h1>Data Customer</h1>
    <a class="home" href="index.php">Home</a>
</div>
<table id="customers">
    <tr>
        <th>Nama Pembeli</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total ( Rp. )</th>
    </tr>
    <?php while ($row = $this->modeltransaksi->fetch($data)) { ?>
        <tr>
            <td><?= $row["nama_pembeli"] ?></td>
            <td><?= $row["nama_barang"] ?></td>
            <td><?= $row["harga"] ?></td>
            <td><?= $row["jumlah"] ?></td>
            <td><?= $row["total"] ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
