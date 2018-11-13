function zawartoscFormularza() {
    var x = document.forms[0];
    var txt = "";
    var i;
    for (i = 0; i < 6; i++) {
        txt = txt + x.elements[i].value + "<br>";
    }
    document.getElementById("dane").innerHTML = txt;
}