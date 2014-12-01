<?php
    session_start();
    unset($_SESSION['username']);
    exit("<script> alert(\"Logout success!\");window.location.href='index.php';  </script>");
?>