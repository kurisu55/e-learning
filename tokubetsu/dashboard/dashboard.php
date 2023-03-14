<!-- SCRIPT PHP AWAL -->
<?php
// Session
session_start();

// IF untuk bila login tidak sebagai level 1  = 'Admin'
if (!isset($_SESSION["level"]) == 1) {
    header("location:../../error/401.php");
}

// Connection DB
require '../../authentication/db/conn_db.php';

// Query menampilkan materi
$resultMateriHTML = mysqli_query($conn, "SELECT * FROM materi WHERE mode='html'");
$resultMateriPHP = mysqli_query($conn, "SELECT * FROM materi WHERE mode='php'");
$resultMateriJS = mysqli_query($conn, "SELECT * FROM materi WHERE mode='javascript'");

// Query menampilkan kuis
$resultKuisHTML = mysqli_query($conn, "SELECT * FROM soal WHERE mode='html'");
$resultKuisPHP = mysqli_query($conn, "SELECT * FROM soal WHERE mode='php'");
$resultKuisJS = mysqli_query($conn, "SELECT * FROM soal WHERE mode='javascript'");


// Variabel Template
$title = 'Dashboard';

// Pemanggilan File Template
require '../template/head.php';
require '../template/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Chart Materi -->
                    <section>
                        <div class="row text-center">
                            <div class="col-6">
                                <h3>Dataset Materi</h3>
                                <h5>Total <?= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM materi")); ?></h5>
                                <div class="chart-container">
                                    <canvas class="p-5" id="materiChart"></canvas>
                                </div>
                            </div>
                            <div class="col-6">
                                <h3>Dataset Kuis</h3>
                                <h5>Total <?= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM soal")); ?></h5>
                                <div class="chart-container">
                                    <canvas class="p-5" id="kuisChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPT PHP AKHIR -->
    <?php
    require '../template/footer.php';

    ?>