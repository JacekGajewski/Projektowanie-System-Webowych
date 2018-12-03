<?php

require "dbh.inc.php";

//$sql = "INSERT INTO listOfUsers () VALUES (NULL, test, test, test)";
//$sql = "INSERT INTO listOfUsers () VALUES (NULL, 'test', 'test@gmail.com', 'test123')";
//$stmt = mysqli_stmt_init($connection);
//if (!mysqli_stmt_prepare($stmt, $sql)){
//    print ("DUPA");
//    die();
//}
//mysqli_stmt_execute($stmt);


$sql = "INSERT INTO users (userName, email, password) VALUES (?, ?, ?)";
$stmt = mysqli_stmt_init($connection);
if (!mysqli_stmt_prepare($stmt, $sql)){
    print ("DUPA");
    die();
}else{

    $passwordG = "adminadmin";
    $hashedPwd = password_hash($passwordG, PASSWORD_DEFAULT);

    $userNameG = "aaaaa";
    $emailG = "email@emial.com";

    mysqli_stmt_bind_param($stmt, "sss", $userNameG, $emailG, $passwordG);
    mysqli_stmt_execute($stmt);
    die();
}

