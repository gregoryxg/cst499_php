<!--
logout.php
10/19/17
Destroy session and variables
-->
<?php

    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
?>