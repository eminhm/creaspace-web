// Weiterleitung in 10 Sekunden
$(function () {
    setTimeout(function() {
        window.location.replace("./");
    }, 5000);
});

// Timer 10 Sekunden
jQuery(document).ready(function() {
    var sec = 4
    var timer = setInterval(function() {
        $("#mdtimer span").text(sec--);
        if (sec == 0) {
            $("#mdtimer").hide(1000) .fadeOut(fast);}
    },1000);
});