<?php
// Session
session_start();

$url = $_SERVER["REQUEST_URI"];
if (parse_url($url, PHP_URL_QUERY) == 'html') {
    $title = 'Hasil Kuis HTML';
    $btnRedirect = "<a href='html/' class='btn btn-success mt-5'>Selesai</a>";
} elseif (parse_url($url, PHP_URL_QUERY) == 'js') {
    $title = 'Hasil Kuis Javascript';
    $btnRedirect = "<a href='js/' class='btn btn-success mt-5'>Selesai</a>";
} elseif (parse_url($url, PHP_URL_QUERY) == 'php') {
    $title = 'Hasil Kuis PHP';
    $btnRedirect = "<a href='php/' class='btn btn-success mt-5'>Selesai</a>";
} else {
    $title = '';
    $btnRedirect = '';
}

// Pemanggilan File Template
require 'template/head.php';
require 'template/sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <link href="../assets/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/img/terminal-solid.svg" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .card-body {
            text-align: center;
            height: 480px;
        }

        .middle-content {
            margin-top: 10%;
            margin-bottom: 10%;
        }
    </style>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-white bg-white">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-center" href="../index.php"><i class="fas fa-terminal"></i> Code</a>
        <div class="col-lg-9 col-sm-8"></div>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-5 me-lg-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <?php if (isset($_SESSION["level"])) {
                        echo "<p class='dropdown-item'>" . $_SESSION["name"] . "</p>";
                        echo "<hr class='dropdown-divider'>";
                        echo "<li><a class='dropdown-item' href='../authentication/login/logout.php'>Logout</a></li>";
                    } else {
                        echo "<li><a class='dropdown-item' href='../authentication/login/index.php'>Login</a></li>";
                    }; ?>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Sidebar -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link active px-5 border" href="html/index.php">
                            HTML Kuis
                        </a>
                        <a class="nav-link active px-5 border" href="php/index.php">
                            PHP Kuis
                        </a>
                        <a class="nav-link active px-5 border" href="js/index.php">
                            Javascript Kuis
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Content -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1><?= $title ?></h1>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-info">Hasil Kuis</h3>
                            <div class="card mx-auto col-5">
                                <div class="middle-content">
                                    <?php if (isset($_SESSION["result"])) {
                                        echo "<p class='mt-2'>Total Jawaban Benar: " . $_SESSION["result"] . "</p>";
                                        if ($_SESSION["score"] <= 49) {
                                            echo "<div class='alert alert-danger col-3 mx-auto' role='alert'>
                                    <h1 class='text-danger'>" . $_SESSION["score"] . "</h1>
                                    </div>";
                                        } elseif ($_SESSION["score"] >= 50 && $_SESSION["score"] <= 79) {
                                            echo "<div class='alert alert-warning col-3 mx-auto' role='alert'>
                                    <h1 class='text-warning'>" . $_SESSION["score"] . "</h1>
                                    </div>";
                                        } elseif ($_SESSION["score"] >= 80 && $_SESSION["score"] <= 100) {
                                            echo "<div class='alert alert-success col-3 mx-auto' role='alert'>
                                    <h1 class='text-success'>" . $_SESSION["score"] . "</h1>
                                    </div>";
                                        }
                                    } else {
                                        echo "<div class='alert alert-dark col-3 mx-auto' role='alert'>
                                    <h1 class='text-dark'>0</h1>
                                    </div>";
                                    }
                                    unset($_SESSION["result"], $_SESSION["score"]); ?>
                                </div>
                                <div class="mx-auto mb-1">
                                    <?= $btnRedirect; ?>
                                </div>
                            </div>
                            <a href="#" style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad minima eveniet expedita facere harum, itaque, incidunt dolor eos nesciunt numquam voluptatibus quae eius at nemo. Nisi voluptatem minima voluptatum.</a>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Code 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>
</body>

</html>