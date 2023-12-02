(function(){
    var num = Math.floor(Math.random()*10);
    if(num<5){
        document.getElementById("if").textContent = " was less than 5!";
    }
    else{
        document.getElementById("else").textContent = " was 5 or more!";
    }
    } ());
    