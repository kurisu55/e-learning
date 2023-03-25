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

// Tambah kuis
if (isset($_POST["btnBuat"])) {
    if (empty($_POST["mode"] || $_POST["soal"] || $_POST["a"] || $_POST["b"] || $_POST["c"] || $_POST["d"] || $_POST["jawaban"])) {
        $_SESSION["required"] = "<div class='alert alert-danger' role='alert'>
        <strong>Semua input</strong> harus diisi!
        </div>";
    } elseif (tambahSoal($_POST) > 0) {
        $_SESSION["success"] = "<div class='alert alert-success' role='alert'>
        <strong>Berhasil</strong> menambahkan Kuis!
        </div>";
    } elseif (tambahSoal($_POST) == 0) {
        $_SESSION["failed"] = "<div class='alert alert-danger' role='alert'>
        <strong>Gagal</strong> menambahkan Kuis!
        </div>";
    }
}

// Variabel Template
$title = 'Tambah Kuis';
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
                    if (isset($_SESSION["failed"])) {
                        echo $_SESSION["failed"];
                    }
                    if (isset($_SESSION["required"])) {
                        echo $_SESSION["required"];
                    }
                    unset($_SESSION["success"], $_SESSION["failed"], $_SESSION["required"]); ?>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="col-4 mb-3">
                            <label for="mode" class="form-label">Soal Mode</label>
                            <input class="form-control" list="datalistOptions" id="mode" name="mode" placeholder="Bahasa...">
                            <datalist id="datalistOptions">
                                <option value="HTML">
                                <option value="PHP">
                                <option value="Javascript">
                            </datalist>
                        </div>
                        <div class="col-10 mb-3">
                            <label for="soal" class="form-label">Soal Kuis</label>
                            <textarea class="ckeditor" id="editor2" rows="3" name="soal" name="soal"></textarea>
                        </div>
                        <div class="mb-3 col-4">
                            <label for="jawaban" class="form-label">Jawaban</label>
                            <input type="text" class="form-control" id="jawaban" placeholder="Jawaban..." name="jawaban" autocomplete="off">
                        </div>
                        <div class="mt-3 col-4">
                            <label for="" class="form-label">Pilihan Jawaban</label>
                            <div class="row">
                                <div class="input-group col-3 mb-1">
                                    <span class="input-group-text" id="a"><b>A</b></span>
                                    <input type="text" class="form-control" placeholder="Pilihan A" aria-label="Pilihan A" aria-describedby="a" name="a" autocomplete="off">
                                </div>
                                <div class="input-group col-3 mb-1">
                                    <span class="input-group-text" id="b"><b>B</b></span>
                                    <input type="text" class="form-control" placeholder="Pilihan B" aria-label="Pilihan B" aria-describedby="b" name="b" autocomplete="off">
                                </div>
                                <div class="input-group col-3 mb-1">
                                    <span class="input-group-text" id="c"><b>C</b></span>
                                    <input type="text" class="form-control" placeholder="Pilihan C" aria-label="Pilihan C" aria-describedby="c" name="c" autocomplete="off">
                                </div>
                                <div class="input-group col-3 mb-1">
                                    <span class="input-group-text" id="d"><b>D</b></span>
                                    <input type="text" class="form-control" placeholder="Pilihan D" aria-label="Pilihan D" aria-describedby="d" name="d" autocomplete="off">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-5" id="button" name="btnBuat">Buat Soal</button>
                    </form>
                </div>
            </div>
        </div>
</div>
</main>

<!-- SCRIPT PHP AKHIR -->
<?php
require '../template/footer.php';

?>