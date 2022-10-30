<?php
include 'config.php';

switch($_GET['act']){
    case 'barang':
        $id = $_POST['id'];
        $barang = $_POST['barang'];
        $stok = $_POST['stok'];
        $keterangan = $_POST['keterangan'];
        $min = $_POST['min'];
        $status = "Aktif";

        $sql = mysqli_query($conn, "UPDATE barang SET barang = '$barang', stok = '$stok', `min` = '$min', keterangan = '$keterangan' WHERE id = '$id'");

        if($sql){
            header("Location:../index.php?p=barang");
        } else {
            header("Location:../index.php?p=barang&msg=gagal");
        }
    break;
}
?>