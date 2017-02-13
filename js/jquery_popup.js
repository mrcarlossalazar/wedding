$(document).ready(function()
    {
        $("#popup").click(function() {
            $(window).scrollTo(0,0);
            $("#contactdiv").fadeIn('fast')
            $("#heading").fadeOut('slow');
            $("#introtext").fadeOut('slow');
            $("#brideandgroom").fadeOut('slow');
            $("#accommodations").fadeOut('slow');
            $("#wedding").fadeOut('slow');
            $("#registry").fadeOut('slow');
            $("#music").fadeOut('slow');
                    });
        $("#cancel").click(function() {
            $(this).parent().fadeOut('slow');
            $("#heading").fadeIn('slow');
            $("#introtext").fadeIn('slow');
            $("#brideandgroom").fadeIn('slow');
            $("#accommodations").fadeIn('slow');
            $("#wedding").fadeIn('slow');
            $("#registry").fadeIn('slow');
            $("#music").fadeIn('slow');     

        });
        $("#submit").click(function() {
            $(this).parent().fadeOut('slow');
            $("#contactdiv").fadeOut('slow')
            $("#heading").fadeIn('slow');
            $("#introtext").fadeIn('slow');
            $("#brideandgroom").fadeIn('slow');
            $("#accommodations").fadeIn('slow');
            $("#wedding").fadeIn('slow');
            $("#registry").fadeIn('slow');
            $("#music").fadeIn('slow');     

        });
    });