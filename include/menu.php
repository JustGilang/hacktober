<?php
if($akses == 'admin'){
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CRM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=barang">Barang</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="nav-item" href="function/account.php?act=logout">logout</a>
            </form>
        </div>
    </div>
</nav>
<?php 
}
?>