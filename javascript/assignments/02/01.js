(function(){
function yardsToMeters(){
    var elYards = document.getElementById('yards');
    var elMeters = document.getElementById('meters');
    var yards = elYards.textContent;
    var meters = yards*.9144;
    elMeters.textContent = meters;
    return meters;
}
yardsToMeters();
} ());
