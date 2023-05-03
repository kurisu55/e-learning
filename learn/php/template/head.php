<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <link href="../../assets/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
    <!-- Code Mirror -->
    <link rel="stylesheet" href="../../assets/codemirror/lib/codemirror.css">
    <!-- Code Mirror Theme -->
    <link rel="stylesheet" href="../../assets/codemirror/theme/base16-light.css">
    <!-- Font Roboto -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../assets/img/terminal-solid.svg" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        hr {
            margin-top: -10px;
        }

        legend {
            margin-top: 10px;
        }

        div #preview {
            padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-white bg-white">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-center" href="../../index.php"><i class="fas fa-terminal"></i> Code</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Code Editor Button-->
        <div class="d-none d-md-inline-block ms-auto me-0 me-md-3 my-2 my-md-0">
            <a href="../../editor/php/index.php" target="_blank" class="btn btn-info"><i class="fas fa-laptop-code me-2"></i>Coba PHP</a>
        </div>
        <div class="btn-group me-2">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Mode Tutorial</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../html">HTML</a></li>
                <li><a class="dropdown-item" href="../js">Javascript</a></li>
                <li><a class="dropdown-item" href="index.php">PHP</a></li>
            </ul>
        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-5 me-lg-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <?php if (isset($_SESSION["level"])) {
                        echo "<p class='dropdown-item'>" . $_SESSION["name"] . "</p>";
                        echo "<hr class='dropdown-divider'>";
                        echo "<li><a class='dropdown-item' href='../../authentication/login/logout.php'>Logout</a></li>";
                    } else {
                        echo "<li><a class='dropdown-item' href='../../authentication/login/index.php'>Login</a></li>";
                    }; ?>
                </ul>
            </li>
        </ul>
    </nav>