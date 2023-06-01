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
                        <div class="row ms-1">
                            <div class="col-7" style="border:1px solid red;">
                                <pre>
&lt!DOCTYPE html&gt;
&lthtml&gt;
    &lthead&gt;
        &lttitle&gt;Contoh Javascript&lt/title&gt;
    &lt/head&gt;
    &ltbody&gt;
        &lth1&gt;Tutorial Javascript&lt/h1&gt;
        &ltbutton&gt; onclick=&quot;test()&quot;>Tekan tombol&lt/button&gt;
        &ltp id=&quot;demo&quot;&gt;&lt/p&gt;
    
        &ltscript&gt;
            function test(){
                document.getElementById(&quot;demo&quot;).innerHTML = 'Hello World!';
            }
        &lt/script&gt;
    &lt/body&gt;
&lt/html&gt;
</pre>
                            </div>
                            <div class="col-5">
                                <legend>Hasil</legend>
                                <div id="preview">
                                    <h1>Inner HTML</h1>
                                    <p id="test"></p>
                                    <h1>Tutorial Javascript</h1>
                                    <button onclick="test()">Tekan tombol</button>
                                    <p id="demo"></p>

                                    <script>
                                        function test() {
                                            document.getElementById("demo").innerHTML = 'Hello World!';
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <br>
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