$(document).ready(function()

    {
        $("#onclick").click(function() {
            $("#contactdiv").fadeIn('slow');
        });
        $("#cancel").click(function() {
            $(this).parent().fadeOut('slow');
        });
        $("#submit").click(function() {
            $(this).parent().fadeOut('slow');
        });
    });