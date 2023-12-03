(function(){
    var table = 3;             // Unit of table
    var operator = 'subtraction'; // Type of calculation
    var i = 1;                 // Set counter to 1
    var msg = '';              // Message

if (operator === 'subtraction') {
  // Do subtraction
  while (i < 11) {
    msg += i + ' - ' + table + ' = ' + (i - table) + '<br />';
    i++;
  }
} else {
  // Do division
  while (i < 11) {
    msg += i + ' / ' + table + ' = ' + (i/table) + '<br />';
    i++;
  }
}

// Write the message into the page
var el = document.getElementById('blackboard');
el.innerHTML = msg;

    } ());
    