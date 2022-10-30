<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="text-right"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</button></div>
            <br>
            <div class="card">
                <div class="card-header">Barang</div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barang</th>
                                <th>Stok</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = mysqli_query($conn, "SELECT * FROM barang");
                            while($row = mysqli_fetch_array($sql)){
                            ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $row['barang']?></td>
                                <td><?= $row['stok']?></td>
                                <td><?= $row['keterangan']?></td>
                                <td><?= $row['status']?></td>
                                <td>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#ubah<?= $row['id']?>">Ubah</a>
                                    <a href="function/delete.php?act=barang&id=<?= $row['id']?>" onclick="return confirm('Yakin Hapus ?')">Hapus</a>
                                </td>
                            </tr>

                            <div class="modal fade" id="ubah<?= $row['id']?>">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Barang</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="function/edit.php?act=barang" method="POST">
                                            <label for="">Nama Barang</label>
                                            <input type="text" class="form-control" name="id" id="" value="<?= $row['id']?>" hidden>
                                            <input type="text" class="form-control" name="barang" id="" value="<?= $row['barang']?>">
                                            <label for="">Stok</label>
                                            <input type="number" class="form-control" name="stok" id="" value="<?= $row['stok']?>">
                                            <label for="">Minimal Stok</label>
                                            <input type="number" class="form-control" name="min" id="" value="<?= $row['min']?>">
                                            <label for="">Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan" value="<?= $row['keterangan']?>" id=""><br>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tambah">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Barang</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="function/add.php?act=barang" method="POST">
                        <label for="">Nama Barang</label>
                        <input type="text" class="form-control" name="barang" id="">
                        <label for="">Stok</label>
                        <input type="number" class="form-control" name="stok" id="">
                        <label for="">Minimal Stok</label>
                        <input type="number" class="form-control" name="min" id="">
                        <label for="">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id=""><br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>