function kCode(event) {
    var x = event.which || event.keyCode;
    document.getElementById("kc").innerHTML = "Kod klawisza: " + x;
}
function  mouseDown(event) {
    var x = "";
    if (event.ctrlKey) {
        x += "Ctrl "
    }
    if(event.shiftKey) {
        x += "Shift "
    }
    if(event.altKey) {
        x += "Alt "
    }
    if(x != "")
    {
        document.getElementById("klawisze").innerHTML = "Wciśnięte klawisze: " + x;
    }
    else
    {
        document.getElementById("klawisze").innerHTML = "Wciśnięte klawisze: BRAK";
    }
}