$(document).ready(function(){
    $("button").click(function(){
        $('#image-container').load("ajax-data.html", function(responseTxt, statusTxt, jqXHR){
            if(statusTxt == "success"){
                alert("New content loaded successfully!");
            }
            if(statusTxt == "error"){
                alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
            }
        });
    });
});
