<?php
include 'config.php';
session_start();
switch($_GET['act']){
    case 'login':
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$user' AND `password` = '$pass'");
        $row = mysqli_fetch_array($sql);
        $num = mysqli_num_rows($sql);

        if($num > 0){
            $_SESSION['user'] = $row['id'];
            $_SESSION['login'] = 'masuk';

            if($row['hak_akses'] == 'admin'){
                $_SESSION['akses'] = 'admin';
            } elseif($row['hak_akses'] == 'supplier'){
                $_SESSION['akses'] = 'supplier';
            }

            header("Location:../index.php");
        } else {
            header("Location:../index.php?msg=gagal login");
        }
    break;

    case 'logout':
        session_start();
        session_destroy();
        header("Location:../login.php");
    break;
}
?>