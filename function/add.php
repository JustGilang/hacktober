<?php
include 'config.php';

switch($_GET['act']){
    case 'barang':
        $barang = $_POST['barang'];
        $stok = $_POST['stok'];
        $keterangan = $_POST['keterangan'];
        $min = $_POST['min'];
        $status = "Aktif";

        $sql = mysqli_query($conn, "INSERT INTO barang (barang, stok, `min`, keterangan, `status`) VALUES
        ('$barang', '$stok', '$min', '$keterangan', '$status')");

        if($sql){
            header("Location:../index.php?p=barang");
        } else {
            header("Location:../index.php?p=barang&msg=gagal");
        }
    break;
}
?>