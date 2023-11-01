<?php
require "inc/function.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "DELETE FROM ikan WHERE id_ikan = $id");

if ($result) {
    echo "
    <script>
    alert('Berhasil menghapus data!');
    document.location.href='produk.php';
    </script>";
}
