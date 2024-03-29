<!-- SCRIPT PHP AWAL -->
<?php
// Session
session_start();

// Connection DB
require '../../authentication/db/conn_db.php';

// Query menampilkan soal
$query = mysqli_query($conn, "SELECT * FROM soal WHERE mode='Javascript' AND aktif='Y'");

$totalSoal = mysqli_num_rows($query);

// Aksi input jawaban
if (isset($_POST["submit"])) {
    $pilihan = $_POST["pilihan"];
    $id_soal = $_POST["id"];
    $jumlah = $_POST["jumlah"];

    $score = 0;
    $benar = 0;
    $salah = 0;
    $kosong = 0;

    for ($i = 0; $i < $jumlah; $i++) {
        $nomor = $id_soal["$i"];

        if (empty($pilihan[$nomor])) {
            $kosong++;
        } else {
            // jika memilih
            $jawaban = $pilihan[$nomor];

            // cocokan jawaban dengan yang ada didatabase
            $sql = "SELECT * FROM soal WHERE id='$nomor' AND mode='Javascript' AND jawaban='$jawaban'";
            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

            $cek = mysqli_num_rows($query);

            if ($cek) {
                // jika jawaban cocok (benar)
                $benar++;
            } else {
                // jika salah
                $salah++;
            }
        }
        /*
				----------
				Nilai 100
				----------
				Hasil = 100 / jumlah soal * Jawaban Benar
			*/

        $sql = "SELECT * FROM soal WHERE mode='Javascript' AND aktif='Y'";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $jumlah_soal = mysqli_num_rows($query);
        $score = 100 / $jumlah_soal * $benar;
        $hasil = ceil($score);
    }
    // Simpan kedalam database
    $_SESSION["score"] = $hasil;
    $_SESSION["result"] = $benar;
    header("location:../Result.php?js");
}



// Variabel Template
$title = 'Javascript Kuis';
$author = 'Kristovel Adi S.';
$description = 'Quiz Programming, Kuis Javascript, Javascript, e-learning';


// Pemanggilan File Template
require '../template/head.php';
require '../template/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1><?= $title ?></h1>
            <div class="card mb-4">
                <div class="card-body">
                    <?php $no = 0; ?>
                    <?php while ($row = mysqli_fetch_array($query)) : ?>
                        <form action="" method="post">
                            <input type="hidden" name="id[]" value="<?= $row["id"]; ?>">
                            <input type="hidden" name="jumlah" value="<?= $totalSoal; ?>">
                            <span style="display:flex;"><?= $no = $no + 1; ?>.<?= htmlspecialchars_decode($row["soal"]); ?></span>
                            <div class="form-check col-5">
                                <input class="form-check-input p-1" type="radio" name="pilihan[<?= $row['id']; ?>]" id="a" value="<?= $row['a']; ?>" required>
                                <?= $row['a']; ?>
                            </div>
                            <div class="form-check col-5">
                                <input class="form-check-input p-1" type="radio" name="pilihan[<?= $row['id']; ?>]" id="b" value="<?= $row['b']; ?>" required>
                                <?= $row['b']; ?>
                            </div>
                            <div class="form-check col-5">
                                <input class="form-check-input p-1" type="radio" name="pilihan[<?= $row['id']; ?>]" id="c" value="<?= $row['c']; ?>" required>
                                <?= $row['c']; ?>
                            </div>
                            <div class="form-check mb-2 col-5">
                                <input class="form-check-input p-1" type="radio" name="pilihan[<?= $row['id']; ?>]" id="d" value="<?= $row['d']; ?>" required>
                                <?= $row['d']; ?>
                            </div>
                        <?php endwhile; ?>
                        <button type="submit" class="btn btn-info mt-5" name="submit">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </main>


    <!-- SCRIPT PHP AKHIR -->
    <?php
    require '../template/footer.php';

    ?>