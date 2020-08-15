$(document).ready(function (){

    // Input effects area
    var input_control = $('input.form-control');

    input_control.on('focus' , function (){
        // input group have the border
        $(this).parent().css({
            'border-color' : '#ff5500' 
            //,'padding-top' : '16px'
        });
            
        // input label span
        $(this).parent().children('span.input-label').css({
            'bottom' : '36px' ,
            'left' : '5px' ,
            'color' : '#ff5500' ,
            'font-size' : '12px'
        });
    });


    input_control.blur(function (){
        if( $(this).val() === '' ){
            // input group have the border
            $(this).parent().css({
                'border-color' : '#aaaaaa' ,
                'padding-top' : '5px'
            });

            // input label span
            $(this).parent().children('span.input-label').css({
                'bottom' : '5px' ,
                'left' : '39px' ,
                'color' : '#505050' ,
                'font-size' : '17px'
            });
        }

        else {
            return false ;
        }
    });


    $('form :input:enabled:visible:first').focus();


    // button of password visibility
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