<?php
// Session
session_start();

// IF untuk bila login tidak sebagai level 1  = 'Admin'
if ($_SESSION["level"] == 2) {
    header("location:../../error/401.php");
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
