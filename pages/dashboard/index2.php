<?php
    require 'config/koneksi.php';
    $id_poli = $_SESSION['id_poli'];

    $query_poli = "SELECT nama_poli FROM poli WHERE id = $id_poli";
    $result = mysqli_query($mysqli,$query_poli);

    if ($result) {
        // Ambil hasil query
        $row = mysqli_fetch_assoc($result);

        // Tampilkan nama poli
        $nama_poli = $row['nama_poli'];
    } else {
        // Handle error jika query gagal
        $nama_poli = "Tidak dapat mendapatkan nama poli";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        .text-white {
            font-weight: 500;
        }

        h1.text-white {
            font-size: 2.2rem;
            font-family: 'Arial', sans-serif;
        }

        h4.text-white {
            font-size: 1.6rem;
            font-family: 'Arial', sans-serif;
        }

        h5.text-white {
            font-size: 1.3rem;
            font-family: 'Arial', sans-serif;
        }

        .info-box-text {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .info-box-number {
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="content-header py-5 text-white" style="background-color: navy;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-center">Selamat Datang <b>Dokter <?php echo $username ?></b></h1><br>
                    <h4 class="m-0 text-center"><?php echo $nama_poli; ?></h4>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<section class="content mt-5">
    <div class="container-fluid">

        <!-- Info boxes (existing content) -->
        <div class="row">
            <!-- ... isi tetap sama ... -->
        </div>
        <!-- /.row -->

        <!-- Custom Content Here (existing content) -->
        <div class="row">
            <!-- ... isi tetap sama ... -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

    <!-- Link to Bootstrap JS and other necessary scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>