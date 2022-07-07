<?php
    session_start();

    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = "lv";
    } else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "en") {
            $_SESSION['lang'] = "en";
           // echo '<script>alert("Language: English")</script>';
        } else if ($_GET['lang'] == "lv") {
            $_SESSION['lang'] = "lv";
            //echo '<script>alert("Valoda: Latviešu")</script>';
        }
    }

    require_once "languages/" . $_SESSION['lang'] . ".php";

?>