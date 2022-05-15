<?php
$data = mysqli_query($mysqli, "SELECT * FROM catatan WHERE nik='$_SESSION[nik]'");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bs/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <div class="card-header bg-bluish text-white">
            FORM EDIT DATA CATATAN PERJALANAN
        </div>

        <div class="card-body py-4">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <?php
                    $user = mysqli_fetch_assoc($data);
                    ?>
                    <form action="edit.php" method="POST">
                        <input type="hidden" name="cid" value="<?= $user['cid'] ?>">
                        <label for="">Tanggal</label>
                        <input value="<?= $user['tanggal'] ?>" type="date" name="tanggal" class="form-control mt-2 mb-4" required>
                        <label for="">Jam</label>
                        <input value="<?= $user['jam'] ?>" type="time" name="jam" class="form-control mt-2 mb-4" required>
                        <label for="">Lokasi yang dikunjungi</label>
                        <input value="<?= $user['lokasi'] ?>" type="text" name="lokasi" class="form-control mt-2 mb-4" required>
                        <label for="">Suhu tubuh</label>
                        <input value="<?= $user['suhu'] ?>" type="number" name="suhu" class="form-control mt-2 mb-4" required>
                        <div class="form-inline">
                            <button name="simpan" class="btn btn-primary">Simpan</button>
                            <button name="reset" type="reset" class="btn btn-danger">Reset</button>
                            <a href="index.php?page=catatan_perjalanan" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>