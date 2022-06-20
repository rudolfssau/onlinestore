$(window).bind('scroll', function() {
    if ($(this).scrollTop() > 40) {
        $('#navbar').css({position:'fixed', top:'0'});
        $('#main-info').css({'margin-top': '61px'});
    }
    else {
        $('#navbar').css({position:'unset'});
        $('#main-info').css({'margin-top': 'unset'});
    }
});