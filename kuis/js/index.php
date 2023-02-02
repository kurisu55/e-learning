<!-- SCRIPT PHP AWAL -->
<?php
// Session
session_start();

// Connection DB
require '../../authentication/db/conn_db.php';

// Mengatur Pagination dari database
$dataPerHalaman = 1;
$halaman = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$halamanAwal = ($halaman > 1) ? ($halaman * $dataPerHalaman) - $dataPerHalaman : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($conn, "SELECT * FROM soal WHERE mode='js'");
$result = mysqli_num_rows($data);
$totalHalaman = ceil($result / $dataPerHalaman);

// Menampilkan soal dari database
$soal = mysqli_query($conn, "SELECT * FROM soal WHERE mode='js' AND aktif='Y' LIMIT $halamanAwal,$dataPerHalaman");
$i = $halamanAwal + 1;

// Variabel Template
$title = 'Javascript Kuis';
$author = 'Kristovel Adi S.';
$description = 'Quiz Programming, Kuis JS, Kuis Javascript, Javascript, JS, e-learning';

// Pemanggilan File Template
require '../template/head.php';
require '../template/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title ?></h1>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="m-5">
                        <form action="" method="post">
                            <?php while ($row = mysqli_fetch_array($soal)) : ?>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <p style="width: 20px;"><?= $i++ . ". "; ?></p>
                                    </li>
                                    <li class="nav-item">
                                        <span><?= htmlspecialchars_decode($row["soal"]); ?></span>
                                    </li>
                                </ul>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <div class="border" id="bg-tr">
                                            <p class="py-1 radio-answer" id="a"><input type="radio" name="<?= $row["id"]; ?>" value="a"><?= $row["a"]; ?></p>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="border" id="bg-tr">
                                            <p class="py-2 radio-answer" id="b"><input type="radio" name="<?= $row["id"]; ?>" value="b"><?= $row["b"]; ?></p>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="border" id="bg-tr">
                                            <p class="py-2 radio-answer" id="c"><input type="radio" name="<?= $row["id"]; ?>" value="c"><?= $row["c"]; ?></p>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="border" id="bg-tr">
                                            <p class="py-2 radio-answer" id="d"><input type="radio" name="<?= $row["id"]; ?>" value="d"><?= $row["d"]; ?></p>
                                        </div>
                                    </li>
                                </ul>
                            <?php endwhile; ?>
                        </form>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if ($halaman > 1) {
                                                    echo "href='?page=$previous'";
                                                } ?> aria-label="Previous" title="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for ($x = 1; $x <= $totalHalaman; $x++) {
                    ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" <?php if ($halaman < $totalHalaman) {
                                                    echo "href='?page=$next'";
                                                } ?> aria-label="Next" title="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>


    <!-- SCRIPT PHP AKHIR -->
    <?php
    require '../template/footer.php';

    ?>