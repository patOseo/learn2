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

$(window).scroll(function(e){
    var $el = $('.top-nav');
    if($($el).scrollTop() = 0){
        $el.css({'position': 'sticky'});
    }
});

// AJAX Blog Filter

$('.cat-list-item').on('click', function() {
    var slug = $(this).data('slug');
    console.log(slug);

  $('.cat-list-item').removeClass('active');
  $(this).addClass('active');

  $.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'filter_blogs',
      category: $(this).data('slug'),
    },
    success: function(res) {
      $('#postsGrid').html(res);
    }
  })
});

// Modal Popups
$('.modal-popup').off('click');
$('.modal-popup').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('pop-open');
    getPageData($(this).data('page'));
});

function modalCloseButton(){
    jQuery('.md-modal .cross').on('click', function(){
        jQuery('html').removeAttr('style');
            jQuery('.md-modal').removeClass('md-show');
            jQuery('#wrapper-navbar .navbar').removeAttr('style');
    });
}

// CTA Modal
// $('#contactModal').modal('show');

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


/**
 * modalEffects.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var ModalEffects = (function() {

    function init() {

        var overlay = document.querySelector( '.md-overlay' );

        [].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

            var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
                close = modal.querySelector( '.md-close' );

            function removeModal( hasPerspective ) {
                classie.remove( modal, 'md-show' );

                if( hasPerspective ) {
                    classie.remove( document.documentElement, 'md-perspective' );
                }
            }

            function removeModalHandler() {
                removeModal( classie.has( el, 'md-setperspective' ) ); 
            }

            el.addEventListener( 'click', function( ev ) {
                classie.add( modal, 'md-show' );
                overlay.removeEventListener( 'click', removeModalHandler );
                overlay.addEventListener( 'click', removeModalHandler );

                if( classie.has( el, 'md-setperspective' ) ) {
                    setTimeout( function() {
                        classie.add( document.documentElement, 'md-perspective' );
                    }, 25 );
                }
            });

            close.addEventListener( 'click', function( ev ) {
                ev.stopPropagation();
                removeModalHandler();
            });

        } );

    }

    init();

})();