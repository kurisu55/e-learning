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

// Tambah Materi
if (isset($_POST["tambah"])) {
    if (empty($_POST["mode"] || $_POST["judul"] || $_POST["isi"])) {
        $_SESSION["required"] = "<div class='alert alert-danger' role='alert'>
        <strong>Semua input</strong> harus diisi!
        </div>";
    } elseif (tambahMateri($_POST) > 0) {
        $_SESSION["success"] = "<div class='alert alert-success' role='alert'>
        <strong>Berhasil</strong> menambahkan materi!
        </div>";
    } elseif (tambahMateri($_POST) == 0) {
        $_SERVER["failed"] = "<div class='alert alert-danger' role='alert'>
        <strong>Gagal</strong> menambahkan materi!
        </div>";
    }
}

// Variabel Template
$title = 'Materi';
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
                        <div class="row">
                            <div class="col-4 mb-3">
                                <label for="mode" class="form-label">Mode Bahasa</label>
                                <input class="form-control" list="datalistOptions" id="mode" name="mode" placeholder="Bahasa...">
                                <datalist id="datalistOptions">
                                    <option value="HTML">
                                    <option value="PHP">
                                    <option value="Javascript">
                                </datalist>
                            </div>
                            <div class="mb-3 col-4">
                                <label for="judul" class="form-label">Judul Materi</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label for="materi" class="form-label">Isi Materi</label>
                            <textarea class="ckeditor" id="editor1" rows="3" name="isi" style="height: 175px;">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script></textarea>
                        </div>
                        <div class="col mb-3">
                            <legend class="small"><i class="fas fa-eye"></i> Preview Materi</legend>
                            <iframe class="py-1 mb-1" id="preview" frameborder="1" width="100%" height="300" style="border: 0.5px solid;"></iframe>
                        </div>
                        <button class="btn btn-success mt-3" id="button" type="submit" name="tambah">Tambah Materi</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPT PHP AKHIR -->
    <?php
    require '../template/footer.php';

    ?>