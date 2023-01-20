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
                    This page is an example of using the light side navigation option. By appending the
                    <code>.sb-sidenav-light</code>
                    class to the
                    <code>.sb-sidenav</code>
                    class, the side navigation will take on a light color scheme. The
                    <code>.sb-sidenav-dark</code>
                    is also available for a darker option.
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPT PHP AKHIR -->
    <?php
    require 'template/footer.php';

    ?>