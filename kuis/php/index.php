<!-- SCRIPT PHP AWAL -->
<?php
// Session
session_start();

// Connection DB
require '../../authentication/db/conn_db.php';

// Query menampilkan soal
$query = mysqli_query($conn, "SELECT * FROM soal WHERE mode='php'");

$totalSoal = mysqli_num_rows($query);

// Aksi input jawaban
if (isset($_POST["submit"])) {
}

// Variabel Template
$title = 'PHP Kuis';
$author = 'Kristovel Adi S.';
$description = 'Quiz Programming, Kuis PHP, PHP, e-learning';


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
                    <table border="1" style="border: none;">
                        <tbody>
                            <form action="" method="post">
                                <?php $no = 0; ?>
                                <?php while ($row = mysqli_fetch_array($query)) : ?>
                                    <input type="hidden" name="id[]" value="<?= $row["id"]; ?>">
                                    <input type="hidden" name="jumlah" value="<?= $totalSoal; ?>">
                                    <tr>
                                        <td>
                                            <p> <?= $no = $no + 1; ?>. </p>
                                        </td>
                                        <td> <?= htmlspecialchars_decode($row["soal"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input class="form-check-input" type="radio" name="pilihan[<?= $row['id']; ?>]" id="a" value="<?= $row['a']; ?>">
                                            <?= $row['a']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilihan[<?= $row['id']; ?>]" id="b" value="<?= $row['b']; ?>">
                                                <?= $row['b']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilihan[<?= $row['id']; ?>]" id="c" value="<?= $row['c']; ?>">
                                                <?= $row['c']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilihan[<?= $row['id']; ?>]" id="d" value="<?= $row['d']; ?>">
                                                <?= $row['d']; ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-info mt-5" name="submit">Submit</button>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


    <!-- SCRIPT PHP AKHIR -->
    <?php
    require '../template/footer.php';

    ?>