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
    // Preview CKEditor Materi
    CKEDITOR.replace('editor1');
    CKEDITOR.instances.editor1.on('change', function() {
        var editorValue = CKEDITOR.instances.editor1.getData();
        var previewFrame = document.getElementById('preview').contentWindow.document;
        previewFrame.write(editorValue);
        previewFrame.close();
    });
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
                data: [<?= mysqli_num_rows($resultMateriHTML); ?>,
                    <?= mysqli_num_rows($resultMateriPHP); ?>,
                    <?= mysqli_num_rows($resultMateriJS); ?>
                ],
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
                data: [<?= mysqli_num_rows($resultKuisHTML); ?>,
                    <?= mysqli_num_rows($resultKuisPHP); ?>,
                    <?= mysqli_num_rows($resultKuisJS); ?>
                ],
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
<script>
    // Tambah Referensi Link
    function addReference() {

        // Buat elemen input text baru
        const reference = document.createElement("input");
        reference.type = "text";
        reference.name = "reference[]";
        reference.id = "reference";
        reference.placeholder = "Sumber";


        // Buat elemen label baru
        const label = document.createElement("label");
        label.for = "reference";
        label.innerText = "=";

        // Buat elemen input text baru
        const URL = document.createElement("input");
        URL.type = "text";
        URL.style = "margin-right:10px;"
        URL.name = "url[]";
        URL.id = "url";
        URL.placeholder = "URL";

        // Tambahkan elemen label dan input ke dalam container
        const container = document.getElementById("input-reference");
        container.appendChild(reference);
        container.appendChild(label);
        container.appendChild(URL);
    }
</script>
</body>

</html>