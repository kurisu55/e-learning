<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?= $description; ?>" />
    <meta name="author" content="<?= $author; ?>" />
    <title><?= $title; ?></title>
    <link href="../../assets/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
    <!-- Own Style -->
    <link rel="stylesheet" href="../../assets/style.css">
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
            margin-top: -10px;
        }

        div #preview {
            padding: 10px;
            border: 1px solid black;
        }

        div.col-7 {
            padding-top: 15px;
            background-color: black;
            color: white;
            font-weight: bold;
        }

        /* Materi HTML ID */
        #idJudul {
            text-align: center;
            color: red;
        }

        #idIsi {
            background-color: gray;
        }

        /* Materi HTML Class*/
        .classJudul {
            color: red;
            text-align: center;
        }

        .classIsi {
            border: 1px solid;
        }

        .classSatu {
            font-size: 30px;
        }

        /* HTML CSS */
        h1.internalStyle {
            font-family: Arial;
        }

        p.internalStyle {
            font-family: 'Times New Roman';
        }

        .externalCSS h1 {
            color: red;
        }

        .externalCSS p {
            background-color: black;
            color: blue;
            font-family: Tahoma;
        }

        h1.externalCSS {
            color: red;
        }

        p.externalCSS {
            background-color: black;
            color: white;
            font-family: Tahoma;
        }

        .classBlue {
            color: blue;
            font-style: italic;
        }

        #idGreen {
            color: green;
        }

        table,
        thead,
        tbody,
        th,
        td {
            border-collapse: initial;
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
            <a href="../../editor/html/index.php" target="_blank" class="btn btn-danger"><i class="fas fa-laptop-code me-2"></i>Coba HTML</a>
        </div>
        <!-- Dropdown Mode Tutorial -->
        <div class="btn-group me-2">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Mode Tutorial</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">HTML</a></li>
                <li><a class="dropdown-item" href="../js">Javascript</a></li>
                <li><a class="dropdown-item" href="../php">PHP</a></li>
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