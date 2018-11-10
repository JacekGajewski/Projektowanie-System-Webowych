var goBtn  = document.getElementById("go");
var addBtn  = document.getElementById("appendElement");
var replaceBtn  = document.getElementById("replaceElement");
var removeBtn  = document.getElementById("removeElement");
var list  = document.getElementById("listAppend");
var changeBackground  = document.getElementById("changeBackground");

goBtn.addEventListener("click", addElement);
replaceBtn.addEventListener("click", replaceElement);
addBtn.addEventListener("click", addElementBefore);

removeBtn.addEventListener("click", removeElement);

changeBackground.addEventListener("click", changeBackgroundColor);

function addElement() {
    var btn = document.createElement("BUTTON");
    var t = document.createTextNode("CLICK ME");
    btn.appendChild(t);
    goBtn.appendChild(btn);
}

function addElementBefore() {
    var newItem = document.createElement("LI");
    var textnode = document.createTextNode("Zero");
    newItem.appendChild(textnode);
    list.insertBefore(newItem, list.childNodes[0]);
}

function replaceElement() {
    var textnode = document.createTextNode("Zastąpiony");
    var item = list.childNodes[1];
    item.replaceChild(textnode, item.childNodes[0]);
}

function removeElement() {
    var parentList = document.getElementById('thirdElement').parentNode;
    parentList.removeChild(list.childNodes[1]);
}

function changeBackgroundColor() {
    var container  = document.querySelector(".container");
    container.classList.toggle("container-new-background");


}




