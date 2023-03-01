<!-- SCRIPT AWAL PHP  -->
<?php
// Require DB
require '../db/conn_db.php';

// IF untuk aksi tombol register
if (isset($_POST["register"])) {
    if (empty($_POST["name"] || $_POST["username"] || $_POST["email"] || $_POST["password"])) {
        $_SESSION["required"] = "<div class='alert alert-danger' role='alert'>
        <strong>Lengkapi</strong> semua form!
        </div>";
    } elseif (registrasi($_POST) > 0) {
        $_SESSION["registered"] = "<div class='alert alert-success' role='alert'>
        <strong>Terdaftar.</strong> Silahkan login akun Anda!
        </div>";
        header("location:../login/index.php");
    } else {
        echo mysqli_error($conn);
    }
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
    <title>Register</title>
    <link href="../../assets/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
    <link href="../../assets/style.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../assets/img/terminal-solid.svg">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar bg-body-tertiary bg-white fixed-top border">
        <div class="container-fluid">
            <a class="navbar-brand btn btn-outline-dark" href="../../index.php">
                <img src="../../assets/img/terminal-solid.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Code
            </a>
        </div>
    </nav>
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-1 mb-lg-0" style="z-index: 10">
                    <h1 class="display-5 fw-bold ls-tight" style="text-align: center;">
                        DAFTAR AKUN!
                    </h1>
                    <img src="../../assets/img/vecteezy_programmer-people-concept-use-laptop-and-programming-code_.jpg" alt="" class="img img-fluid">
                    <a href="https://www.vecteezy.com/free-vector/coding" style="display: inline;">Coding Vectors by Vecteezy</a>
                </div>

                <div class="col-lg-6 mt-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="" method="post">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label for="name" class="visually-hidden">Nama </label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama" autocomplete="off">
                                    </div>
                                </div>

                                <!-- Username input -->
                                <div class="form-outline mb-4">
                                    <label for="username" class="visually-hidden">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label for="email" class="visually-hidden">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label for="password" class="visually-hidden">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                                </div>
                                <?php if (isset($_SESSION["required"])) {
                                    echo $_SESSION["required"];
                                    unset($_SESSION["required"]);
                                }
                                if (isset($_SESSION["duplicated"])) {
                                    echo $_SESSION["duplicated"];
                                    unset($_SESSION["duplicated"]);
                                }
                                ?>
                                <p class="small"><a href="../login/index.php" class="link-success">Login</a> jika sudah punya akun!</p>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block col col-md-12" class="register" name="register">
                                    Daftar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>

</body>

</html>