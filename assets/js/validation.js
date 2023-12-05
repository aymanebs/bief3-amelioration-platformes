const form= document.getElementById('form');
const username= document.getElementById('username');
const password= document.getElementById('password');
const password2= document.getElementById('password2');
const name= document.getElementById('name');
const email= document.getElementById('email');
const phone= document.getElementById('phone');
const adress= document.getElementById('adress');
form.addEventListener("submit",checkInputs);
function checkInputs(){
const usernameValue = username.value.trim();
const passwordValue = password.value.trim();
const password2Value = password2.value.trim();
const nameValue = name.value.trim();
const emailValue = email.value.trim();
const phoneValue = phone.value.trim();
const adressValue = adress.value.trim();
if(usernameValue ==""){
    setErrorFor(username,'Input required');
}
else{
    setSuccessFor(username);
}
if(passwordValue ==""){
    setErrorFor(password,'Input required');
}
else{
    setSuccessFor(password);
}
if(password2Value ==""){
    setErrorFor(password2,'Input required');
}else if(password2Value !== passwordValue){
    setErrorFor(password2,'passwords dont match');
}
else{
    setSuccessFor(password2);
}
if(nameValue ==""){
    setErrorFor(name,'Input required');
}
else{
    setSuccessFor(name);
}
if(emailValue ==""){
    setErrorFor(email,'Input required');
}else if(!isEmail(emailValue)){
    setErrorFor(email,'Email not valid');
}
else{
    setSuccessFor(email);
}
if(phoneValue ==""){
    setErrorFor(phone,'Input required');
}
else{
    setSuccessFor(phone);
}
if(adressValue ==""){
    setErrorFor(adress,'Input required');
}
else{
    setSuccessFor(adress);
}
}

function setErrorFor(input,message){
    const formGroup =input.parentElement; // .form-group
    const small= formGroup.querySelector('small');
    // error message inside small
    small.innerText = message;
    formGroup.className ='form-group error';
}
function setSuccessFor(input){
    const formGroup =input.parentElement; // .form-group
    formGroup.className ='form-group success';
}
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

