<!-- SCRIPT PHP AWAL -->
<?php

// Session
session_start();

// Connect DB
require '../../authentication/db/conn_db.php';

// Get id based filename
$filename = basename($_SERVER['REQUEST_URI']);
$id = basename($filename, ".php");

// Query
$result = mysqli_query($conn, "SELECT * FROM materi WHERE mode='Javascript' AND page=$id");
$row = mysqli_fetch_assoc($result);

// Variabel Template
$title = $row["judul"];
$description = 'Javascript Learning, Javascript Events, Javascript';
$author = 'Kristovel Adi S.';

// Pemanggilan File Template
require 'template/head.php';
require 'template/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title ?></h1>
            <div class="card mb-4">
                <div class="card-body">
                    <?= htmlspecialchars_decode($row["isi"]); ?>
                    <!-- Reference -->
                    <section class="mt-5">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                Referensi
                            </div>
                            <ul class="list-group list-group-flush">
                                <?php
                                $array1 = explode(",", $row['sumber']);
                                $array2 = explode(",", $row['url']);
                                foreach ($array1 as $key => $value) {
                                    echo "<li class='list-group-item'><a href='" . $array2[$key] . "' target='_blank'>" . $value . "</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>


    <!-- SCRIPT PHP AKHIR -->
    <?php
    require 'template/footer.php';

    ?>