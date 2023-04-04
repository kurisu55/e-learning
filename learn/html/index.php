<!-- SCRIPT PHP AWAL -->
<?php
// Session
session_start();

// Variabel Template
$title = 'HTML HOME';
$description = 'HTML, HTML Language, HTML Learning';
$author = 'Kristovel Adi S.';

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
                    <p>HTML merupakan bahasa markup utama dalam pembuatan halaman web.</p>
                    <p>HTML adalah bahasa yang mudah dipelajari.</p>
                    <section>
                        <div class="mx-2 mt-3 border-3 border-bottom" style="background-color: #eeeeee;">
                            <ul class="nav mb-1 p-2 border">
                                <li class="nav-item me-3">
                                    <h4 class="btn-info">Contoh HTML</h4>
                                </li>
                            </ul>
                            <div class="mx-2 mb-1">
                                <div class="row">
                                    <div class="col">
                                        <textarea id="code">
<!DOCYTPE html>
<html>
<head>
    <title>Coba HTML</title>
</head>
<body>
    <p>Ini adalah contoh bahasa HTML.</p>
    <p>HTML merupakan bahasa utama dalam pembuatan halaman web.</p>
</body>
</html></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h2 class="mt-4">Coba Kuis?</h2>
                    <section style="background-color: #eeeeee;">
                        <p class="py-2">Tag HTML yang digunakan untuk membuat heading adalah <...>
                        </p>
                        <input type="radio" name="1" class="p-1"><label for="">html</label><br>
                        <input type="radio" name="1" class="p-1"><label for="">head</label><br>
                        <input type="radio" name="1" class="p-1"><label for="">title</label><br>
                        <input type="radio" name="1" class="p-1"><label for="">h1</label><br>
                        <a class="btn btn-info mt-2" href="../../kuis/html/index.php">Coba Kuis</a>
                    </section>
                </div>
            </div>
        </div>
    </main>


    <!-- SCRIPT PHP AKHIR -->
    <?php
    require 'template/footer.php';

    ?>