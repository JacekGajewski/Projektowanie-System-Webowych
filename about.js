var container  = document.querySelector(".container");

document.getElementById("arialElement").addEventListener("click", function (){
    setFont("Arial")
});

document.getElementById("timesElement").addEventListener("click", function (){
    setFont("Times New Roman")
});

document.getElementById("dejavuElement").addEventListener("click", function (){
    setFont("Dejavu Serif")
});

document.getElementById("courierElement").addEventListener("click", function (){
    setFont("Courier")
});

function setFont(fontName) {
    container.style.fontFamily = fontName;
}
function bigImg(x) {
    x.style.height = "300px";
    x.style.width = "300px";
}

function normalImg(x) {
    x.style.height = "256px";
    x.style.width = "256px";
}
