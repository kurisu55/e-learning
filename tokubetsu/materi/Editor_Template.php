<!-- Program copy code template CE dan preview-->
<?php
echo '<div class="row">
    <div class="col-7">
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
    <h1>Ini adalah contoh bahasa HTML.</h1>
    <p>HTML merupakan bahasa utama dalam pembuatan halaman web.</p>
</body>
</html></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5">
    <legend>Hasil</legend>
        <div id="preview"></div>
    </div>
</div>';
?>
<script>
    $(document).ready(function() {
        $('#copy-btn').click(function() {
            $.get("Editor_Template.php", function(data) {
                // Cari bagian textarea dari data yang diambil
                var textareaStart = data.indexOf("<textarea");
                var textareaEnd = data.indexOf("</textarea");
                var textarea = data.substring(textareaStart, textareaEnd + 11);

                // Buat elemen sementara untuk menyimpan textarea dan menyalin isinya ke clipboard
                var tempElem = $("<div>");
                tempElem.html(textarea);
                var code = tempElem.find("textarea").val();
                navigator.clipboard.writeText(code);

                // Tampilkan pesan sukses
                alert('Code Copied!');
            });
        });
    });
</script>