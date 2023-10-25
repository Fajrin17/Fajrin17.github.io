<?php
date_default_timezone_set("Asia/Makassar");
?>
<header>
    <img class="logo" src="img/AQUAFISH-removebg-preview.png" alt="" />
    <p>Date : <?= date("l, d-m-Y e") ?></p>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="produk.php">Produk</a>
        <a href="add.php">Tambah</a>
        <button id="toggle-mode" onclick="return alert('Anda Akan Beralih Mode')">
            <img src="img/idea.png" width="16px" alt="" />
        </button>
    </nav>
</header>