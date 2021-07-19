$(function() {
    togglesearch();
    counterUpNumber();
    memberAcc();
    faqAcc();
    backToTop();
    navMobile();
    $('#backtop').on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 0);
    });
});

$(window).on('load', function() {
    sameHeadSize($('.slide .circle h2'));
    sameHeadSize($('.accordions .acc-box .acc-head'));
});

$(window).on('resize', function() {
    sameHeadSize($('.slide .circle h2'));
    sameHeadSize($('.accordions .acc-box .acc-head'));
    if ($(window).innerWidth() > 768)
        removeMobSelect();
});

$(window).on('scroll', function() {
    backToTop();
});

function navMobile() {
    $('#navcall').on('click', function() {
        if ($(this).hasClass('clicked')) {
            $(this).removeClass('clicked');
            $(this).closest('.navbar').removeClass('openmob');
            $('#mainnav.placed, .nav.cloned').unwrap();
            $('#mainnav').removeClass('placed');
            $('.nav.cloned').remove();
            $('#mobnav').remove();
        } else {
            $(this).addClass('clicked');
            $(this).closest('.navbar').addClass('openmob');
            $('#mainnav').addClass('placed');
            $('.top-nav ul').clone().insertAfter('#mainnav').addClass('cloned');
            $('#mainnav.placed, .nav.cloned').wrapAll('<div class="mob-wrap shadow" id="mobnav"></div>');
            $('#mobnav').addClass('open');
        }
    });
}

function removeMobSelect() {
    $('#navcall').removeClass('clicked');
    $('#navcall').closest('.navbar').removeClass('openmob');
    $('#mainnav.placed, .nav.cloned').unwrap();
    $('#mainnav').removeClass('placed');
    $('.nav.cloned').remove();
    $('#mobnav').remove();
    console.log('removed');
}

function togglesearch() {
    $('#srhcall').on('click', function() {
        if ($('.main-nav').hasClass('clicked')) {
            $('.main-nav').removeClass('clicked');
            $('#srhbox').hide();
        } else {
            $('.main-nav').addClass('clicked');
            $('#srhbox').show();
            $('#srhbox input').focus();
            if ($('#navcall').hasClass('clicked')) {
                $('#navcall').trigger('click');
                console.log('hega');
            }
        }
    });
    $('.close-srh').on('click', function() {
        $('.main-nav').removeClass('clicked');
        $('#srhbox').hide();
    });
}

function counterUpNumber() {
    $('.counter').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
}

function memberAcc() {
    $('.member .accordion .icon').on('click', function() {
        if ($(this).parent().hasClass('clicked')) {
            $(this).parent().removeClass('clicked');
            $(this).prev().slideUp();
        } else {
            $(this).parent().addClass('clicked');
            $(this).prev().slideDown();
        }
    });
}

$(document).mouseup(function(e) {
    if (!$('.main-nav').is(e.target) && $('.main-nav').has(e.target).length === 0) {
        $('#srhbox').hide();
        $('.main-nav').removeClass('clicked');
    }
});



function sameHeadSize(ele) {
    let smax = 0;
    if (ele.length > 0) {
        ele.removeAttr('style');
        ele.each(function() {
            if ($(this).height() > smax)
                smax = $(this).height();
        });
        ele.height(smax);
    } else
        ele.removeAttr('style');
}

function faqAcc() {
    $('.acc-box .acc-head').on('click', function() {
        if ($(this).parent().hasClass('clicked')) {
            $(this).parent().removeClass('clicked')
            $(this).next().slideUp();
        } else {
            $('.acc-box').removeClass('clicked');
            $('.acc-box .acc-content').slideUp();
            $(this).parent().addClass('clicked')
            $(this).next().slideDown();
        }
    });
}

function backToTop() {
    if ($(window).scrollTop() > $(window).innerHeight()) {
        $('#backtop').removeClass('moveright').addClass('moveleft d-flex');
    } else {
        $('#backtop').removeClass('moveleft').addClass('moveright');
    }
}