var secondPlace  = document.getElementById("second-place");
var thirdPlace  = document.getElementById("third-place");

radomPlace();


function radomPlace() {

    var randomNumber = Math.floor((Math.random() * 2) + 1);
    switch (randomNumber) {
        case 1:
            secondPlace.textContent = "Droga królów";
            thirdPlace.textContent = "Siła nawyku";
            break;
        case 2:
            thirdPlace.textContent = "Droga królów";
            secondPlace.textContent = "Siła nawyku";
    }

}