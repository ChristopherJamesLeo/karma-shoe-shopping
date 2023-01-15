<?php
    session_start();

    session_unset();

    session_destroy();

    header("location:http://localhost/karma-shoe-shopping-site(p_17)/index.php");
?>