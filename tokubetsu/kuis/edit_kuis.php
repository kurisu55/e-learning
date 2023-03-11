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

// Notice Aktif kuis
$html = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM soal WHERE mode='html' AND aktif='Y'"));
$php = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM soal WHERE mode='php' AND aktif='Y'"));
$js = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM soal WHERE mode='Javascript' AND aktif='Y'"));

// Query filter soal
if (isset($_POST["html"])) {
    $soal = mysqli_query($conn, "SELECT * FROM soal WHERE mode='html'");
} elseif (isset($_POST["php"])) {
    $soal = mysqli_query($conn, "SELECT * FROM soal WHERE mode='php'");
} elseif (isset($_POST["js"])) {
    $soal = mysqli_query($conn, "SELECT * FROM soal WHERE mode='Javascript'");
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
                        <form action="" method="post">
                            <div class="row justify-content-around mt-2">
                                <div class="row col-8">
                                    <ul class="nav ms-2">
                                        <li class="nav-item">
                                            <button type="submit" name="html" class="btn btn-danger me-2"><i class="fa-brands fa-html5"></i> HTML</button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="submit" name="php" class="btn btn-info me-2"><i class="fa-brands fa-php"></i> PHP</button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="submit" name="js" class="btn btn-warning me-5"><i class="fa-brands fa-js"></i> Javascript</button>
                                        </li>
                                        <li class="nav-item">
                                            <a type="submit" href="edit_kuis.php" class="btn btn-secondary"><i class="fas fa-filter"></i> Reset</a>
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
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Mode</th>
                                        <th scope="col">Soal</th>
                                        <th scope="col">Jawaban</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php while ($row = mysqli_fetch_assoc($soal)) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= htmlspecialchars_decode($row["mode"]); ?></td>
                                            <td><?= htmlspecialchars_decode($row["soal"]); ?></td>
                                            <td><?= $row["jawaban"]; ?></td>
                                            <td>
                                                <?php if ($row["aktif"] == 'Y') {
                                                    echo "<span class='fw-bold text-success p-1' title='ON'>ON</span>";
                                                } else {
                                                    echo "<span class='fw-bold text-danger p-1' title='OFF'>OFF</span>";
                                                }; ?>
                                                <a href="Edit.php?id=<?= $row["id"]; ?>" class="btn btn-warning ms-1 me-2">Edit</a>
                                                <a href="Delete.php?id=<?= $row["id"]; ?>" class="btn btn-danger my-1" onclick="return confirm('Konfirmasi hapus?');">Delete</a>
                                            </td>
                                        </tr>
                                </tbody>
                                <?php $i++; ?>
                            <?php endwhile; ?>
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