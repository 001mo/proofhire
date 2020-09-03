// FOCUS AFFACTION ==============
var 
form_control = document.querySelectorAll('input.form-control, #eyes'),
input_label_focused = 'input-label-focused',
input_group_focused = 'input-group-focused';


// =========== EMAIL VALIDATION ==========
var email = document.getElementById('email'),
invalid_email = document.getElementById('invalid-email');

if(email.value !== '' ){
    this.parentElement.children[1].classList.add(input_label_focused);
    this.parentElement.classList.add(input_group_focused);
}

email.onfocus = function(){
    this.parentElement.children[1].classList.add(input_label_focused);
    this.parentElement.classList.add(input_group_focused);
}
 
 email.onblur = function(){
    'use strict';

    switch(email.value){
        case '':
            this.parentElement.parentElement.classList.add('form-group-error');
            this.parentElement.children[1].classList.remove(input_label_focused);
            this.parentElement.classList.remove(input_group_focused);
            
            this.parentElement.children[1].classList.add('text-danger');
            this.parentElement.classList.add('border-danger');
        
            invalid_email.classList.remove('opacity-0');
            break;
        default:
            this.parentElement.parentElement.classList.remove('form-group-error');
            this.parentElement.children[1].classList.remove('text-danger');
            this.parentElement.classList.remove('border-danger');

            invalid_email.classList.add('opacity-0');
            return true;
    }
}

if(email.value === '' || invalid_email.classList.contains('opacity-0')){
    email.onkeydown = function(){
        this.parentElement.parentElement.classList.remove('form-group-error');
        this.parentElement.children[1].classList.remove('text-danger');
        this.parentElement.classList.remove('border-danger');

        invalid_email.classList.add('opacity-0');
        return true;
    }
}



// ============================ PASSWORD AFFECTION & VISIBILTY BUTTON ===============================
var
password = document.getElementById('password'),
eyes = document.querySelector('button#eyes'),
eye = document.getElementById('eye'),
eye_slash = document.getElementById('eye-slash');

eyes.onclick = function(){
    if(password.type === 'password' || eye.classList.contains('display-none')){
        password.setAttribute('type', 'text');
        eye_slash.classList.add('display-none');
        eye.classList.remove('display-none');
    }

    else{
        password.setAttribute('type', 'password');
        eye.classList.add('display-none');
        eye_slash.classList.remove('display-none');
    }
}

if(password.value !== ''){
    this.parentElement.children[1].classList.add(input_label_focused);
    this.parentElement.classList.add(input_group_focused);   
}

password.onfocus = function(){
    this.parentElement.children[1].classList.add(input_label_focused);
    this.parentElement.classList.add(input_group_focused);
}

invalid_password = document.getElementById('invalid-password');

eyes,password.onblur = function(){
    switch(password.value){
        case '':
            password.parentElement.parentElement.classList.add('form-group-error');
            password.parentElement.children[1].classList.remove(input_label_focused);
            password.parentElement.classList.remove(input_group_focused);
            
            password.parentElement.children[1].classList.add('text-danger');
            password.parentElement.classList.add('border-danger');

            invalid_password.classList.remove('opacity-0');
            break;
        default:
            password.parentElement.parentElement.classList.remove('form-group-error');
            password.parentElement.children[1].classList.remove('text-danger');
            password.parentElement.classList.remove('border-danger');

            invalid_password.classList.add('opacity-0');

            return true;

    }
}

if(password.value === '' || invalid_password.classList.contains('opacity-0')){
    password.onkeydown = function(){
        password.parentElement.parentElement.classList.remove('form-group-error');
        password.parentElement.children[1].classList.remove('text-danger');
        password.parentElement.classList.remove('border-danger');

        invalid_password.classList.add('opacity-0');
    }
}

form_control[0].focus();