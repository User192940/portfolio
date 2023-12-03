var elDropdown = document.getElementById('dropdown');
var elDiv = document.getElementById('text');
var elForm = document.getElementById('formSubmit');
var elTerms = document.getElementById('terms')
var elFormHint = document.getElementById('termsHint');

function checkTerms(e){
    if (!elTerms.checked) {                                
        elFormHint.innerHTML = 'You must agree to the terms.'; 
        e.preventDefault();                              
      }
}
function carHint(){
    var car = this.options[this.selectedIndex].value;
    switch(parseInt(car)){
        case 1:
            var p = document.createElement('p');
            p.innerHTML = "You won a digital high five!";
            elDiv.appendChild(p);
            break;
        case 2:
            var p = document.createElement('p');
            p.innerHTML = "You won a brand new Bugatti! Just kidding, but wouldn't that be nice?";
            elDiv.appendChild(p);
            break;
        case 3:
            var p = document.createElement('p');
            p.innerHTML = "You won a compliment, nice moves friend";
            elDiv.appendChild(p);
            break;
        case 4:
            var p = document.createElement('p');
            p.innerHTML = "You won a link to documentation about events. You're welcome, https://developer.mozilla.org/en-US/docs/Web/API/Element/click_event";
            elDiv.appendChild(p);
            break;
    }
}

elForm.addEventListener('submit', checkTerms, false);
elDropdown.addEventListener('change', carHint, false);
    