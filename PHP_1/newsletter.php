<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Rejestracja</title>
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

    <form id="myForm" autocomplete="on" action="#">
        Zwrot:
        <select name="Zwrot">
            <option>Pani</option>
            <option>Pan</option>
        </select>

        <table>
            <tbody>
            <tr>
                <td width="150">Imie: </td>
                <td><input  type="text" id="uname" name="uname" maxlength="30" autofocus></td> <td>Tekst - max 30 znaków</td>
            </tr>
            <tr>
                <td>Nazwisko: </td>
                <td><input type="text" id="usname" name="usname" maxlength="45" ></td><td>Tekst - max 45 znaków</td>
            </tr>
            <tr>
                <td>Miesiąc urodzin: </td>
                <td>
                    <input list="miesiace" id="umonth" name="umonth">
                    <datalist id="miesiace">
                        <option value="Styczeń">
                        <option value="Luty">
                        <option value="Marze">
                        <option value="Kwiecień">
                        <option value="Maj">
                        <option value="Czerwiec">
                        <option value="Lipiec">
                        <option value="Sierpień">
                        <option value="Wrzesień">
                        <option value="Październik">
                        <option value="Listopad">
                        <option value="Grudzień">
                    </datalist>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" id="uemail" name="uemail"></td>
                <td></td>
            </tr>
            <tr>
                <td>Numer telefonu: </td>
                <td><input type="tel" id="utel" name="utel" pattern="[1-9]{9}"></td>
                <td></td>
            </tr>
            </tbody>
        </table>

        <br>
        Jakie gatunki Cię interesują:
        <br>
        <input type="checkbox" name="gatunek" value="fan"> Fantazy<br>
        <input type="checkbox" name="gatunek" value="sf"> Sci-Fi<br>
        <input type="checkbox" name="gatunek" value="doc"> Dokument<br>
        <input type="checkbox" name="gatunek" value="rom"> Powieści Romantyczne<br>
        <input type="checkbox" name="gatunek" value="hor"> Horrory<br>
        <input type="checkbox" name="gatunek" value="his"> Historyczne<br>
        <input type="checkbox" name="gatunek" value="in"> Inne<br>
        <br>

        <div></div>

        <aside style=" font-size:10pt;   width:30em">Administratorem twoich danych osobowych jest Ksiazkowo. <br>Dane będą przetwarzane w celu wysyłki newslettera, na zasadach określonych w regulaminie.</aside> <br>
        <a href="#">Regulamin</a><br><br>
        <input id="submit" type="submit" >
        <button type="reset">Wyczyść Dane</button>
        <button onclick="zawartoscFormularza()">Sprawdź podane dane</button>
        <p id="dane"></p>
    </form>

</div>
</body>
</html>