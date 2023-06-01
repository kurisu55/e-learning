<!-- SCRIPT PHP AWAL -->
<?php
// Session
session_start();

// Variabel Template
$title = 'PHP HOME';
$description = 'PHP, PHP Language, PHP Learning';
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
                    <p>PHP : Hypertext Preprocessor merupakan bahasa server-side.</p>
                    <p>PHP merupakan bahasa yang bebas digunakan dan gratis.</p>
                    <section>
                        <div class="row ms-1">
                            <div class="col-7" style="border:1px solid red;">
                                <pre>
&lt;?php
echo 'Hello World!';
?&gt;
                                </pre>
                            </div>
                            <div class="col-5">
                                <legend>Hasil</legend>
                                <div id="preview">
                                    <h1>Tutorial PHP</h1>
                                    Hello World!
                                </div>
                            </div>
                        </div>
                        <br>
                    </section>
                    <h2 class="mt-4">Coba Kuis?</h2>
                    <section style="background-color: #eeeeee;">
                        <p class="py-2">Kepanjangan dari PHP adalah...</p>
                        <input type="radio" name="1" class="p-1"><label for="">Hypertext Preprocessor</label><br>
                        <input type="radio" name="1" class="p-1"><label for="">Hyperlink Processing</label><br>
                        <input type="radio" name="1" class="p-1"><label for="">Hypertext Processing</label><br>
                        <input type="radio" name="1" class="p-1"><label for="">Hyperlink Preprocessor</label><br>
                        <a class="btn btn-info mt-2" href="../../kuis/php/index.php">Coba Kuis</a>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPT PHP AKHIR -->
    <?php
    require 'template/footer.php';

    ?>