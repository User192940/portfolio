(function(){
    const person = new Object();
    person.name = "John";
    person.age = 50;
    person.retireAge = 63;
    person.yearsToRetirement = function(){
        return this.retireAge - this.age;
    };
    var elYears = document.getElementById("yearsLeft");
    elYears.textContent = person.yearsToRetirement();
    } ());
    