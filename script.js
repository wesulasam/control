function CheckPassword(inputtxt)
{
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
if(inputtxt.value.match(passw))
{
alert('SIGNUP SUCCESSFUL.');
document.RegForm.password.focus();
return true;

}
else
{
alert('INCORRECT PASSWORD FORMAT (Should contain a minimum of 6 characters,an uppercase letter, a lower case letter and a number)')
document.RegForm.password.focus();
return false;
}
}



var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "username" && password == "password"){
alert ("Login successfully");
window.location = "home.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
