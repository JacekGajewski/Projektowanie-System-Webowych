function zawartoscFormularza() {
    var x = document.forms[0];
    var txt = "";
    var i;
    for (i = 0; i < 6; i++) {
        txt = txt + x.elements[i].value + "<br>";
    }
    document.getElementById("dane").innerHTML = txt;
}

var myForm = document.getElementById("myForm");
myForm.onsubmit = function(){
    return confirm( "Are you sure you want to submit?" );

};
myForm.onreset = function(){
    return confirm( "Are you sure you want to reset?" );
};
