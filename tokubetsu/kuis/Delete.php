<?php
// Session
session_start();

// IF untuk bila login tidak sebagai level 1  = 'Admin'
if (isset($_SESSION["level"]) && $_SESSION["level"] == 1) {
    // halaman admin
} else {
    // jika pengguna tidak memiliki akses level 1
    if (isset($_SESSION["level"]) && $_SESSION["level"] == 2) {
        // arahkan pengguna dengan akses level 2 ke halaman index
        header("location:../../error/401.php");
        exit;
    } else {
        // jika pengguna belum login, arahkan ke halaman login
        header("location:../../error/401.php");
        exit;
    }
}

// Require DB
require '../../authentication/db/conn_db.php';

$id = $_GET["id"];

// Aksi hapus
if (hapusSoal($id) > 0) {
    $_SESSION["delete"] = "<div class='alert alert-danger' role='alert'>
    <strong class='text-success'>Berhasil</strong> hapus soal!
    </div>";
    echo "<script>
    document.location.href = 'edit_kuis.php';
    </script>
    ";
} else {
    $_SESSION["failedDelete"] = "<div class='alert alert-danger' role='alert'>
    <strong>Gagal</strong> hapus soal!
    </div>";
    echo "<script>
    document.location.href = 'edit_kuis.php;
    </script>
    ";
}
