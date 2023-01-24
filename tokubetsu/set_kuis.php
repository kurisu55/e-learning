<!-- SCRIPT PHP AWAL -->
<?php
// Variabel Twmplate
$title = 'Set Kuis';

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
                    <div class="row mb-3">
                        <div class="col order-last">
                            <p>hasil12</p>
                        </div>
                        <div class="col"></div>
                        <div class="col-5 order-first">
                            <form action="">
                                <label for="soal" class="form-label">Soal Kuis</label>
                                <textarea class="form-control" id="soal" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="jawaban" class="form-label">Jawaban</label>
                        <input type="text" class="form-control" id="jawaban" placeholder="Jawaban...">
                    </div>
                    <div class="mt-3 col-4">
                        <label for="" class="form-label">Pilihan Jawaban</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="a"><b>A</b></span>
                            <input type="text" class="form-control" placeholder="Pilihan A" aria-label="Pilihan A" aria-describedby="a">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="b"><b>B</b></span>
                            <input type="text" class="form-control" placeholder="Pilihan B" aria-label="Pilihan B" aria-describedby="b">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="c"><b>C</b></span>
                            <input type="text" class="form-control" placeholder="Pilihan C" aria-label="Pilihan C" aria-describedby="c">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="d"><b>D</b></span>
                            <input type="text" class="form-control" placeholder="Pilihan D" aria-label="Pilihan D" aria-describedby="d">
                        </div>
                        <button type="submit" class="btn btn-success mt-5">Buat Soal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPT PHP AKHIR -->
    <?php
    require 'template/footer.php';

    ?>