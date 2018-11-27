<!DOCTYPE html>
<!-- Fig. 19.20: dynamicForm.php -->
<!-- Dynamic form. -->
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
// variables used in script
$fname = isset($_POST[ "fname" ]) ? $_POST[ "fname" ] : "";
$lname = isset($_POST[ "lname" ]) ? $_POST[ "lname" ] : "";
$birthDate = isset($_POST[ "birthDate" ]) ? $_POST[ "birthDate" ] : "";
$email = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
$phone = isset($_POST[ "phone" ]) ? $_POST[ "phone" ] : "";

$book = isset($_POST[ "book" ]) ? $_POST[ "book" ] : "";
$os = isset($_POST[ "os" ]) ? $_POST[ "os" ] : "";
$iserror = false;
$formerrors =
    array( "fnameerror" => false, "lnameerror" => false,
        "emailerror" => false, "phoneerror" => false );
// array of book titles
$booklist = array( "Styczeń", "Luty", "Marzec", "Kwiecień" );
// array of possible operating systems
$systemlist = array( "Styczeń", "Luty", "Marzec", "Kwiecień" );
// array of name values for the text input fields
$inputlist = array( "fname" => "Imię",
    "lname" => "Nazwisko", "email" => "Email",
    "phone" => "Numer Telefonu", "birthDate" => "Miesiąc urodzin" );
// ensure that all fields have been filled in correctly
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
    {// build INSERT query

        print( "<p>Hi $fname. Thank you for competing the survey.
You have been added to the $book mailing list.</p>
<p class = 'head'>The following information has been
saved in our database:</p>
<p>Name: $fname $lname</p>
<p>Email: $email</p>
<p>Phone: $phone</p>
<p>Miesiąc urodzin: $birthDate</p>
<p class = 'head'>This is only a sample form.
You have not been added to a mailing list.</p>
</body></html>" );
        echo '<p>Selected: </p>';
        foreach ($_POST["geners"] as $gener)
        {
            echo '<p>'.$gener.'</p>';
        }
        die(); // finish the page
    } // end if
} // end if
print( "<p>Please fill in all fields and click Register.</p>" );
if ( $iserror )
{
    print( "<p class = 'error'>Fields with * need to be filled
in properly.</p>" );
} // end if
print( "<!-- post form data to dynamicForm.php -->
<form method = 'post' action = 'simpleForm.php'>
<h2>User Information</h2>
<!-- create four text boxes for user input -->" );
foreach ( $inputlist as $inputname => $inputalt )
{
    print( "<div class='userData'><label>$inputalt:</label><input type = 'text'
name = '$inputname' value = '" . $$inputname . "'>" );
    if ( $formerrors[ ( $inputname )."error" ] == true )
        print( "<span class = 'error'>*</span>" );
    print( "</div>" );
} // end foreach
if ( $formerrors[ "phoneerror" ] )
    print( "<p class = 'error'>Must be in the form
(555)555-5555" );
print( "<h2>Publications</h2>
<p>Jakie gatunki Cię interesują?</p>
<!-- create drop-down list containing book names -->
<select name = 'book'>" );
foreach ( $booklist as $currbook )
{
    print( "<option" .
        ($currbook == $book ? " selected>" : ">") .
        $currbook . "</option>" );
} // end foreach
print( "</select>
<h2>Operating System</h2>
<p>Which operating system do you ue?</p>
<!-- create five radio buttons -->" );
$counter = 0;
foreach ( $systemlist as $currsystem )
{
    print( "<input type = 'checkbox' name = 'os'
value = '$currsystem' " );
    if ( ( !$os && $counter == 0 ) || ( $currsystem == $os ) )
        print( "checked" );
    print( ">$currsystem" );
    ++$counter;
} // end foreach

echo "<h2> Gatunki ksiązek</h2>";
echo "<p><input type='checkbox' name='geners[]' value = 'Fantasy'/>Fantasy</p>";
echo "<p><input type='checkbox' name='geners[]' value = 'Dokument'/>Dokument</p>";
echo "<p><input type='checkbox' name='geners[]' value = 'Horror'/>Horror</p>";
print( "<!-- create a submit button -->
<p class = 'head'><input type = 'submit' name = 'submit'
value = 'Register'></p></form></body></html>" );
?><!-- end PHP script -->
</div>