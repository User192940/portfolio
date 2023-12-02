window.onload = function () {
// Assign div#page to variable
var elPage = document.getElementById('page');
var coolCounter = 0;

// Assign all P elements to variable
var elParagraphs = elPage.getElementsByTagName('p');

// Create new element UL
var ul = document.createElement('UL')

// Create for loop – loop through array of P elements
for(let i = 0; i< elParagraphs.length;i++){
    var li = document.createElement('li');
    li.textContent = elParagraphs[i].textContent;
    if(i === elParagraphs.length-1 || i ===0 ){
        li.className = 'complete';
    }
    else{
        li.className = "cool";
        coolCounter++;
    }
    ul.appendChild(li);
}

// In for loop – create new element LI and place P text in LI
// In for loop – Assign class names to LIs
    // First and Last LI use class: complete
    // All other use class: cool
// In for loop – count how many LIs have class: cool
// In for loop – Add new LI to new UL element


// Add UL/LIs to div#page
elPage.appendChild(ul);

// Remove original P elements from the DOM

    var childNodesToRemove = document.getElementById("page").getElementsByTagName('p');
    for(var i=childNodesToRemove.length-1;i >= 0;i--){
        var childNode = childNodesToRemove[i];
        childNode.parentNode.removeChild(childNode);
    }

// Add text to the H2 element
    // show existing H2 text followed by:
    // Number – Items Remaining
    var elementH2= document.getElementById('list');
    elementH2.textContent += ": " + coolCounter + " - ITEMS REMAINING";

// Add text to TITLE element show:
    // Number – Items Remaining
    // followed by existing content
    var title = document.getElementById('title');
    var titleContent = title.textContent;
    title.textContent = coolCounter + " - ITEMS REMAINING " + titleContent;
};
