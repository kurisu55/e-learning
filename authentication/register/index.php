<?php
include '../db/conn_db.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        header("location:../login/user/index.php");
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
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Sweetalert2 CSS -->
    <link rel="stylesheet" href="../../assets/sweetalert2/dist/sweetalert2.min.css">
    <!-- Sweetalert2 JS -->
    <script src="../../assets/sweetalert2/dist/sweetalert2.min.js"></script>


    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                    hsl(218, 41%, 35%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%),
                radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 41%, 45%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>
</head>

<body style="overflow: hidden;">
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        DAFTARKAN AKUNMU!
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Anda dapat memasuki kuis hanya dengan mendaftarkan akun kemudian melatih diri setelah melakukan pembelajaranmu.
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="" method="post">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label for="name" class="visually-hidden">Nama </label>
                                        <input type="text" class="form-control" id="name" name="nama" placeholder="Nama" autocomplete="off">
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
                                <p class="small"><a href="../login/user/index.php" class="link-success">Login</a> jika sudah punya akun!</p>
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