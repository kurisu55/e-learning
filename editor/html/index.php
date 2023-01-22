<!-- SCRIPT AWAL PHP -->
<?php
// Variabel TAG Template
$title = 'Code Editor HTML';
$description = '';
$author = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <link href="../../assets/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Code Mirror -->
    <link rel="stylesheet" href="../../assets/codemirror/lib/codemirror.css">

    <!-- Theme Code Mirror-->
    <link rel="stylesheet" href="../../assets/codemirror/theme/dracula.css">
    <link rel="stylesheet" href="../../assets/codemirror/theme/base16-light.css">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/sidebar/assets/favicon.ico" />

    <!-- Code Mirror JS -->
    <script src="../../assets/codemirror/lib/codemirror.js"></script>

    <!-- Mode Editor -->
    <script src="../../assets/codemirror/mode/xml/xml.js"></script>
    <script src="../../assets/codemirror/mode/javascript/javascript.js"></script>
    <script src="../../assets/codemirror/mode/css/css.js"></script>
    <script src="../../assets/codemirror/mode/htmlmixed/htmlmixed.js"></script>

    <!-- Addons Code Mirror -->
    <script src="../../assets/codemirror/addon/edit/closetag.js"></script>
    <script src="../../assets/codemirror/addon/edit/matchbrackets.js"></script>

    <style>
        iframe {
            width: 100%;
            float: left;
            height: 300px;
            border: 1px solid black;
        }
    </style>
</head>

<body class="">
    <div class="container" style="margin-top: 100px;">
        <div class="row mb-3">
            <span class="col-1">
                <button type="button" class="btn btn-primary" id="runCode" onclick="buttonRun()">Run</button>
            </span>
            <span class="col-1">
                <a class="btn btn-outline-secondary" data-toggle="tooltip" title="Orientation"><i class="fa-solid fa-rotate"></i></a>
            </span>
            <span class="col-1">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Theme
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">HTML</a></li>
                        <li><a class="dropdown-item" href="#">PHP</a></li>
                        <li><a class="dropdown-item" href="#">Javascript</a></li>
                    </ul>
                </div>
            </span>
        </div>
        <div class=" row">
            <div class="col-md-6">
                <textarea id="code" name="code" class="CodeMirror"></textarea>
            </div>
            <div class="col-md-6 border">
                <iframe id="preview" style="overflow: hidden;"></iframe>
            </div>
        </div>
    </div>

    <!-- Library Javascript -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="assets/css/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- Main JS -->
    <script src="assets/main.js"></script>

    <!-- Javascript Code -->
    <script>
        var delay;
        // Initialize CodeMirror editor with a nice html5 canvas demo.
        var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
            mode: 'text/html',
            lineNumbers: true
        });
        // editor.on("change", function() {
        //     clearTimeout(delay);
        //     delay = setTimeout(updatePreview, 300);
        // });

        function buttonRun() {
            var previewFrame = document.getElementById('preview');
            var preview = previewFrame.contentDocument || previewFrame.contentWindow.document;
            preview.open();
            preview.write(editor.getValue());
            preview.close();
        }
        // setTimeout(updatePreview, 300);
        buttonRun();
    </script>
</body>

</html>