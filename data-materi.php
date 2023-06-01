<?php
require_once 'authentication/db/conn_db.php';

$keyword = $_POST["keyword"];

$result = mysqli_query($conn, "SELECT * FROM materi WHERE isi LIKE '%$keyword%'");

if (empty($keyword)) {
    echo "";
} elseif (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <a class="list-group-item list-group-item-action mb-1" href="<?= $row["href"] . $row["page"]; ?>.php" style="text-align: left;" title="<?= htmlspecialchars_decode($row["judul"]); ?>">
            <strong class="card-title text-danger mt-2"><u><?= htmlspecialchars_decode($row["judul"]); ?></u></strong>
            <span class="text-dark disabled">
                <?= htmlspecialchars_decode($row["isi"]); ?>
            </span>
        </a>
<?php
    }
} else {
    echo "
    <div class='alert alert-danger' role='alert'>
    Keyword tidak tersedia!
    </div>
    ";
}
?>