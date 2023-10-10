<?php

if (isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $harga = $_POST["harga"];
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);
    $habitat = htmlspecialchars($_POST["habitat"]);

    echo "
    <script>
    var yakin = confirm('Apakah anda yakin ingin menambahkan data : Nama Ikan = $nama, Harga Ikan = $harga, Deskripsi Ikan = $deskripsi, Habitat Ikan = $habitat');
    if(yakin){
        document.location.href = 'index.php';
    }
    </script>";
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
        <form action="" method="post">
            <div class="row">
                <label for="nama">Masukkan Nama Ikan</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="row">
                <label for="harga">Masukkan Harga Ikan</label>
                <input type="number" name="harga" id="harga">
            </div>
            <div class="row">
                <label for="deskripsi">Masukkan Deskripsi Ikan</label>
                <input type="text" name="deskripsi" id="deskripsi">
            </div>
            <div class="row">
                <div class="left-input">
                    <label for="habitat">Pilih Habitat Ikan</label>
                </div>
                <div class="right-input">
                    <input type="radio" name="habitat" value="tawar" id="tawar">
                    <label for="tawar">Air Tawar</label>
                    <input type="radio" name="habitat" value="asin" id="asin">
                    <label for="asin">Air Asin</label>
                </div>
            </div>
            <div class="row akhir">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </section>


    <?php include "inc/footer.php" ?>
    <script src="js/script-index.js"></script>
</body>

</html>