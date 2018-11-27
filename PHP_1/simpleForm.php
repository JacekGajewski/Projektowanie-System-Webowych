<!DOCTYPE html>
<html lang="">
<head>
    <meta charset = "utf-8">
    <title>Registration Form</title>
    <style type = "text/css">
        p
        { margin: 0; }
        .error { color: black }
        p.head { font-weight: bold; margin-top: 10px; }
        label
        { width: 8em; float: left;
         }
        .userData{
            margin-top: 8px;
        }
    </style>

    <meta name="description" content="Polecane książki do przeczytania"/>
    <meta name="keywords" content="książka, książki, lektura"/>
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
$fname = isset($_POST[ "fname" ]) ? $_POST[ "fname" ] : "";
$lname = isset($_POST[ "lname" ]) ? $_POST[ "lname" ] : "";
$birthDate = isset($_POST[ "birthDate" ]) ? $_POST[ "birthDate" ] : "";
$email = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
$phone = isset($_POST[ "phone" ]) ? $_POST[ "phone" ] : "";
$card = isset($_POST[ "card" ]) ? $_POST[ "card" ] : "";
$bookTypes = isset($_POST[ "geners" ]) ? $_POST[ "geners" ] : "";

$book = isset($_POST[ "book" ]) ? $_POST[ "book" ] : "";
$os = isset($_POST[ "os" ]) ? $_POST[ "os" ] : "";
$iserror = false;
$formerrors =
    array( "fnameerror" => false, "lnameerror" => false,
        "emailerror" => false, "phoneerror" => false );
$booklist = array( "Styczeń", "Luty", "Marzec", "Kwiecień" );
$systemlist = array( "Styczeń", "Luty", "Marzec", "Kwiecień" );
$inputlist = array( "fname" => "Imię",
    "lname" => "Nazwisko", "email" => "Email",
    "phone" => "Numer Telefonu", "birthDate" => "Miesiąc urodzin",
    "card" => "Numer karty");

$simpleArray = array("Raz", "Dwa", "Trzy");

if ( isset( $_POST["submit"] ) ) {
    if ($fname == "") {
        $formerrors["fnameerror"] = true;
        $iserror = true;
    } // end if
    if ($lname == "") {
        $formerrors["lnameerror"] = true;
        $iserror = true;
    } // end if
    if ($email == "") {
        $formerrors["emailerror"] = true;
        $iserror = true;
    } // end if
//    if (!preg_match("/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/",
//        $phone)) {
//        $formerrors["phoneerror"] = true;
//        $iserror = true;
//    } // end if
    if (!$iserror)
    {
        print( "<p>Dziękujemy za rejestrację.</p>
<p class = 'head'>Twoje informacje:</p>
<p>Imię i nazwisko: $fname $lname</p>
<p>Email: $email</p>");
echo "<p>Numer telefonu: " .(int) $phone."</p>"; // Rzutowanie
echo "<p>Miesiąc urodzin: $birthDate</p>";
echo "<p>Numer karty: $card</p>";
echo '<p>Typ: ' .gettype($card). ' Konwersja na int: </p>';
settype($card, "integer");
echo '<p>Typ: ' .gettype($card). '</p>';


print("</body></html>" );
        echo '<p class="head">Wybrane rodzaje książek: </p>';
        for ($i = 0; $i < count($bookTypes); ++$i)
            echo '<p>'.$bookTypes[$i].'</p>';

    }
echo '<p class="head">Pierszeństwo operatorów na przykładzie \'Testing \' . 1 + 2 . \'45\'</p>';
    echo 'Testing ' . 1 + 2 . '45';

    echo '<p class="head">Poruszanie się po tablicy</p>';
    echo '<p>Current: ' .current($simpleArray).'</p>';
    echo '<p>Klucz: ' .key($simpleArray).'</p>';
    echo '<p>Next: ' .next($simpleArray).'</p>';
    echo '<p>Klucz: ' .key($simpleArray).'</p>';
    echo '<p>Reset: ' .reset($simpleArray).'</p>';
    die(); // finish the page
}

print( "<form method = 'post' action = 'simpleForm.php'>
<h2>Dane użytkownika</h2>");
if ( $iserror )
{
    print( "<p class = 'error'>Pola z * są obowiązkowe.</p>" );
}
foreach ( $inputlist as $inputname => $inputalt )
{
    print( "<div class='userData'><label>$inputalt:</label><input type = 'text'
name = '$inputname' value = '" . $$inputname . "'>" );
    if ( $formerrors[ ( $inputname )."error" ] == true )
        print( "<span class = 'error'>*</span>" );
    print( "</div>" );
}
if ( $formerrors[ "phoneerror" ] )
    print( "<p class = 'error'>Must be in the form
(555)555-5555" );
print( "<h2>Publications</h2>
<p>Jakie gatunki Cię interesują?</p>

<select name = 'book'>" );
foreach ( $booklist as $currbook )
{
    print( "<option" .
        ($currbook == $book ? " selected>" : ">") .
        $currbook . "</option>" );
}
print( "</select>
<h2>Operating System</h2>
<p>Which operating system do you ue?</p>" );
$counter = 0;
foreach ( $systemlist as $currsystem )
{
    print( "<input type = 'radio' name = 'os'
value = '$currsystem' " );
    if ( ( !$os && $counter == 0 ) || ( $currsystem == $os ) )
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
value = 'Register'></p></form></body></html>" );
?>
</div>