$(document).ready(function (){

    // ------------------------- INPUTS EFFECTS AREA -------------------------
    const input_control = $('.form-control , button#eyes').not('button[type=submit] , [type=submit]');
    const input_label = 'span.input-label';
    const input_label_focused = 'input-label-focused';
    const input_group_focused = 'input-group-focused';
    

    function input_event (input, event_happend){
        switch (event_happend) {
            case 'focus':
                input.parent().addClass(input_group_focused);
                input.parent().children(input_label).addClass(input_label_focused);
                break;

            case 'blur':
                input.parent().removeClass(input_group_focused);
                input.parent().children(input_label).removeClass(input_label_focused);
                break;

            case 'hover':
                input.parent().addClass(input_group_focused);
                break;

            default:
                console.log('input_event() unexpected this parameter value ' +'"'+event_happend+'"');
                break;
        }
    }

    input_control.focus(function (){
        input_event($(this), 'focus');
    });


    input_control.blur(function (){
        if($(this).not('button#eyes').val() === ''){
            input_event($(this), 'blur');
        }

        else if($('button#eyes').parent().children('input#password').val() === ''){
            input_event($(this), 'blur');
        }

        else {
            return false;
        }
    });

    // AUTO FOCUS ON FIRST INPUT
    $('form :input:enabled:visible:first').focus();



    // -------------------------- BUTTON OF PASSWORD VISIBILITY --------------------
    const password = $("#password"); // PSSWORD INPUT
    const eyes = $("#eyes"); // BUTTON CONTAIN THE BOTH OF EYES
    const eye = $("#eye"); // EYE SVG 'HIDDEN'
    const eye_slash = $("#eye-slash"); // EYE SLASH SVG

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