const elAnchor = document.getElementById('button');
elAnchor.addEventListener('click',
 function(e){
e.preventDefault();
var img = document.createElement("img");
    var url = elAnchor.href;
    img.setAttribute('src', url);
    elAnchor.appendChild(img);
 }, 
 false);