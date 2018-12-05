<?php
if (isset($_GET['choice'])){
    $choice = $_GET['choice'];
    if ($choice == "bug"){
        setcookie("sitestyle", $choice, time() + 60 * 60 * 24 * 30);
        header("Location: ..//PHP_2_JG/header.php");
        exit();
    }
}