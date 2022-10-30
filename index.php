<?php include 'function/config.php';?>
<?php 
    error_reporting(0);
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    $user = $_SESSION['user'];
    $akses = $_SESSION['akses'];
    if($_SESSION['login'] != "masuk"){
		header("location: login.php?msg=login dulus $user");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRM</title>
    <?php include 'assets/assets_css.php';?>
</head>
<body>
    <?php
    include 'include/menu.php';

    if($akses == 'admin'){
        $loc = 'admin';
    } else {
        $loc = 'supplier';
    }

    $pages_dir = 'pages/' .$loc;
    if(!empty($_GET['p'])){
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);
                    
        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
        include($pages_dir.'/'.$p.'.php');
        } else {
        echo 'Halaman tidak ditemukan! :(';
        }
    } else {
    include($pages_dir.'/home.php');
    }
    ?>

    <?php include 'assets/assets_js.php';?>

</body>
</html>
