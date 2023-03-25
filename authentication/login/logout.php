<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// mengalihkan halaman ke halaman login
header("location:index.php");
