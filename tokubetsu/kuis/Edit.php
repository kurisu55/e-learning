<!-- SCRIPT PHP AWAL -->
<?php
// Session
session_start();

// IF untuk bila login tidak sebagai level 1  = 'Admin'
if ($_SESSION["level"] == 2) {
    header("location:../../error/401.php");
}

// Require DB
require '../../authentication/db/conn_db.php';

// Query menampilkan data soal yang akan diedit
$id = $_GET["id"];
$soal = mysqli_query($conn, "SELECT * FROM soal WHERE id=$id");
$result = mysqli_fetch_array($soal);

// Aksi Update data soal
if (isset($_POST["update"])) {

    // 
    if (empty($_POST["mode"] || $_POST["soal"] || $_POST["a"] || $_POST["b"] || $_POST["c"] || $_POST["d"] || $_POST["jawaban"])) {
        $_SESSION["required"] = "<div class='alert alert-danger' role='alert'>
        <strong>Semua input</strong> harus diisi!
        </div>";
    } elseif (updateSoal($_POST) > 0) {
        $_SESSION["success"] = "<div class='alert alert-success' role='alert'>
        <strong>Berhasil</strong> update soal!
        </div>";
        echo "<script>
        document.location.href = 'edit_kuis.php';
        </script>
        ";
    } else {
        $_SESSION["failed"] = "<div class='alert alert-danger' role='alert'>
        <strong>Gagal</strong> update soal!
        </div>";
    }
}

// Variabel Template
$title = 'Edit Kuis';
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
                    <?php if (isset($_SESSION["failed"])) {
                        echo $_SESSION["failed"];
                    }
                    if (isset($_SESSION["required"])) {
                        echo $_SESSION["required"];
                    }
                    unset($_SESSION["failed"], $_SESSION["required"]); ?>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="col-10 mb-3">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $result["id"]; ?>">
                            <input type="hidden" name="mode" value="<?= $result["mode"]; ?>">
                            <label for="soal" class="form-label">Soal Kuis</label>
                            <textarea class="ckeditor" id="editor3" rows="3" name="soal"><?= htmlspecialchars_decode($result["soal"]); ?></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="jawaban" class="form-label">Jawaban</label>
                            <input type="text" class="form-control" id="jawaban" placeholder="Jawaban..." name="jawaban" value="<?= htmlspecialchars_decode($result["jawaban"]); ?>" autocomplete="off">
                        </div>
                        <div class="ms-5 col-3">
                            <label for="">Kuis Aktif : </label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="aktif" value="Y" <?php if ($result["aktif"] == 'Y') {
                                                                                                                                                        $status = 'ON';
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } else {
                                                                                                                                                        $status = 'OFF';
                                                                                                                                                        '';
                                                                                                                                                    }; ?> onclick="aktifSubmit()">
                                <label class="form-check-label" for="flexSwitchCheckChecked"><?= $status; ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 col-4">
                        <label for="" class="form-label">Pilihan Jawaban</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="a"><b>A</b></span>
                            <input type="text" class="form-control" placeholder="Pilihan A" aria-label="Pilihan A" aria-describedby="a" name="a" value="<?= htmlspecialchars_decode($result["a"]); ?>" autocomplete="off">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="b"><b>B</b></span>
                            <input type="text" class="form-control" placeholder="Pilihan B" aria-label="Pilihan B" aria-describedby="b" name="b" value="<?= htmlspecialchars_decode($result["b"]); ?>" autocomplete="off">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="c"><b>C</b></span>
                            <input type="text" class="form-control" placeholder="Pilihan C" aria-label="Pilihan C" aria-describedby="c" name="c" value="<?= htmlspecialchars_decode($result["c"]); ?>" autocomplete="off">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="d"><b>D</b></span>
                            <input type="text" class="form-control" placeholder="Pilihan D" aria-label="Pilihan D" aria-describedby="d" name="d" value="<?= htmlspecialchars_decode($result["d"]); ?>" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-success mt-5" name="update">Update Soal</button>
                        </form>
                    </div>
                </div>
            </div>
    </main>

    <!-- SCRIPT PHP AKHIR -->
    <?php
    require '../template/footer.php';

    ?>