<?php

if(isset($_SESSION['sesja'])) {
    setcookie("sesja", $_SESSION["sesja"], time() + 10);
} else  $_SESSION['sesja'] = "false";
?>
<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Ksiazkowo</title>
        <meta name="keywords" content="książka, książki, lektura"/>
        <meta name="description" content="Strona główna"/>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <?php
         if ($_POST['log'] == "admin"){
             if($_POST['pas'] == "admin")
                {

                    $_SESSION['sesja'] = "true";
                    header('Location: ciasteczka.php');
                }
             else
             {
                 $_SESSION['sesja'] = "false";
                 echo "<h1>Nie jesteś zalogowany </h1>";
             }
         }
         else
             {
                $_SESSION['sesja'] = "false";
                echo "<h1>Nie jesteś zalogowany </h1>";
             }
    ?>
    <button><a href="ciasteczka.php">Powrót</a> </button>
    </body>
    </html>