$(document).ready(function(){
        console.group('Name');
        console.log("David");
        console.log('Fedchuk');
        fetch('https://api.openweathermap.org/data/3.0/onecall?lat=44.5192&lon=-88.0198&units=imperial&appid=7ca51b99da06f42f8394acc4a9ff0b1f')
        .then((response) => response.json())
        .then(function(json){
            skyCondition = checkClouds(json.current.clouds);
            html = skyHTML(json.current.clouds);
            $('.green-bay').before(skyHTML(json.current.clouds));
            $('.green-bay').prepend(
            `Temperature: ${json.current.temp}&degF <br>Humidity: ${json.current.humidity}%<br> ${skyCondition}`
            );
        });
            fetch('https://api.openweathermap.org/data/3.0/onecall?lat=41.881832&lon=-87.623177&units=imperial&appid=7ca51b99da06f42f8394acc4a9ff0b1f')
        .then((response) => response.json())
        .then(function(json){
            skyCondition = checkClouds(json.current.clouds);
            $('.milwaukee').before(skyHTML(json.current.clouds));
            $('.milwaukee').prepend(
                `Temperature: ${json.current.temp}&degF <br>Humidity: ${json.current.humidity}%<br> ${skyCondition}`
            );
        });
            fetch('https://api.openweathermap.org/data/3.0/onecall?lat=43.038902&lon=-87.906471&units=imperial&appid=7ca51b99da06f42f8394acc4a9ff0b1f')
        .then((response) => response.json())
        .then(function(json){
            skyCondition = checkClouds(json.current.clouds);
            $('.chicago').before(skyHTML(json.current.clouds));
            $('.chicago').prepend(
                `Temperature: ${json.current.temp}&degF <br>Humidity: ${json.current.humidity}%<br> ${skyCondition}`
            );
        });
            fetch('https://api.openweathermap.org/data/3.0/onecall?lat=44.63194&lon=-88.03927&units=imperial&appid=7ca51b99da06f42f8394acc4a9ff0b1f')
        .then((response) => response.json())
        .then(function(json){
            skyCondition = checkClouds(json.current.clouds);
            $('.suamico').before(skyHTML(json.current.clouds));
            $('.suamico').prepend(
                `Temperature: ${json.current.temp}&degF <br>Humidity: ${json.current.humidity}%<br> ${skyCondition}`
            );
        });
    });
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
        return clouds='<img class="card-figure-image" src="images/sunny.png" width="100%" height="auto" />';
    }
    else if(cloud>=5 && cloud<=95){
        return clouds='<img class="card-figure-image" src="images/partly-cloudy.png"/>';
    }
    else{
        return clouds='<img class="card-figure-image" src="images/Draw_cloudy.png" width="100%" height="auto" />';
    }
}