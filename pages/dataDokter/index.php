<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Profile Dokter</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                    <li class="breadcrumb-item active">Dokter</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <!-- Modal Tambah Data dokter -->
                            <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                aria-labelledby="addModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->


                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Dokter</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                    <th>Poli</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                            require 'config/koneksi.php';

                            $id = $_SESSION['id'];
                            
                            $query = "SELECT dokter.id, dokter.nama, dokter.alamat, dokter.no_hp, poli.nama_poli, dokter.password FROM dokter INNER JOIN poli ON dokter.id_poli = poli.id WHERE dokter.id = '$id'" ;
                            $result = mysqli_query($mysqli, $query);

                            while ($data = mysqli_fetch_assoc($result)) { 
                            ?>
                                <tr>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td style="white-space: pre-line;"><?php echo $data['alamat'] ?></td>
                                    <td><?php echo $data['no_hp'] ?></td>
                                    <td><?php echo $data['nama_poli'] ?></td>
                                    <td>
                                        <button type='button' class='btn btn-sm btn-warning edit-btn'
                                            data-toggle="modal"
                                            data-target="#editModal<?php echo $data['id'] ?>">Edit</button>
                                    </td>
                                    <!-- Modal Edit Data Dokter -->
                                    <div class="modal fade" id="editModal<?php echo $data['id'] ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addModalLabel">Edit Data Dokter</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="pages/dataDokter/updateDokter.php" method="post">
                                                        <input type="hidden" class="form-control" id="id" name="id"
                                                            value="<?php echo $data['id'] ?>" required>
                                                        <div class="form-group">
                                                            <label for="nama">Nama dokter</label>
                                                            <input type="text" class="form-control" id="nama"
                                                                name="nama" value="<?php echo $data['nama'] ?>"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat</label>
                                                            <textarea class="form-control" rows="3" id="alamat"
                                                                name="alamat"><?php echo $data['alamat'] ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_hp">No Hp</label>
                                                            <input type="text" class="form-control" id="no_hp"
                                                                name="no_hp" value="<?php echo $data['no_hp'] ?>"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="poli">Poli</label>
                                                            <select class="form-control" id="poli" name="poli">
                                                                <?php
                                                                require 'config/koneksi.php';
                                                                $query = "SELECT * FROM poli";
                                                                $results  = mysqli_query($mysqli,$query);
                                                                while ($dataPoli = mysqli_fetch_assoc($results)) {
                                                                    $selected = $dataPoli['id']
                                                                ?>
                                                                <option value="<?php echo $dataPoli['id'] ?>">
                                                                    <?php echo $dataPoli['nama_poli'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->