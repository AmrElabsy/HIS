$(document).ready(function () {

    var myFooter = $('#footer');
    var docHeight = $(window).height();
    var footerHeight = myFooter.height();
    var footerTop = myFooter.position().top + footerHeight;

    if (footerTop < docHeight) {
        myFooter.css('margin-top', 10 + (docHeight - footerTop) + 'px');
    }

    var myInput = $('#signUp_form input');

    myInput.focus(function () {
        "use strict";
        $(this).css({
            "border": "none",
            "borderBottom": "2px solid #3182F9",
        });

        $(this).prev().css({
            color: '#3182F9',
            fontFamily: 'arial'
        });

        $(this).prev().animate({
            bottom: '-7px',
            fontSize: '12px'
        }, 500);
    });

    myInput.blur(function () {
        "use strict";
        $(this).css({
            "border": "none",
            "borderBottom": "2px solid #bcbaba",
        });
        $(this).prev().fadeIn(function () {
            $(this).css({
                color: '#CECECE',
                fontFamily: 'Bodoni MT',
                fontSize: '17px',
                position: 'relative',
                bottom: '-35px',
            })
        });
    });

    myInput.blur(function () {
        if ($(this).val() != "") {
            console.log('test');
            $(this).prev().css({
                color: '#CECECE',
                fontFamily: 'arial',
                bottom: '-7px',
                fontSize: '12px'
            });
        }
    });

    function animateValue(id, start, end) {
        var range = end - start;
        var current = start;
        var increment = end > start ? 1 : -1;
        var obj = document.getElementById(id);
        var time = 4000 / end;
        console.log(~~time);
        var timer = setInterval(function () {
            current += increment;
            obj.innerHTML = current;
            if (current == end) {
                clearInterval(timer)
            }
        }, time);

    }


    animateValue("num", 0, $('#num').text());
    animateValue("num2", 0, $('#num2').text());
    animateValue("num3", 0, $('#num3').text());


    $(function () {
        $("#datepicker").datepicker();
    });
    $("select").change(function () {
        $(this).css('color', '#222')
    })

    $('.sign-in input').focus(function () {
        $(this).next().css('color', '#387FF5');
    });

    $('.sign-in input').focusout(function () {
        $(this).next().css('color', '#999');
    });

});