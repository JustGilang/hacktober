<br>
<?php
$get_barang = mysqli_query($conn, "SELECT * FROM barang WHERE `status` = 'aktif'");
$num_barang = mysqli_num_rows($get_barang);
$row_barang = mysqli_fetch_array($get_barang);
$get_barang_limit = mysqli_query($conn, "SELECT * FROM barang WHERE `status` = 'aktif' AND stok <= '$row_barang[min]'");
$num_barang_limit = mysqli_num_rows($get_barang_limit);
$get_pesanan = mysqli_query($conn, "SELECT * FROM pesanan WHERE `status` = 'menunggu'");
$num_pesanan = mysqli_num_rows($get_pesanan);
$get_pesanan_p = mysqli_query($conn, "SELECT * FROM pesanan WHERE `status` = 'pengiriman'");
$num_pesanan_p = mysqli_num_rows($get_pesanan_p);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-boy">
                    Jumlah Barang <br>
                    <?= $num_barang?> Barang.
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-boy">
                    Jumlah Barang Limit <br>
                    <?= $num_barang_limit?> Barang.
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-boy">
                    Jumlah Pesanan Menunggu <br>
                    <?= $num_barang_limit?> Pesanan.
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-boy">
                    Jumlah Pesanan Dikirim <br>
                    <?= $num_barang_limit?> Barang.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pesanan</div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barang</th>
                                <th>Stok</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = mysqli_query($conn, "SELECT * FROM pesanan WHERE `status` != 'selesai'");
                            while($row = mysqli_fetch_array($sql)){
                                $get_data_barang = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '$row[id_barang]'");
                                $row_data_barang = mysqli_fetch_array($get_data_barang);
                            ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $row_data_barang['barang']?></td>
                                <td><?= $row['stok']?></td>
                                <td><?= $row['status']?></td>
                                <td><a href="function/delete.php?act=barang&id=<?= $row['id']?>">Hapus</a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>