<?php
require "inc/function.php";

$query = mysqli_query($conn, "SELECT * FROM habitat");

if (isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $harga = $_POST["harga"];
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);
    $habitat = $_POST["habitat"];
    $gambar = $_FILES["gambar"]["name"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    $ekstensigmbr = explode(".", $gambar);
    $ekstensigmbr = strtolower(end($ekstensigmbr));
    $nm_gambar = date('Y-m-d');
    $nm_gambar .= ".";
    $nm_gambar .= strtolower($nama) . "-file";
    $nm_gambar .= ".";
    $nm_gambar .= $ekstensigmbr;
    // menyimpan gambar yang diupload pada folder img/data/
    move_uploaded_file($tmpName, 'img/data/' . $nm_gambar);

    $query = mysqli_query($conn, "INSERT INTO ikan VALUES (NULL, '$nama', $harga, '$deskripsi', $habitat,'$nm_gambar')");

    if ($query) {
        echo "
        <script>
        alert('Berhasil menambahkan data!');
        document.location.href='produk.php';
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style/style-add.css">
</head>

<body>
    <?php include "inc/header.php" ?>

    <section>
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <label for="nama">Masukkan Nama Ikan</label>
                    <input type="text" name="nama" id="nama" required>
                </div>
                <div class="row">
                    <label for="harga">Masukkan Harga Ikan</label>
                    <input type="number" name="harga" id="harga" required>
                </div>
                <div class="row">
                    <label for="deskripsi">Masukkan Deskripsi Ikan</label>
                    <textarea name="deskripsi" id="deskripsi " cols="38" rows="10" required></textarea>
                </div>
                <div class="row">
                    <label for="habitat">Pilih Habitat Ikan</label>
                    <select name="habitat" id="habitat">
                        <?php while ($habitat = mysqli_fetch_assoc($query)) : ?>
                            <option value="<?= $habitat["id_habitat"] ?>"><?= $habitat["nama_habitat"] ?></option>
                        <?php endwhile ?>
                    </select>
                </div>
                <div class="row">
                    <label for="gambar">Pilih Gambar Ikan</label>
                    <input type="file" name="gambar" id="gambar">
                </div>
                <div class="row akhir">
                    <button type="submit" name="submit">Submit</button>
                </div>
        </div>
        </form>
    </section>


    <?php include "inc/footer.php" ?>
    <script src="js/script-index.js"></script>
</body>

</html>