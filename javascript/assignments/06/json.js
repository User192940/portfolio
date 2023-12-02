$(document).ready(function(){
    $("button").click(function(){
        fetch('json-data.json')
        .then((response) => response.json())
        .then(function(json){
            $('#json-item1').prepend(
            `${json[0].name} works at ${json[0].company}
            located at ${json[0].address}
            his ID is ${json[0].id} 
            and he is ${json[0].about}`
            );
            $('#json-item2').prepend(
                `${json[1].name} works at ${json[1].company}
                located at ${json[1].address}
                his ID is ${json[1].id} 
                and he is ${json[1].about}`
                );
    });
    });
});
