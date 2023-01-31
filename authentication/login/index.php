<?php
// Session
session_start();

// Pemanggilan conn_db
require '../db/conn_db.php';

if (isset($_POST["login"])) {

    // Ambil data saat input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Menampilkan data berdasarkan username
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

    // Cek data bila benar
    if (mysqli_num_rows($result) === 1) {

        // Variabal yang berisikan record data
        $row = mysqli_fetch_assoc($result);

        $name = $row["name"];

        // Lakukan pengecekan password, lalu IF selanjutnya melakukan pengecekan level user ke halaman tertentu
        if (password_verify($password, $row["password"])) {
            if ($row["level"] == '1') {
                $_SESSION["level"] = '1';
                $_SESSION["username"] = $username;
                $_SESSION["name"] = $name;
                header("location:../../tokubetsu/dashboard.php");
                exit;
            } elseif ($row["level"] == '2') {
                $_SESSION["level"] = '2';
                $_SESSION["username"] = $username;
                $_SESSION["name"] = $name;
                header("location:../../index.php");
                exit;
            }
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="../../assets/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
    <link href="../../assets/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="../../assets/img/vecteezy_programer-learning-programming-languages-by-computer-laptop_.jpg" class="img-fluid" alt="Sample image">
                    <div class="small"><a href="https://www.vecteezy.com/free-vector/programming" class="link-dark">Programming Vectors by Vecteezy</a></div>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="divider d-flex align-items-center my-4">
                        <h1 class="text-center fw-bold mx-3 mb-0">Login</h1>
                    </div>
                    <?php if (isset($error)) : ?>
                        <p class="alert alert-danger" role="alert">Username atau password salah!</p>
                    <?php endif ?>
                    <form action="" method="post">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label for="username" class="visually-hidden">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label for="password" class="visually-hidden">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-2 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="login">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Ingin daftar <a href="../register/index.php" class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2023. All rights reserved.
            </div>
            <!-- Copyright -->

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>
</body>

</html>