$(document).ready(function (){
    var password = $("#password");
    var eyes = $("#eyes");
    var eye = $("#eye");
    var eye_slash = $("#eye-slash");

    eyes.click(function () {
        if(password.attr("type") == "password"){
            password.attr("type" , "text");
            eye_slash.addClass("display-none");
            eye.show();
        }
        
        else {
            password.attr("type" , "password");
            eye.hide();
            eye_slash.removeClass("display-none");
        }
    });
});