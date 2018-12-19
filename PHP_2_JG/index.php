<?php
include "header.php";
?>


<div class="jumbotron container">
    <h1 class="display-4">Witaj na stronie!</h1>
    <table>
        <tbody>

        <tr>
            <th><img src="../images/mises.jpg"></th>
            <th><img src="../images/wpokladka.jpg"></th>
            <th><img src="../images/mountains.jpg"></th>
            <th><img src="../images/Edukacja.jpg"></th>
        </tr>

        <tr id="book-title">
            <th>Ludzkie działanie</th>
            <th>Władca pierścieni</th>
            <th><a href="ekonomia-dla-kazdego.html">Ekonomia dla każdego</a></th>
            <th>Ekukacja wolna i przymuszona</th>
        </tr>

        <tr id="book-description">
            <th>Książka, która czekała na polskie wydanie prawie 60 lat (pierwsze wydanie oryginału Human Action 1949). Opus magnum nestora austriackiej szkoły ekonomii Ludwiga von Misesa. Chłodna, rzeczowa rozprawa z socjalizmem, interwencjonizmem i wszelkimi odmianami pseudoekonomii.</th>
            <th>W zamierzchłych czasach kowale elfów wykuli Pierścienie Mocy. Lecz Mroczny Władca, stworzył w tajemnicy Jedyny Pierścień, aby rządził pozostałymi. Ale Pierścień zniknął na wiele wieków w Śródziemiu, zanim trafił w ręce hobbita, którego przeznaczeniem stało się jego zniszczenie...</th>
            <th>Mimo kilkunastu lat tzw. transformacji ustrojowej, obowiązującą doktryną społeczno-ekonomiczną pozostaje w polsce socjalizm czyli system, w którym państwo jest wszystkim, a obywatel nikim. Otwarcie nikt tego rzecz jasna nie twierdzi, w rzeczywistości jednak społeczeństwo – w sferze gospodarczej – podporządkowane jest woli urzędników. </th>
            <th>„Indywidualizm jest tłamszony uczeniem dostosowywania się do „grupy”. (…) W rezultacie dzieci są uczone, by doszukiwać się prawdy raczej w opinii większości, niż we własnym, niezależnym rozumowaniu lub w opiniach specjalistów najlepszych w danej dziedzinie.</th>
        </tr>

        <tr>
            <th>Więcej >>></th>
            <th>Więcej >>></th>
            <th>Więcej >>></th>
            <th>Więcej >>></th>
        </tr>

        </tbody>
    </table>

    <button class="button" id="createElement">Create element </button>
    <button class="button" id="test">test </button>
    <br><br>

    <h3>Lista appendBefore</h3>

    <ul id="listAppend">
        <li>Raz</li>
        <li>Dwa</li>
        <li id="thirdElement">Trzy</li>
    </ul>

    <button class="button" id="appendElement">Dodaj</button>
    <button class="button" id="replaceElement">Zastap</button>
    <button class="button" id="removeElement">Usuń</button>

    <br><br><br>

    <!--<button class="button" id="blurBtn">Blur</button>-->
    <!--<button class="button" id="focusBtn">Focus</button>-->
    <!--<br><br>-->
    <input type="text" id="myText"  value="A text field">
    <br>
    <span id="textHelp">Tekst pomocy</span>


    <a id="top" ><h3>TOP 10 książek</h3></a>


    <ol id="list">
        <li><a href="wladcaPierscieni.html">Władca pierścieni</a></li>
        <li id="second-place"> Draga królów</li>
        <li id="third-place"> Siła nawyku</li>
        <li> Ekonomia dla każdego</li>
        <li> Ludzkie działanie</li>
        <li> Szkoła austriacka</li>
        <li> Bieda i bogactwo</li>
        <li> Ogniem i mieczem</li>
        <li> Trudne czasy</li>
        <li> Szkice piórkiem</li>
    </ol>

    <h2>Rekomendacje</h2>

    <div class="container-recommended">
        <div class="recomended-book">
            <img src="../images/mises.jpg">
            <p>Książka, która czekała na polskie wydanie prawie 60 lat (pierwsze wydanie oryginału Human Action 1949). Opus magnum nestora austriackiej szkoły ekonomii Ludwiga von Misesa. Chłodna, rzeczowa rozprawa z socjalizmem, interwencjonizmem i wszelkimi odmianami pseudoekonomii.</p>
        </div>
        <div class="recomended-book">
            <img src="../images/mises.jpg">
            <p>Książka, która czekała na polskie wydanie prawie 60 lat (pierwsze wydanie oryginału Human Action 1949). Opus magnum nestora austriackiej szkoły ekonomii Ludwiga von Misesa. Chłodna, rzeczowa rozprawa z socjalizmem, interwencjonizmem i wszelkimi odmianami pseudoekonomii.</p>
        </div>
        <div class="recomended-book">
            <img src="../images/mises.jpg">
            <p>Książka, która czekała na polskie wydanie prawie 60 lat (pierwsze wydanie oryginału Human Action 1949). Opus magnum nestora austriackiej szkoły ekonomii Ludwiga von Misesa. Chłodna, rzeczowa rozprawa z socjalizmem, interwencjonizmem i wszelkimi odmianami pseudoekonomii.</p>
        </div>
        <div class="recomended-book">
            <img src="../images/mises.jpg">
            <p>Książka, która czekała na polskie wydanie prawie 60 lat (pierwsze wydanie oryginału Human Action 1949). Opus magnum nestora austriackiej szkoły ekonomii Ludwiga von Misesa. Chłodna, rzeczowa rozprawa z socjalizmem, interwencjonizmem i wszelkimi odmianami pseudoekonomii.</p>
        </div>
    </div>

    <button onclick="ileGrafik()">Ile Grafik</button>
    <p id="demo"></p>
    <button onclick="zirudlo()">Źródło</button>
    <p id="demo2"></p>
    <button onclick="ramka()">Ramka Dla Ostatniej Okładki</button>
    <button onclick="ileEtykiet()">Ile Etykiet</button>
    <p id="etykiety"></p>

    <nav>
        <a href="twojeKsiazki.html">Twoje książki</a> |
        <a href="newsletter.html" target="_blank" title="Zapisz się do newslettera">Bądź na bierząco już od dziś</a>
    </nav>

    <br /><br />

    <strong>Kontakt</strong>
    <br>
    <span>
	✉ <a href="mailto:email@server.com" title="Napisz do nas">email@server.com</a>
	<br>
	☎ 226123456</span>

    <br><br>
    <details>
        <summary>Copyright 1999-2018.</summary>
        <p> - by Ksiazkowo. All Rights Reserved.</p>
        <p>All content on this web site is the property of the company Ksiazkowo.
        </p>
    </details>
</div>