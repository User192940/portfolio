/*const button = document.getElementById("button");
button.addEventListener("click", (e) => {
    var img = document.createElement("img");
    var url = button.href;
    img.setAttribute('src', "images/icon-heart.png");
    button.appendChild(img);
    e.preventDefault();
})*/
function calledFunction(elAnchor){
    let url = elAnchor.getAttribute("href");
    let img = document.createElement("img");
    img.setAttribute('src', url);
    elAnchor.appendChild(img);
}