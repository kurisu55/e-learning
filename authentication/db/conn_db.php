<?php
// Inisiasi DB
$servername = "localhost";
$database = "e-learning";
$username = "root";
$password = "";

// Connection DB
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek Koneksi
// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }
// echo "Koneksi berhasil";
// mysqli_close($conn);


// Function registrasi user
function registrasi($data)
{
    global $conn;

    $nama = htmlspecialchars(stripslashes($data["nama"]));
    $username = htmlspecialchars(stripslashes($data["username"]));
    $level = '2';
    $email =  htmlspecialchars(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Cek ketersediaan username dan email
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' OR email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        $_SESSION["duplicated"]  = "<div class='alert alert-danger' role='alert'>
        <strong>Sudah dipakai.</strong> Silahkan gunakan username dan email yang lain!
        </div>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO user VALUES('','$level','$email','$username','$password','$nama')");
    return mysqli_affected_rows($conn);
}


// Function tambah materi
function tambahMateri($data)
{
    global $conn;

    $mode = htmlspecialchars(stripslashes($data["mode"]));
    $judul = stripslashes($mode . " " . htmlspecialchars(stripslashes($data["judul"])));
    $isi = htmlspecialchars(stripslashes($data["isi"]));

    // Query tambah materi
    $query = "INSERT INTO materi VALUES('','$mode','$judul','$isi')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Function buat soal
function tambahSoal($data)
{
    global $conn;

    $mode = htmlspecialchars(stripslashes($data["mode"]));
    $soal = htmlspecialchars(stripslashes($data["soal"]));
    $jawaban = htmlspecialchars(stripslashes($data["jawaban"]));
    $a = htmlspecialchars(stripslashes($data["a"]));
    $b = htmlspecialchars(stripslashes($data["b"]));
    $c = htmlspecialchars(stripslashes($data["c"]));
    $d = htmlspecialchars(stripslashes($data["d"]));
    $aktif = htmlspecialchars(stripslashes('Y'));

    // Query buat soal
    $query = "INSERT INTO soal VALUES('','$mode','$soal','$a','$b','$c','$d','$jawaban','$aktif')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Function update soal
function updateSoal($data)
{

    global $conn;

    $id = $data["id"];
    $mode = htmlspecialchars(stripslashes($data["mode"]));
    $soal = htmlspecialchars(stripslashes($data["soal"]));
    $jawaban = htmlspecialchars(stripslashes($data["jawaban"]));
    $a = htmlspecialchars(stripslashes($data["a"]));
    $b = htmlspecialchars(stripslashes($data["b"]));
    $c = htmlspecialchars(stripslashes($data["c"]));
    $d = htmlspecialchars(stripslashes($data["d"]));
    $aktif = htmlspecialchars(stripslashes(isset($_POST["aktif"]) ? 'Y' : 'N'));

    // Query buat soal
    $query = "UPDATE soal SET
                        mode = '$mode',
                        soal = '$soal',
                        a = '$a',
                        b = '$b',
                        c = '$c',
                        d = '$d',
                        jawaban='$jawaban',
                        aktif='$aktif'
                        WHERE id=$id
                        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Function hapus soal
function hapusSoal($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM soal WHERE id=$id");
    return mysqli_affected_rows($conn);
}
