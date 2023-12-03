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
    var youngPerson = new Person("Jimmy", 20, 65);

    var details1 = oldPerson.name + ': Only ';
    details1 += oldPerson.yearsToRetirement();
var elHotel1 = document.getElementById('person1');
elHotel1.textContent = details1;

var details2 = youngPerson.name + ': Only ';
    details2 += youngPerson.yearsToRetirement();
var elHotel2 = document.getElementById('person2');
elHotel2.textContent = details2;
    } ());
    