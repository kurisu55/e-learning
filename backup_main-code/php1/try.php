<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            float: left;
            height: 300px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <textarea id="code" name="code" sandbox></textarea>
    <button id="run" onclick="buttonRun()">Run</button>
    <iframe id="preview"></iframe>

    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "application/x-httpd-php",
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

        function buttonRun() {
            var preview = document.getElementById("preview");
            preview.src = "try1.php?code=" + encodeURIComponent(editor.getValue());
        }
        buttonRun();
    </script>
</body>

</html>