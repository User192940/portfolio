(function(){
    function Person(name, age, retireAge){
        this.name = name;
        this.age = age;
        this.retireAge = retireAge;
        this.yearsToRetirement = function(){
            return this.retireAge - this.age;
        };
    }
    var oldPerson = new Person("Jane", 62, 64);
    if(true){
        var details1 = oldPerson.name + ': Only ';
        details1 += oldPerson.yearsToRetirement();
        var elPerson = document.getElementById('person1');
        elPerson.textContent = details1;
    }
    } ());
    