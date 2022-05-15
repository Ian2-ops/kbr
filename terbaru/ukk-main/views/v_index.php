<?php
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Diri</title>
    <link rel="stylesheet" href="assets/bs/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css"> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class=" container-fluid ">
            <p class=" navbar-brand text-white">Peduli Diri</p>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white<?php if ($page == 'home' || empty($page)) {
                                                            echo "active";
                                                        } ?> nav-item" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white<?php if ($page == 'catatan_perjalanan') {
                                                            echo "active";
                                                        } ?> nav-item" href="?page=catatan_perjalanan">Catatan Perjalanan</a>
                    </li>

                </ul>
                <div class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <li><a class="nav-link text-white" aria-current="page" href="logout.php">Logout</a></li>
                    </li>
                </div>
    </nav>

    <!-- page -->
    <div class="container">
        <div class="row">
            <div class="col-lg mt-5">
                <?php
                if ($page == 'catatan_perjalanan') {
                    include "v_history.php";
                } elseif ($page == 'home' || empty($page)) {
                    include 'v_home.php';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal" id="logout" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Logout</h5>
                </div>
                <div class="modal-body">
                    <p>Apakah kamu yakin?</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="logout.php">Yakin</a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bs/js/bootstrap.js"></script>
    <!-- <script src="assets/js/bootstrap.js"></script> -->
</body>

</html>