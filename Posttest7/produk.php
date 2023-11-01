<?php
require "inc/function.php";

$query = mysqli_query($conn, "SELECT * FROM ikan JOIN habitat ON ikan.id_habitat = habitat.id_habitat");
while ($row = mysqli_fetch_assoc($query)) {
    $fishes[] = $row;
}

$no = 1;
?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produk</title>
        <link rel="stylesheet" href="style/style-index.css">
    </head>

    <body>
        <?php include "inc/header.php" ?>

        <section class="produk">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama Ikan</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Habitat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fishes as $fish) : ?>
                        <tr>
                            <th><?= $no ?></th>
                            <td align="center"><img src="img/data/<?= $fish["gambar"] ?>" alt=""></td>
                            <td><?= $fish["nama"] ?></td>
                            <td><?= $fish["harga"] ?></td>
                            <td><?= $fish["deskripsi"] ?></td>
                            <td><?= $fish["nama_habitat"] ?></td>
                            <td class="aksi">
                                <a class="btn-ubah" href="ubah.php?id=<?= $fish["id_ikan"] ?>">Ubah</a>
                                <a class="btn-hapus" href="hapus.php?id=<?= $fish["id_ikan"] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data : <?= $fish['nama'] ?>')">hapus</a>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </section>
        <script src="js/script-index.js"></script>
    </body>

    </html>