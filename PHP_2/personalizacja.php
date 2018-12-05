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

    <div class="container">
        <a href="ciasteczka.php">Powrót</a>
        <h1 style= "font-size: 36px">Ustawienia</h1>
        <form action="ciasteczka.php" method="post">
            Wybierz kolor tła:<br>
            <input type="radio" id="o1"  name="color" value="#BDB76B""> DarkKhaki<br>
            <input type="radio" id="o2" name="color" value="#008B8B"> DarkCyan<br>
            <input type="radio" id="o3" name="color" value="#2F4F4F"> DarkSlateGray<br>
            <br>
            Wybierz kolor czcionki:<br>
            <input type="radio" id="cc1"  name="colorC" value="#000000">Czarny<br>
            <input type="radio" id="cc2" name="colorC" value="#ffffff">Biały <br>
            <br>
            Wybierz czcionkę:<br>
            <input type="radio" id="c1"  name="font" value="Arial"> Arial<br>
            <input type="radio" id="c2" name="font" value="Times New Roman">Times New Roman<br>
            <input type="radio" id="c3"  name="font" value="Dejavu Serif">Dejavu Serif<br>
            <input type="radio" id="c4" name="font" value="Courier">Courier<br>


            <input type="submit" value="Wyślij" name="submit"/>
        </form>

    </div>

    </body>
    </html>