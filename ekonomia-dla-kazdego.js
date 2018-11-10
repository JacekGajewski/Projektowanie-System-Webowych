var firstParagraph  = document.getElementById("firstParagraph");
var opis = document.getElementById("opis");
var buyButton = document.getElementById("buy-btn");
var powiadomButton = document.getElementById("powiadom");
var emailSpan = document.getElementById("email-span");

firstParagraph.innerHTML = "<strong>Pogrubienie</strong>";

buyButton.addEventListener("click", prace);

powiadomButton.addEventListener("mouseover", emailPrompt);


function prace() {
    alert("Błąd! Spróbuj ponownie później.");
}

function emailPrompt() {
    var email;
    do {
        email =  prompt("Podaj email:");
    }while (email.length < 1);

    emailSpan.textContent = email;
}
