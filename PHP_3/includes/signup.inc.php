<?php

if (isset($_POST['signup-submit'])){

    require "dbh.inc.php";

    $userNameG = $_POST['uid'];
    $emailG = $_POST['mail'];
    $passwordG = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];


    if (empty($userNameG) || empty($emailG) || empty($passwordG)
        || empty($passwordRepeat)){
        header("Location: ../signup.php?error=emptyfields&uid=".$userNameG."&mail=".$emailG);
        exit();
    }else if (!preg_match("/^[a-zA-Z0-9]*$/", $userNameG) && !filter_var($emailG, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invaliduidmail");
        exit();
    }else if (!filter_var($emailG, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&uid=".$userNameG);
        exit();
    }else if (!preg_match("/^[a-zA-Z0-9]*$/", $userNameG)){
        header("Location: ../signup.php?error=invaliduid&mail".$emailG);
        exit();
    }
    else if ($passwordG !== $passwordRepeat){
        header("Location: ../signup.php?error=passwordcheck&uid=".$userNameG."&mail=".$emailG);
        exit();
    }else{

        $sql = "SELECT userName FROM users WHERE userName=?";
        $stmt = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror&uid=".$userNameG."&mail=".$emailG);
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $userNameG);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("Location: ../signup.php?error=usernametakend&mail".$emailG);
                exit();
            }else{
                $sql = "INSERT INTO users (userName, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($connection);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signup.php?error=sqlerror&uid=".$userNameG."&mail=".$emailG);
                    exit();
                }else{
                    $hashedPwd = password_hash($passwordG, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $userNameG, $emailG, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    mysqli_close($connection);
                    exit();
                }
            }
        }
    }
}else{
    header("Location: ../signup.php");
    exit();
}
