<?php

// write each form field�s value to a cookie and set the
// cookie�s expiration date
session_start();
if(isset($_POST['color'])) {
    setcookie("color", $_POST["color"], time() + 10);
} else $color = "#808080";
if(isset($_POST['colorC'])) {
    setcookie("colorC", $_POST["colorC"], time() + 10);
} else $colorC = "#000000";
if(isset($_POST['font'])) {
    setcookie("font", $_POST["font"], time() + 10);
} else $font = "Courier";
if(!isset($_SESSION['sesja'])) $_SESSION = "false";
if(isset($_SESSION['sesja'])) {
    setcookie("sesja", $_SESSION["sesja"], time() + 10);
}




?><
<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ksiazkowo</title>
    <meta name="keywords" content="książka, książki, lektura"/>
    <meta name="description" content="Strona główna"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">

    </style>



</head>
<body>

<header>
    <div class="navigation">
        <nav>
            <ul>
                <li><a href="index.html">Strona domowa</a>
                    <ul class="drop">
                        <li><a href="#">Inception1</a>
                            <ul>
                                <li><a href="#">Deeper1</a></li>
                                <li><a href="#">Deeper2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Inception2</a></li>
                        <li><a href="#">Inception3</a></li>
                        <li><a href="#">Inception4</a></li>
                    </ul>
                </li>
                <li><a href="about.html">O nas</a></li>
                <li><a href="reviews.html">Recenzje</a></li>
                <li><a href="twojeKsiazki.html">Twoje ksiażki</a></li>
                <li><a href="newsletter.html">Rejestracja</a></li>
            </ul>
        </nav>
    </div>
</header>


<div class="container" id="container" style="background-color: <?php echo $_COOKIE['color']; ?>">

<?php



if ( $_COOKIE['sesja'] == "true") {
    echo "Witaj admin!";
    echo <<<END
            <button><a href="personalizacja.php">Spersonalizuj ustawienia strony</a> </button>  <br>
END;
}
else{

    echo <<<END
                      <form action="eror.php" method="post">
                           Login: <br> <input type="text" name="log"> <br>
                            Hasło: <br> <input type = "password" name="pas"> <br>
                              <input type="submit" value="Loguj" name="submit"/>
                       </form>
END;
}
?>



    <button><a href="diagnostyka.php">Strona Diagnostyczna</a></button>


    <div id="lorem1" >
        <p style="color: <?php echo $_COOKIE['colorC'];?> ; font-family:<?php echo $_COOKIE['font'];?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <br>
    <div></div>
    <br>
    <div id="lorem2">
        <p style="color: <?php echo $_COOKIE['colorC'];?>; font-family:<?php echo $_COOKIE['font'];?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="columns">
        <p style="color: <?php echo $_COOKIE['colorC'];?>; font-family:<?php echo $_COOKIE['font'];?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p style="color: <?php echo $_COOKIE['colorC'];?>; font-family:<?php echo $_COOKIE['font'];?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p style="color: <?php echo $_COOKIE['colorC'];?>; font-family:<?php echo $_COOKIE['font'];?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>






</body>

</html>
