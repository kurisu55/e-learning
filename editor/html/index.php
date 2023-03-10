<!-- SCRIPT AWAL PHP -->
<?php
// Variabel TAG Template
$title = 'Code Editor HTML';
$description = 'code editor, code editor html, belajar html';
$author = 'Kristovel Adi S.';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?= $description ?>" />
    <meta name="author" content="<?= $author; ?>" />
    <title><?= $title; ?></title>
    <link href="../../assets/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- CodeMirror CSS -->
    <link rel="stylesheet" href="../../assets/codemirror/lib/codemirror.css">

    <!-- Addons CodeMirror -->
    <link rel="stylesheet" href="../../assets/codemirror/addon/display/fullscreen.css">

    <!-- Theme CodeMirror-->
    <link rel="stylesheet" href="../../assets/codemirror/theme/dracula.css">
    <link rel="stylesheet" href="../../assets/codemirror/theme/base16-light.css">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/sidebar/assets/favicon.ico" />

    <!-- CodeMirror JS -->
    <script src="../../assets/codemirror/lib/codemirror.js"></script>

    <!-- Addons CodeMirror JS -->
    <script src="../../assets/codemirror/addon/edit/closetag.js"></script>
    <script src="../../assets/codemirror/addon/edit/matchbrackets.js"></script>
    <script src="../../assets/codemirror/addon/display/fullscreen.js"></script>

    <!-- Mode Editor -->
    <script src="../../assets/codemirror/mode/xml/xml.js"></script>
    <script src="../../assets/codemirror/mode/javascript/javascript.js"></script>
    <script src="../../assets/codemirror/mode/css/css.js"></script>
    <script src="../../assets/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="../../assets/codemirror/mode/clike/clike.js"></script>
    <script src="../../assets/codemirror/mode/php/php.js"></script>

    <style>
        iframe {
            width: 100%;
            height: 300px;
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Bootstrap
            </a>
        </div>
    </nav>
    <div class="mx-2 mt-2 border-3 border-bottom" style="background-color: #eeeeee;">
        <!-- Kumpulan tombol -->
        <ul class="nav mb-1 p-2 border">
            <li class="nav-item me-3">
                <button class="btn btn-success" id="run" onclick="buttonRun()" title="Run Code"><i class="fas fa-solid fa-caret-right me-1"></i> Run</button>
            </li>
            <li class="nav-item me-3">
                <select id="select" class="form-select" onchange="selectTheme()" style="width: 120px;" title="Theme">
                    <option selected>default</option>
                    <option>dracula</option>
                    <option>base16-light</option>
                </select>
            </li>
            <li class="nav-item">
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" title="Key Info" data-bs-trigger="hover focus" data-bs-content="Key F11 : Fullscreen">
                    <button class="btn btn-primary" type="button" disabled>Key</button>
                </span>
            </li>
        </ul>
        <div class="mx-2">
            <textarea id="code"></textarea>
            <div class="my-2"></div>
            <iframe id="preview" style="background-color: white;"></iframe>
        </div>
    </div>

    <!-- Library Javascript -->
    <!-- SB Admin JS -->
    <script src="../../assets/startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>
    <!-- Main JS -->
    <script src="../../assets/main.js"></script>

    <!-- Javascript Code -->
    <script>
        var delay;
        // Initialize CodeMirror editor with a nice html5 canvas demo.
        var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
            mode: 'text/html',
            lineNumbers: true,
            matchBrackets: true,
            autoCloseTags: true,
            extraKeys: {
                "F11": function(cm) {
                    cm.setOption("fullScreen", !cm.getOption("fullScreen"));
                },
                "Esc": function(cm) {
                    if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
                }
            }
        });

        // Button Run Code to preview iframe
        function buttonRun() {
            var previewFrame = document.getElementById('preview');
            var preview = previewFrame.contentDocument || previewFrame.contentWindow.document;
            preview.open();
            preview.write(editor.getValue());
            preview.close();
        }
        buttonRun();

        // Select Theme
        var input = document.getElementById("select");

        function selectTheme() {
            var theme = input.options[input.selectedIndex].textContent;
            editor.setOption("theme", theme);
            location.hash = "#" + theme;
        }
        var choice = (location.hash && location.hash.slice(1)) ||
            (document.location.search &&
                decodeURIComponent(document.location.search.slice(1)));
        if (choice) {
            input.value = choice;
            editor.setOption("theme", choice);
        }
        CodeMirror.on(window, "hashchange", function() {
            var theme = location.hash.slice(1);
            if (theme) {
                input.value = theme;
                selectTheme();
            }
        });

        // Popover
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
</body>

</html>