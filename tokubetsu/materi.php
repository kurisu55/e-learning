<!-- SCRIPT PHP AWAL -->
<?php
// Variabel Twmplate
$title = 'Materi';

// Pemanggilan File Template
require 'template/head.php';
require 'template/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?= $title; ?></h1>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="col-4 mb-3">
                        <label for="mode" class="form-label">Mode Bahasa</label>
                        <input class="form-control" list="datalistOptions" id="mode" placeholder="Bahasa...">
                        <datalist id="datalistOptions">
                            <option value="HTML">
                            <option value="PHP">
                            <option value="Javascript">
                        </datalist>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="judul" class="form-label">Judul Materi</label>
                        <input type="text" class="form-control" id="judul" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="materi" class="form-label">Isi Materi</label>
                        <textarea class="form-control" id="materi" rows="3" style="height: 175px;"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPT PHP AKHIR -->
    <?php
    require 'template/footer.php';

    ?>