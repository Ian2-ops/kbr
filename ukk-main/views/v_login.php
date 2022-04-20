<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/bs/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="assets/media/undraw_remotely_2j6y.png" alt="image" class="img-fluid">
            </div>
            <div class="col-md-6 mt-4">
                <h3 class="sign-text mb-5">Login</h3>
                <?php echo @$alert ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="number" name="nik" class="form-control mb-4" placeholder="NIK" required>
                        <input type="text" name="nama" class="form-control mb-4" placeholder="Nama Lengkap" required>
                    </div>
                    <!-- Bukan button bootstrap, harus nambah sendiri di style.css -->
                    <button class="btn btn-outline-bluish" name="login">Login</button>
                    <!-- <a href="register.php" class="btn btn-outline-bluish">Belum punya akun? Daftar disini!</a> -->
                </form>
            </div>
        </div>
    </div>

    <script src="assets/bs/js/bootstrap.js"></script>
</body>


</html>