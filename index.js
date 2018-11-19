var createElementBtn  = document.getElementById("createElement");
var test  = document.getElementById("test");

var addBtn  = document.getElementById("appendElement");
var replaceBtn  = document.getElementById("replaceElement");
var removeBtn  = document.getElementById("removeElement");
var list  = document.getElementById("listAppend");

var changeBackground  = document.getElementById("changeBackground");

var myText  = document.getElementById("myText");
var textHelp  = document.getElementById("textHelp");

myText.onfocus = function() {
    textHelp.classList.toggle("focus-blur");
};

myText.onblur = function() {
    textHelp.classList.toggle("focus-blur");
};

test.addEventListener("click", function () {
    if (confirm( "Are you sure you want to submit?" )) {
        alert("True");
    }else  alert("False");
});

createElementBtn.addEventListener("click", addElement);
replaceBtn.addEventListener("click", replaceElement);
addBtn.addEventListener("click", addElementBefore);

removeBtn.addEventListener("click", removeElement);

changeBackground.addEventListener("click", changeBackgroundColor);

function addElement() {
    var btn = document.createElement("BUTTON");
    var t = document.createTextNode("New Button");
    btn.appendChild(t);
    createElementBtn.appendChild(btn);
}

function addElementBefore() {
    var newItem = document.createElement("LI");
    var textnode = document.createTextNode("Zero");
    newItem.appendChild(textnode);
    list.insertBefore(newItem, list.childNodes[1]);
}

function replaceElement() {
    var textnode = document.createTextNode("Zastąpiony");
    var item = list.childNodes[1];
    item.replaceChild(textnode, item.childNodes[0]);
}

function removeElement() {
    var parentList = document.getElementById("thirdElement").parentNode;
    parentList.removeChild(list.childNodes[1]);
}

function changeBackgroundColor() {
    var container  = document.querySelector(".container");
    container.classList.toggle("container-new-background");


}
function ileGrafik() {
    var x = document.images.length;
    document.getElementById("demo").innerHTML = x;
}
function zirudlo() {
    var x = document.images;
    var txt = "";
    var i;
    for (i = 0; i < x.length; i++) {
        txt = txt +  x[i].src + "<br>";
    }
    document.getElementById("demo2").innerHTML = txt;
}

function ramka() {
    var x = document.images[7];
    x.style.border = "10px dotted white";

}


function ileEtykiet() {
    var x = document.anchors.length;
    document.getElementById("etykiety").innerHTML = x;
}