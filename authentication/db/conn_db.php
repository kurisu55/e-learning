<?php
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

function login_admin()
{
    global $conn;

    $username = $_POST['username'];
    $password = $_POST['password'];

    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' and password='$password'");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../../../tokubetsu/dashboard.php");
    } else {
        $_SESSION['status'] = "gagal";
        header("location:index.php?pesan=gagal");
    }
}

// Registrasi User
function registrasi($data)
{
    global $conn;

    $nama = stripslashes($data["nama"]);
    $username = stripslashes($data["username"]);
    $level = '2';
    $email = stripslashes($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Akun sudah dibuat');</script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO user VALUES('','$level','$email','$username','$password','$nama')");
    return mysqli_affected_rows($conn);
}
