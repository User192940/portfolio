$(document).ready(function(){
        containsContent = false;
        apiKey = "7ca51b99da06f42f8394acc4a9ff0b1f";
        const searchBtn = document.getElementById("searchBtn");
        const cityInput = document.getElementById("cityInput");
        const weatherInfo = document.getElementById("weatherInfo");

    searchBtn.addEventListener("click", search, false);
    cityInput.addEventListener("search", search, false);
    function search(){
        if(containsContent == true){
            $(".weather").empty();
            $(".card-figure-image").remove();
        }
        containsContent = true;
        const city = cityInput.value.trim();
        if (city === "") {
            alert("Please enter a city name.");
            return;
        }
        apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=imperial`;
        /* let json;
        try{
            fetch(apiUrl)
            .then((response) => json = response.json());
        } catch(error){
            if(error instanceof SyntaxError){
                alert("There was a spelling error", error);
            }
            else{
                alert("There was an unknown error", error)
            }
        }
        if(json){
            skyCondition = checkClouds(json.clouds.all);
            html = skyHTML(json.clouds.all);
            $('.weather').before(skyHTML(json.clouds.all));
            $('.weather').prepend(
            `Temperature: ${Math.round(json.main.temp)}&degF <br>Humidity: ${json.main.humidity}%<br> ${skyCondition}`
            );
        } */
        fetch(apiUrl)
        .then((response) => response.json())
        .then(function(json){
            skyCondition = checkClouds(json.clouds.all);
            html = skyHTML(json.clouds.all);
            $('.weather').before(skyHTML(json.clouds.all));
            $('.weather').prepend(
            `Temperature: ${Math.round(json.main.temp)}&degF <br>Humidity: ${json.main.humidity}%<br> ${skyCondition}`
            );
        });
    }
function checkClouds(cloud){
    if(cloud<5){
        return clouds="Clear";
    }
    else if(5<=cloud<=95){
        return clouds='Partly Cloudy';
    }
    else{
        return clouds='cloudy';
    }
}
function skyHTML(cloud){
    if(cloud<5){
        return clouds='<img class="card-figure-image" src="images/sunny.png" width="60%" height="auto" />';
    }
    else if(cloud>=5 && cloud<=95){
        return clouds='<img class="card-figure-image" src="images/partly-cloudy.png" width="60%" height="auto"/>';
    }
    else{
        return clouds='<img class="card-figure-image" src="images/Draw_cloudy.png" width="60%" height="auto" />';
    }
}
})