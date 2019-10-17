$(document).ready(function () {

    var myFooter = $('#footer');
    var docHeight = $(window).height();
    var footerHeight = myFooter.height();
    var footerTop = myFooter.position().top + footerHeight;

    if (footerTop < docHeight) {
        myFooter.css('margin-top', 10 + (docHeight - footerTop) + 'px');
    }

    var myInput = $('#signUp_form input');

    myInput.focus(function(){
        "use strict";
        $(this).css({
            "border":"none",
            "borderBottom":"2px solid #3182F9",
        });

        $(this).prev().css({
            color:'#3182F9',
            fontFamily:'arial'
        });

        $(this).prev().animate({
            bottom: '-7px',
            fontSize:'12px'
        },500);
    });

    myInput.blur(function(){
        "use strict";
        $(this).css({
            "border":"none",
            "borderBottom":"2px solid #bcbaba",
        });
        $(this).prev().fadeIn(function(){
             $(this).css({
                    color:'#CECECE',
                    fontFamily:'Bodoni MT',
                    fontSize:'17px',
                    position:'relative',
                    bottom: '-35px',
            })
        });
    });

    myInput.blur(function () {
        if($(this).val() != "") {
            console.log('test');
            $(this).prev().css({
                color:'#CECECE',
                fontFamily:'arial',
                bottom: '-7px',
                fontSize:'12px'
            });
        }
    });

});