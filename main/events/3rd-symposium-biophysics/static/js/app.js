$(function() {
    // uncomment after solved image load conflits with sticky menu problem
    $(document).foundation();

    // resize the window after image loaded to correct sticky menu's anchor
    $(window).resize();
    window.setTimeout(function() {
        $(window).resize();
    }, 1000);
    // just for make sure
    window.setInterval(function() {
        $(window).resize();
    }, 3000);
});