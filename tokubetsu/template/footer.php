<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Code 2023</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<script src="../../assets/startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>
<!-- Jquery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Chart JS CDN-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- Ckeditor JS Lib -->
<script type="text/javascript" src="../../assets/ckeditor/ckeditor.js"></script>
<script>
    // Set Kuis Aktif
    function aktifSubmit() {
        document.getElementById("formSetAktif").submit();
    }
</script>
<script>
    // Chart Materi
    var ctx = document.getElementById('materiChart'); // node
    var ctx = $('#materiChart'); // jQuery instance
    var ctx = 'materiChart'; // element id

    this.materiChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [
                'HTML',
                'PHP',
                'Javascript'
            ],
            datasets: [{
                label: 'Total Materi',
                data: [<?= mysqli_num_rows($resultMateriHTML); ?>, <?= mysqli_num_rows($resultMateriPHP); ?>, <?= mysqli_num_rows($resultMateriJS); ?>],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        }
    });

    // Chart Kuis
    var ctx2 = document.getElementById('kuisChart'); // node
    var ctx2 = $('#kuisChart'); // jQuery instance
    var ctx2 = 'kuisChart'; // element id

    this.kuisChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: [
                'HTML',
                'PHP',
                'Javascript'
            ],
            datasets: [{
                label: 'Kuis Tersedia',
                data: [<?= mysqli_num_rows($resultKuisHTML); ?>, <?= mysqli_num_rows($resultKuisPHP); ?>, <?= mysqli_num_rows($resultKuisJS); ?>],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        }
    });
</script>
</body>

</html>