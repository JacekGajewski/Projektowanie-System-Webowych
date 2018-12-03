<!DOCTYPE html>
<html lang="">
<head>
    <meta charset = "utf-8">
    <title>Registration Form</title>
    <meta name="description" content="Polecane książki do przeczytania"/>
    <link rel="stylesheet" href="newsletter.css" type="text/css" />
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
<div class="container">
    <h1 style= "font-size: 36px">Rejestracja</h1>
<?php
$firstName = isset($_POST[ "firstName" ]) ? $_POST[ "firstName" ] : "";
$lastName = isset($_POST[ "lastName" ]) ? $_POST[ "lastName" ] : "";
$birthMonth = isset($_POST[ "birthMonth" ]) ? $_POST[ "birthMonth" ] : "";
$email = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
$phone = isset($_POST[ "phone" ]) ? $_POST[ "phone" ] : "";
$card = isset($_POST[ "card" ]) ? $_POST[ "card" ] : "";
$bookTypes = isset($_POST[ "geners" ]) ? $_POST[ "geners" ] : "";

$book = isset($_POST[ "book" ]) ? $_POST[ "book" ] : "";
$fruit = isset($_POST[ "fruit" ]) ? $_POST[ "fruit" ] : "";
$inputError = false;
$listOfErrors =
    array( "firstNameError" => false, "lastNameError" => false,
        "emailError" => false, "phoneError" => false , "fruitError" => false);
$fruitList = array( "Marchewka", "Ziemniak", "Burak", "Sałata" );
$inputLIst = array( "firstName" => "Imię",
    "lastName" => "Nazwisko", "email" => "Email",
    "phone" => "Numer Telefonu", "birthMonth" => "Miesiąc urodzin",
    "card" => "Numer karty");

$simpleArray = array("Raz", "Dwa", "Trzy");

$ipAddress = $_SERVER['SERVER_ADDR'];
$serverName = $_SERVER['SERVER_NAME'];

if ( isset( $_POST["submit"] ) ) {
    if ($firstName == "") {
        $listOfErrors["firstNameError"] = true;
        $inputError = true;
    }
    if ($lastName == "") {
        $listOfErrors["lastNameError"] = true;
        $inputError = true;
    }
    if (!preg_match("/@/", $email)){
        $listOfErrors["emailError"] = true;
        $inputError = true;
    }
    if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/",
        $phone)) {
        $listOfErrors["phoneError"] = true;
        $inputError = true;
    }
    if (strcmp($fruit, "Marchewka")){
        $listOfErrors["fruitError"] = true;
        $inputError = true;
    }
    if (!$inputError) {
        print("<p>Dziękujemy za rejestrację.</p>
<p class = 'head'>Twoje informacje:</p>
<p>Adres IP: $ipAddress</p>
<p>Nazwa serwera: $serverName</p>
<p>Imię i nazwisko: $firstName $lastName</p>
<p>Email: $email</p>");
        echo "<p>Numer telefonu: " . (int)$phone . "</p>";
        echo "Miesiąc urodzin: $birthMonth ";

        echo ", mniej niż Kwiecień: ";
        if ($birthMonth > "Kwiecień"){
            echo "Nie<br>";
        }else{
            echo "Tak<br>";
        }

        echo preg_replace("/1/", "*", $card);
        echo "<p>Numer karty: $card</p>";
        echo '<p>Typ: ' . gettype($card) . ' Konwersja na int: </p>';
        settype($card, "integer");
        echo '<p>Typ: ' . gettype($card) . '</p>';


        print("</body></html>");
        echo '<p class="head">Wybrane rodzaje książek: </p>';
        for ($i = 0; $i < count($bookTypes); ++$i)
            echo '<p>' . $bookTypes[$i] . '</p>';


        echo '<p class="head">Pierszeństwo operatorów na przykładzie \'Testing \' . 1 + 2 . \'45\'</p>';
        echo 'Testing ' . 1 + 2 . '45';

        echo '<p class="head">Poruszanie się po tablicy</p>';
        echo '<p>Current: ' . current($simpleArray) . '</p>';
        echo '<p>Klucz: ' . key($simpleArray) . '</p>';
        echo '<p>Next: ' . next($simpleArray) . '</p>';
        echo '<p>Klucz: ' . key($simpleArray) . '</p>';
        echo '<p>Reset: ' . reset($simpleArray) . '</p>';
        die();
    }
}

print( "<form method = 'post' action = 'simpleForm.php'>
<h2>Dane użytkownika</h2>");
if ( $inputError )
{
    if ( $listOfErrors[ "phoneError" ] )
        print( "<p class = 'error'>Podaj numer w formie 111-111-111" );
    else if ( $listOfErrors[ "emailError" ] )
        print( "<p class = 'error'>Wrong email adress" );
    else if ( $listOfErrors[ "fruitError" ] )
        print( "<p class = 'error'>Wybierz owoc!" );
    else print( "<p class = 'error'>Pola z * są obowiązkowe.</p>" );
}
foreach ($inputLIst as $inputname => $inputalt )
{
    print( "<div class='userData'><label>$inputalt:</label><input type = 'text'
name = '$inputname' value = '" . $$inputname . "'>" );
    if ( $listOfErrors[ ( $inputname )."Error" ] == true )
        print( "<span class = 'error'>*</span>" );
    print( "</div>" );
}

print( "</select>
<h2>Wybierz owoc</h2>" );
$counter = 0;
foreach ($fruitList as $currsystem )
{
    print( "<input type = 'radio' name = 'fruit'
value = '$currsystem' " );
    if ( ( !$fruit && $counter == 0 ) || ( $currsystem == $fruit ) )
        print( "checked" );
    print( ">$currsystem" );
    ++$counter;
}

echo "<h2> Gatunki ksiązek</h2>";
echo "<p><input type='checkbox' name='geners[]' value = 'Fantasy'/>Fantasy</p>";
echo "<p><input type='checkbox' name='geners[]' value = 'Dokument'/>Dokument</p>";
echo "<p><input type='checkbox' name='geners[]' value = 'Horror'/>Horror</p>";
echo "<p><input type='checkbox' name='geners[]' value = 'Sci'/>Sci-Fi</p>";
echo "<p><input type='checkbox' name='geners[]' value = 'Romantyczne'/>Romantyczne</p>";
echo "<p><input type='checkbox' name='geners[]' value = 'Inne'/>Inne</p>";

print( "<p class = 'head'><input type = 'submit' name = 'submit'
value = 'Rejestruj'></p></form></body></html>" );
?>
</div>