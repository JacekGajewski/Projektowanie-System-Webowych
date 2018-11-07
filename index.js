var secondPlace  = document.getElementById("second-place");
var thirdPlace  = document.getElementById("third-place");
var parseToInt  = document.getElementById("parseInt");
var parseToFloat  = document.getElementById("parseFloat");
var parseIntResult  = document.getElementById("parseIntResult");
var parseFloatResult  = document.getElementById("parseFloatResult");
var submitBtn  = document.getElementById("submit");
var goBtn  = document.getElementById("go");
var forResult  = document.getElementById("forResult");

randomPlace();

submitBtn.addEventListener("click", parse);

goBtn.addEventListener("click", forLoop);

function randomPlace() {

    var randomNumber = Math.floor((Math.random() * 2) + 1);
    switch (randomNumber) {
        case 1:
            secondPlace.textContent = "Droga królów";
            thirdPlace.textContent = "Siła nawyku";
            break;
        case 2:
            thirdPlace.textContent = "Droga królów";
            secondPlace.textContent = "Siła nawyku";
            break;
    }

}

function parse() {
    var a = parseInt(parseToInt.value);
    parseIntResult.innerHTML = a;

    var b = parseFloat(parseToFloat.value);
    parseFloatResult.innerHTML = b;
}

function forLoop() {
    var result ="";
    var numb=[1,2,3,4,5,6,7,8,9];
    function printElt(element, index) {
        result += element.toString() + " | ";

    }
    numb.forEach(printElt);
    forResult.textContent = result;
}
