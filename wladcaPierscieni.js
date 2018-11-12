function ileLinkow() {
    var x = document.links.length;
    document.getElementById("demo3").innerHTML = x;

}
function linkZeZdjecia() {
    var x = document.links.namedItem("ikl").href;
    document.getElementById("demo1").innerHTML = x;
}
function ramkaLink() {
    document.links[13].style.border = "5px solid red";
}