<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Editor HTML</title>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome-free-6.1.1-web/css/all.min.css">

    <!-- Code Mirror -->
    <link rel="stylesheet" href="assets/codemirror/lib/codemirror.css">

    <!-- Theme Code Mirror-->
    <link rel="stylesheet" href="assets/codemirror/theme/dracula.css">
    <link rel="stylesheet" href="assets/codemirror/theme/base16-light.css">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/sidebar/assets/favicon.ico" />

</head>

<body style="background-color: #ABCCFD;">
    <div class="container">
        <div class="py-5">
            <div class="container">
                <div class="row ml-1">
                    <div class="mb-2">
                        <button class="btn btn-primary">Run</button>
                    </div>
                    <div class="ml-2">
                        <a class="btn btn-outline-secondary" data-toggle="tooltip" title="Orientation"><i class="fa-solid fa-rotate"></i></a>
                    </div>
                    <select name="theme" id="theme" class="btn btn-sm btn-outline-dark">
                        <option>Theme</option>
                        <option value="dracula" class="text-left">Dracula</option>
                        <option value="base16-light">Base16 Light</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <textarea name="textEditor" class="codemirror-textarea" id="textEditor" cols="150" rows="23" class="col-lg-12 col-md"></textarea>
                    </div>
                    <div class="col-md-6" aria-disabled="true">
                        <textarea name="textPreview" class="codemirror-textarea" id="textPreview" cols="150" rows="23" class="col-lg-12 col-md"></textarea>
                    </div>
                </div>
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

    <!-- Code Mirror JS -->
    <script src="assets/codemirror/lib/codemirror.js"></script>

    <!-- Mode Editor -->
    <script src="assets/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="assets/codemirror/mode/xml/xml.js"></script>
    <!-- <script src="assets/codemirror/mode/javascript/javascript.js"></script> -->
    <script src="assets/codemirror/mode/php/php.js"></script>
    <script src="assets/codemirror/mode/clike/clike.js"></script>
    <script src="assets/codemirror/mode/css/css.js"></script>

    <!-- Addons Code Mirror -->
    <script src="assets/codemirror/addon/edit/closetag.js"></script>
    <script src="assets/codemirror/addon/edit/matchbrackets.js"></script>

    <!-- Main JS -->
    <script src="assets/main.js"></script>

    <!-- Javascript Code -->
    <script>
        window.onload = () => {
            const [input, output] = document.querySelectorAll(".codemirror-textarea");
            const [run, clear] = document.querySelectorAll("button");
            const editor = CodeMirror.fromTextArea(input, {
                lineNumbers: true,
                theme: 'dracula',
                matchBrackets: true,
                mode: "text/php",
                indentUnit: 4,
                indentWithTabs: true
            });
            editor.setSize("550", "500");
            const shell = CodeMirror.fromTextArea(output, {
                lineNumbers: false,
            });
            shell.setSize("550", "500");

            run.addEventListener("click", () => {
                const codeToRun = editor.getValue();
                try {
                    shell.replaceRange(eval(`${codeToRun}`) + "\n", CodeMirror.Pos(shell.lastLine()));
                } catch (e) {
                    shell.replaceRange(e + "\n", CodeMirror.Pos(shell.lastLine()));
                }
            });

            /**Fail 1 */
            // run.addEventListener("click", () => {
            //     const codeToRun = editor.getValue();
            //     shell.setValue(eval(`${codeToRun}`));
            // });
        }
    </script>
</body>

</html>