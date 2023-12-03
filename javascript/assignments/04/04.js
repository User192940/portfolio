var elUser = document.getElementById("username");
const elPass = document.getElementById('password');
const elFeedback = document.getElementById('feedback');

function checkUsername(minLength){
    if(elUser.value.length < minLength){
        elFeedback.style.display = 'block';
        elFeedback.innerHTML = "Username must be " + minLength + " characters or more";
    }
    else{
        elFeedback.style.display = 'none';
        elFeedback.innerHTML = '';
    }
}
function checkPassword(minLength){
    if(elPass.value.length < minLength){
        elFeedback.style.display = 'block';
        elFeedback.innerHTML = "Password must be " + minLength + " characters or more";
    }
    else{
        elFeedback.style.display = 'none';
        elFeedback.innerHTML = '';
    }
}
elPass.addEventListener('blur', function(){
    checkPassword(10);
}, false);
elUser.addEventListener('blur', function(){
checkUsername(5);
 }, false);