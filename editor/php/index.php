<!-- SCRIPT AWAL PHP -->
<?php
// Variabel TAG Template
$title = 'Code Editor PHP';
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
        body {
            background-color: #90c7fa;
        }

        iframe {
            width: 100%;
            float: left;
            height: 300px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="" style="margin-top: 50px;">
        <div class="row mb-3 container">
            <div style="width: 60px;">
                <button type="button" class="btn btn-primary" id="runCode" onclick="buttonRun()">Run</button>
            </div>
            <div style="width: 60px;">
                <a class="btn btn-outline-secondary" data-toggle="tooltip" title="Orientation"><i class="fa-solid fa-rotate"></i></a>
            </div>
            <select id="select" class="form-select" onchange="selectTheme()" style="width: 120px;">
                <option selected>default</option>
                <option>dracula</option>
                <option>base16-light</option>
            </select>
        </div>
        <div class="row" style="margin-left: 10px;margin-right: 10px;;">
            <div class="col-md-6">
                <textarea id="code" name="code" class="CodeMirror"></textarea>
            </div>
            <div class="col-md-6">
                <iframe id="preview" style="background-color: #ffffff;" srcdoc="<?php echo "hello"; ?>"></iframe>
            </div>
        </div>
    </div>

    <!-- Library Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/main.js"></script>

    <!-- Javascript Code -->
    <script>
        var delay;
        // Initialize CodeMirror editor with a nice html5 canvas demo.
        var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "text/x-php",
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
    </script>
</body>

</html>