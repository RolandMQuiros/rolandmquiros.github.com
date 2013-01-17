/**
 * Fades in the "Return to Top" button when the user has scrolled past the
 * height of their browser window.
 */
$(window).scroll(function(eventObject) {
    if ($(window).scrollTop() > $("#menu").height()) {
        $("#return-to-top").fadeIn(500);
    } else {
        $("#return-to-top").fadeOut(500);
    }
});

$(function() {
    // Hide return-to-top button by default
    $("#return-to-top").hide();
});
