<!-- SCRIPT AWAL PHP -->
<?php
// Variabel TAG Template
$title = 'Code Editor PHP';
$description = 'code editor, code editor php, belajar php';
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
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../assets/img/terminal-solid.svg" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- CodeMirror CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.css" integrity="sha512-7vaQ4LLdaXd2IuMd4MUQ6LRFIGbEwJI1aq6KYqL3RjbdQyUkRFhwZKmqmkBXurTFdGlx687lTN8FSJfX6Df8Gw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Addons CodeMirror -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/addon/display/fullscreen.css" integrity="sha512-cCwzc1kXKEd8Z9s559PoYPH1HMjHeQvCAiE0KaWQZ7A3XbC0ZjtTP91bZFeGZLDvA7um51WCnRcK2XLHWyODTQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Theme CodeMirror-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/theme/dracula.css" integrity="sha512-xGcoVXst3s+HA9HMoToxdHRy1NaFxaj1N8KSWVUTiTG2fkbteoxYEX3yUTC6GFW5K4Gd+78s03tMCzuCJElu/g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/theme/base16-light.css" integrity="sha512-AWgtHoHbHLBjsAHGglTBR9Vn+S2kvgDByCT85YnCRP7vYcEjvLleMOQ34XaNkLl/qZ/WjQVfK3pPSQGajZwqMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CodeMirror JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/codemirror.js" integrity="sha512-/+fl4bq21QQ5/i6azL1kssc/NWcL0uk/h4feOxnKk7C28h/SGhTp4dqj0W580J7fkc5TfPhm+yQSlTZGcTRmcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Addons CodeMirror JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/addon/edit/closetag.js" integrity="sha512-1aYjqb0gMQmBzv97uzDI+zeMkiJ8cBIszGw4/k48sHZ/lzdq1Ibu/XxRGCMtv5TDwbtSddTs1IP/2zKKUaiRZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/addon/edit/matchbrackets.js" integrity="sha512-xUUWekUNHRMUrO8BL11fcEbz6rcJW55X6LkW9MNcAGgCRbxGmMXmXG5Ds5O6v2BLb90AVT1I+ualk0G9IYx3bw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/addon/display/fullscreen.js" integrity="sha512-3LSEeg+b0pIeBxYCn3cWoBoitqDAlMImCNQp2D1Ea7LaZ8DT94m9hIJ7fjuSzBFFUswsZ+hp+X0+6KCpHKv/Ag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Mode Editor -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/xml/xml.js" integrity="sha512-zWiFnvx+BKIYp7HwMXQRKR3SC8AiS6wQchjjjtAV9bt34F54fwJMB//7hVm0C+kQywyStbJ00u9i07Qw9ARuqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/javascript/javascript.js" integrity="sha512-VgqsGo4zxSK9KBf4c3RWpFWkRfBEeIUb2p5VqKtDj7sXdTyTyx38jVVJSriVU12pS5hG5J69FDi/LDsQ5Y1Ldw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/css/css.js" integrity="sha512-kbf0gMc1+KPTTDWkjkGwf3h2Nx4djnWBVtcCKJcwLQpQ/TIMAjRBKM9f0ZDgj9kT5WTs1Qzsq+5Si2p7j9whkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/htmlmixed/htmlmixed.js" integrity="sha512-ooMFWcVphTl+L7BsQk/PRDyUyFYH7f2QHjJ0kFvkTxJgMJS8XXPDJBZIrBtM0P7TCDOPjfQcnbx3s8hp27vraw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/clike/clike.js" integrity="sha512-TsGZUlSmGc26GdcjuhRA0ed5Tb/SXULrg2wnr/VjLssDUGRtn5SAGBT1CTw/oocHirC1at/527D+oUJLBE6sSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.13/mode/php/php.js" integrity="sha512-tNEzfcTh693YiIdHguYBFneKkK0rr1nZ67QdknTOdFnnEtqvRUXwfnFg8bXijXk++3S3ZyG+ieVZE6ZySFHfTg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        iframe {
            width: 100%;
            height: 500px;
            border: 0.5px solid;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand btn btn-outline-dark" href="../../index.php">
                <img src="../../assets/img/terminal-solid.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Code
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
                <div class="dropdown">
                    <a class="btn btn-info dropdown-toggle disabled" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Keys
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <span class="dropdown-item">F11 : Fullscreen</span>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="mx-2 mb-1">
            <div class="row">
                <div class="col">
                    <textarea id="code"></textarea>
                </div>
                <div class="col">
                    <iframe id="preview" style="background-color: white;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Javascript -->
    <!-- SB Admin JS -->
    <script src="../../assets/startbootstrap-sb-admin-gh-pages/js/scripts.js"></script>

    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            lineNumbers: true,
            matchBrackets: true,
            mode: "application/x-httpd-php",
            lineNumbers: true,
            lineWrapping: true,
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
        editor.setSize(650, 500);

        // Preview Code PHP
        document.getElementById("preview").addEventListener("click", function() {
            document.getElementById("output").innerHTML = editor.getValue();
        });
    </script>

    <!-- Javascript Code -->
    <script>
        // Button Run Code to preview iframe
        function buttonRun() {
            var code = editor.getValue();
            var preview = document.getElementById("preview");
            preview.src = "preview.php?code=" + encodeURIComponent(code);
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