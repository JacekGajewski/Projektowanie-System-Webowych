function coor(e) {
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("coord").innerHTML = coor;
}

function clearCoor() {
    document.getElementById("coord").innerHTML = "";
}
function OknoTestowe() {
    var myWindow = window.open("", "NoweOkno", "left=700, top=350, width=200, height=100");
    myWindow.document.write("<p>Okno Testowe");
    myWindow.document.write("<br>ScreenX: " + myWindow.screenX);
    myWindow.document.write("<br>ScreenY: " + myWindow.screenY + "</p>");
}