$(function () {
    $('a.folio').fancybox();
    $('#portfolio').mixitup();

    $('.nav-tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
    $('.navbar-nav a').click(function (e) {
        e.preventDefault();
        $(this).parent('li').toggleClass('active');
        $(this).parent('li').siblings('.active').removeClass('active');
    })

    $('.header .navbar-nav a').smoothScroll();

    $('#jump2top').css('bottom', '-100px');
    $(window).scroll(function () {
        var btn = $('#jump2top');
        if ($(this).scrollTop() > 100) {
            btn.stop().animate({ 'bottom': '0' }, 200);
        } else {
            btn.stop().animate({ 'bottom': '-100px' }, 200);
        }
    });

    $('#jump2top').smoothScroll();

    //setup email here
    $('#button-send').click(function (event) {
        $('#button-send').html($('#btnSending').val());
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/registerContact',
            data: $('#frmContact').serialize(),
            success: function (html) {
                if (html.success == 0) {
                    $('#button-send').html($('#btnSend').val());
                    console.log("Bien");
                    $('#error').hide();
                    $('#success').show();
                }
                else {
                    $('#button-send').html($('#btnSend').val());
                    $.each( JSON.parse(html)[0], function( key, value ) {
                      $('#'+key+'-error').text(value).addClass('error');
                    });
                    $('#error').show();
                }
            },
            error: function () {
                $('#button-send').html($('#btnSend').val());
                $('#error').show();
            }
        });

    });

});

function scrollTo(elem) {
    $('body,html').animate({
        scrollTop: elem.offset().top
    }, 500);
}

function valemail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}