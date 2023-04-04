<!-- SCRIPT PHP AWAL -->
<?php
// Session
session_start();

// Variabel Template
$title = 'Javascript HOME';
$description = 'Javascript, Javascript Language, Javascript Learning';
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
                    <p>Javascript merupakan bahasa pemrograman yang populer hingga saat ini.</p>
                    <p>Javascript merupakan bahasa client-side.</p>
                    <section>
                        <div class="mx-2 mt-3 border-3 border-bottom" style="background-color: #eeeeee;">
                            <ul class="nav mb-1 p-2 border">
                                <li class="nav-item me-3">
                                    <h4 class="btn-info">Contoh Javascript</h4>
                                </li>
                            </ul>
                            <div class="mx-2 mb-1">
                                <div class="row">
                                    <div class="col">
                                        <textarea id="code">
<!DOCYTPE html>
<html>
<head>
    <title>Coba Javascript</title>
</head>
<body>
    <h1>Tutorial Javascript</h1>
    <button onclick="test()">Tekan tombol</button>
    <p id="demo"></p>
    
    <script>
        function test(){
            document.getElementById("demo").innerHTML = 'Hello World!';
        }
    </script>
</body>
</html></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h2 class="mt-4">Coba Kuis?</h2>
                    <section style="background-color: #eeeeee;">
                        <p class="py-2">Penulisan code Javascript pada HTML ditempatkan pada tag <...>
                        </p>
                        <input type="radio" name="1" class="p-1"><label for="">script</label><br>
                        <input type="radio" name="1" class="p-1"><label for="">noscript</label><br>
                        <input type="radio" name="1" class="p-1"><label for="">code</label><br>
                        <input type="radio" name="1" class="p-1"><label for="">button</label><br>
                        <a class="btn btn-info mt-2" href="../../kuis/js/index.php">Coba Kuis</a>
                    </section>
                </div>
            </div>
        </div>
    </main>


    <!-- SCRIPT PHP AKHIR -->
    <?php
    require 'template/footer.php';

    ?>