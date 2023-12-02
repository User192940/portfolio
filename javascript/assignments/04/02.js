const elAnchor = document.getElementById('button');
elAnchor.onclick = function (){
    var img = document.createElement("img");
    var url = this.href;
    img.setAttribute('src', url);
    this.appendChild(img);
    return false;
};