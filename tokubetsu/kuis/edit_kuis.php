<!-- SCRIPT PHP AWAL -->
<?php
// Session
session_start();

// IF untuk bila login tidak sebagai level 1  = 'Admin'
if (!isset($_SESSION["level"]) == 1) {
    header("location:../../error/401.php");
}

// Require DB
require '../../authentication/db/conn_db.php';

// Set On/Off Kuis
$soal = mysqli_query($conn, "SELECT * FROM soal");
$totalkuis = mysqli_num_rows($soal);
for ($x = 1; $x <= $totalkuis; $x++) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["$x"])) {
            $aktif = $_POST["$x"];
        } elseif (empty($_POST["$x"])) {
            $aktif = 'N';
        }
        $query = "UPDATE soal SET aktif='$aktif' WHERE id=$x";
        mysqli_query($conn, $query);
    }
}

// Notice Aktif kuis
$html = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM soal WHERE mode='html' AND aktif='Y'"));
$php = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM soal WHERE mode='php' AND aktif='Y'"));
$js = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM soal WHERE mode='js' AND aktif='Y'"));

// Query filter soal
if (isset($_POST["html"])) {
    $soal = mysqli_query($conn, "SELECT * FROM soal WHERE mode='html'");
} elseif (isset($_POST["php"])) {
    $soal = mysqli_query($conn, "SELECT * FROM soal WHERE mode='php'");
} elseif (isset($_POST["js"])) {
    $soal = mysqli_query($conn, "SELECT * FROM soal WHERE mode='js'");
} else {
    $soal = mysqli_query($conn, "SELECT * FROM soal");
}

// Variabel Template
$title = 'List Edit Kuis';
$author = 'Kristovel Adi S.';

// Pemanggilan File Template
require '../template/head.php';
require '../template/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col order-first mt-4">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col"></div>
                <div class="col order-last mt-4">
                    <?php if (isset($_SESSION["success"])) {
                        echo $_SESSION["success"];
                    }
                    if (isset($_SESSION["delete"])) {
                        echo $_SESSION["delete"];
                    }
                    if (isset($_SESSION["failedDelete"])) {
                        echo $_SESSION["failedDelete"];
                    }
                    unset($_SESSION["success"], $_SESSION["delete"], $_SESSION["failedDelete"]); ?>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <section class="my-1">
                        <!-- Button Filter Kuis -->
                        <h2>Filter Kuis</h2>
                        <form action="" method="get">
                            <div class="row justify-content-around mt-2">
                                <div class="row col-8">
                                    <ul class="nav ms-3">
                                        <li class="nav-item">
                                            <a href="" class="btn btn-danger me-2"><i class="fa-brands fa-html5"></i> HTML</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="btn btn-info me-2"><i class="fa-brands fa-php"></i> PHP</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="btn btn-warning me-5"><i class="fa-brands fa-js"></i> Javascript</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="edit_kuis.php" class="btn btn-secondary"><i class="fas fa-filter"></i> Reset</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <span class="disabled">Kuis aktif :</span>
                                    <span class="disabled me-1">HTML : <?= $html; ?></span>
                                    <span class="disabled me-1">PHP : <?= $php; ?></span>
                                    <span class="disabled"> Javacript : <?= $js; ?></span>
                                </div>
                            </div>
                        </form>
                    </section>
                    <hr class="bg-black py-1">
                    <section>
                        <div class="col">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Mode</th>
                                        <th scope="col">Soal</th>
                                        <th scope="col">Jawaban</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <form action="" method="post" id="formSetAktif">
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php while ($row = mysqli_fetch_assoc($soal)) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= htmlspecialchars_decode($row["mode"]); ?></td>
                                                <td style="overflow-y: auto; width:300px;"><?= htmlspecialchars_decode($row["soal"]); ?></td>
                                                <td><?= $row["jawaban"]; ?></td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="<?= $i; ?>" value="Y" <?php if ($row["aktif"] == 'Y') {
                                                                                                                                                                                    $status = 'ON';
                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                } else {
                                                                                                                                                                                    $status = 'OFF';
                                                                                                                                                                                    '';
                                                                                                                                                                                }; ?> onclick="aktifSubmit()">
                                                        <label class="form-check-label" for="flexSwitchCheckChecked"><?= $status; ?></label>
                                                    </div>
                                                    <a href="Edit.php?id=<?= $row["id"]; ?>" class="btn btn-warning me-2">Edit</a>
                                                    <a href="Delete.php?id=<?= $row["id"]; ?>" class="btn btn-danger my-1" onclick="return confirm('Konfirmasi hapus?');">Delete</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                                </form>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
    </main>

    <!-- SCRIPT PHP AKHIR -->
    <?php
    require '../template/footer.php';

    ?>