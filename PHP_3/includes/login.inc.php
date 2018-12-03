<?php

if (isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $mailUid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailUid) || empty($password)){
        header("Location: ..//index.php&emptyfields");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE idUsers=? OR email=?";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ..//index.php?sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "ss", $mailUid, $mailUid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)){
                $passwordCheck = password_verify($password, $row['password']);
                if ($passwordCheck == false){
                    header("Location: ..//index.php?wrongpassword");
                    exit();
                }else if($passwordCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['email'] = $row['email'];

                    header("Location: ..//index.php?login=success");
                    exit();
                }else{
                    header("Location: ..//index.php?wrongpassword");
                    exit();
                }
            }else{
                header("Location: ..//index.php?wrongdata");
                exit();
            }
        }
    }
}else{
    header("Location: ..//index.php");
    exit();
}