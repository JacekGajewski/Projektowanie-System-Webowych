<?php

if (isset($_POST['login-submit'])) {

    $userName = $_POST['mailuid'];
    $password = $_POST['pwd'];

    $users = array("one" => "two",
        "lastName" => "Nazwisko", "email" => "Email",
        "phone" => "Numer Telefonu", "birthMonth" => "Miesiąc urodzin",
        "card" => "Numer karty");

    if (empty($userName) || empty($password)) {
        header("Location: ../header.php?emptyfields");
        exit();
    } else {
        foreach ($users as $uId => $uPassword) {
            if (strcmp($uId, $userName) == 0) {
                if (strcmp($uPassword, $password) == 0) {
                    session_start();
                    $_SESSION['userId'] = $userName;

                    header("Location: ..//header.php?login=success");
                    exit();
                } else {
                    header("Location: ..//header.php?wrongpassword");
                    exit();
                }
            } else {
                header("Location: ..//header.php?wrongdata");
                exit();
            }
        }
    }
}else{
    header("Location: ..//header.php");
    exit();
}
