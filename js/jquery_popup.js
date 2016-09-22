$(document).ready(function()
    {
        $("#onclick").click(function() {
            $(window).scrollTo(0,0);
            $("#contactdiv").fadeIn('slow')
   

        });
        $("#cancel").click(function() {
            $(this).parent().fadeOut('slow');
            $("#heading").fadeIn('slow');
            $("#introtext").fadeIn('slow');
            $("#brideandgroom").fadeIn('slow');
            $("#accommodations").fadeIn('slow');
            $("#wedding").fadeIn('slow');
            $("#registry").fadeIn('slow');
        });
        $("#submit").click(function() {
            $(this).parent().fadeOut('slow');

        });
    });