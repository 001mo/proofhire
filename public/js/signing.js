/////////// input affection
function inputAction(input, action, input_group, input_label){
    switch(action){
        case 'add':
            if(!input.parentElement.classList.contains(input_group)){
                input.parentElement.classList.add(input_group);
            }
            if(!input.parentElement.children[1].classList.contains(input_label)){
                input.parentElement.children[1].classList.add(input_label);
            }
            break;
        case 'remove':
            if(input.parentElement.classList.contains(input_group)){
                input.parentElement.classList.remove(input_group);
            }
            if(input.parentElement.children[1].classList.contains(input_label)){
                input.parentElement.children[1].classList.remove(input_label);
            }
            break;
        default:
            console.log('inputAction unexpected '+'"'+action+'"'+' parameter');
            break;
    }
}



function validationMessage(input, message){
    if(input.parentElement.parentElement.children.length > 1){
        return false;
    }
    else{
        var invalid_message = document.createElement('div');
        invalid_message.className = 'invalid-message';
    
        var err_sign = document.createElement('span');
        err_sign.className = 'err-sign';
    
        var err_icon = document.createElement('i');
        err_icon.className = 'fas fa-exclamation-circle';
        err_sign.appendChild(err_icon);
    
        var err_message =  document.createElement('span');
        err_message.className = 'err-message';
        err_message_node = document.createTextNode(message);
        err_message.appendChild(err_message_node);
    
        invalid_message.appendChild(err_sign);
        invalid_message.appendChild(err_message);
        input.parentElement.parentElement.appendChild(invalid_message);
    }
}

function hideValidationMessage(input){
    if(input.parentElement.parentElement.children.length > 1){
        if(input.parentElement.parentElement.children[1].classList.contains('invalid-message')){
            input.parentElement.parentElement.children[1].classList.add('opacity-0');
            setTimeout(() => {
                if(input.parentElement.parentElement.children.length > 1){
                    if(input.parentElement.parentElement.children[1].classList.contains('invalid-message')){
                        input.parentElement.parentElement.children[1].remove();
                    }
                }
            }, 300);
        }
    }
    else{
        return false;
    }
}




// Email effections
const email = document.getElementById('email');

if(email.value !== ''){
    inputAction(email, 'add', 'input-group-focused', 'input-label-focused');
}

email.onfocus = function(){
    'use strict';
    inputAction(this, 'add', 'input-group-focused', 'input-label-focused');
}

email.onblur = function(){
    'use strict';
    if(this.value === ''){
        inputAction(email, 'remove', 'input-group-focused', 'input-label-focused');
        inputAction(email, 'add', 'border-danger', 'text-danger');
        validationMessage(email, 'This feild is required');
    }
}

email.onkeydown = function(){
    'use strict';
    this.onkeyup = function(){
        if(this.value !== ''){
            inputAction(this, 'remove', 'border-danger', 'text-danger');
            hideValidationMessage(this);
        }
        else{
            inputAction(this, 'add', 'border-danger', 'text-danger');
            validationMessage(this, 'You know this field is required');
        }
    }
}



// password effection
const password = document.getElementById('password');

if(password.value !== ''){
    inputAction(password, 'add', 'input-group-focused', 'input-label-focused');
}
    
password.onfocus = function(){
    'use strict';
    inputAction(this, 'add', 'input-group-focused', 'input-label-focused');
}

password.onblur = function(){
    'use strict';
    if(this.value === ''){
        inputAction(password, 'remove', 'input-group-focused', 'input-label-focused');
        inputAction(password, 'add', 'border-danger', 'text-danger');
        validationMessage(password, 'This field is required');
    }
}

password.onkeydown = function(){
    'use strict';
    this.onkeyup = function(){
        if(this.value !== ''){
            inputAction(this, 'remove', 'border-danger', 'text-danger');
            hideValidationMessage(this);
        }
        else{
            inputAction(this, 'add', 'border-danger', 'text-danger');
            validationMessage(this, 'You know this field is required');
        }
    }
}



///////// password visibility
var
eyes = document.getElementById('eyes'),
eye = document.getElementById('eye'),
eye_slash = document.getElementById('eye-slash');

eyes.onclick = function(){
    if(password.type === 'password' && eye.classList.contains('display-none')){
        password.type = 'text';
        eye_slash.classList.add('display-none');
        eye.classList.remove('display-none');
    }
    else{
        password.type = 'password';
        eye_slash.classList.remove('display-none');
        eye.classList.add('display-none');
    }
}


document.querySelectorAll('input.form-control')[0].focus();