(function(){
    var foods = ["banana", "apple", "peanut butter", "eggs", "Milk", "ground beef", "ice cream", "candy", "Kimchi", "Sushi"];
    var arrayLength = foods.length;
    elFood = document.getElementById("food");
    for(let i = 0; i<arrayLength; i++){
        document.getElementById('food').textContent += foods[i];
        if(i !== arrayLength-1){
            document.getElementById('food').textContent += ", ";
        }
    }
    } ());
    