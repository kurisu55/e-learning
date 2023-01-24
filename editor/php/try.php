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
</head>

<body>
    <textarea id="editor" data-editor="php"></textarea>
    <button id="preview-btn">Preview</button>
    <div id="preview"></div>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
            mode: "text/x-php",
            lineNumbers: true,
        });
        document.getElementById("preview-btn").addEventListener("click", function() {
            document.getElementById("preview").contentWindow.document.write(editor.getValue());
        });
    </script>

</body>

</html>