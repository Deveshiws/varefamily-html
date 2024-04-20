//$(".link-img-multiple-unit").overlayScrollbars({ }).overlayScrollbars(); 




$(document).on("click", "[data-scrollto]", function(e) {
    e.preventDefault();
    var scrollToElm = $(this).data("scrollto");
    var scrollPos =
        $('[data-scroll-id="' + scrollToElm + '"]').offset().top -
        $(".header-main").outerHeight();
    $("html,body").stop().animate({
        scrollTop: scrollPos
    }, 700);
    $(".menu-active .h-active").trigger("click");
});

function mediaCheck(mediaQuery) {
    if (window.matchMedia(mediaQuery).matches) {
        $("body").removeClass("menu-active");
        $(".header-logo,.sidebar").on("mouseenter", function(event) {
            $("body").addClass("menu-active");

            if ($('.main-nav ul>li').hasClass('active')) {

                $('.main-nav ul>li.active .submenu').show();

            } else {
                $('.main-nav ul>li .submenu').hide();
            }



        });
        $(".header-logo,.sidebar").on("mouseleave", function(event) {
            $("body").removeClass("menu-active");
        });
    } else {
        $(".header-logo,.sidebar").off("mouseenter mouseleave")
    }
}

mediaCheck("(min-width: 1199px)");
$(window).on("resize", function() {
    mediaCheck("(min-width: 1199px)");
});





$(".menu-toggle").on("click", function(event) {
    $("body").toggleClass("menu-active");
});


//Menu

$('.submenu').parent().append('<span class="expend"></span>');


$(document).on('click', '.main-nav ul>li>a', function() {
    $(this).parent().toggleClass('active').siblings().removeClass('active').find(".submenu").stop().slideUp(300);
    $(this).parent().find(".submenu").stop().slideToggle(300);

});


$(document).ready(function() {
    $(".main-nav ul>li").each(function() {
        if (!$('body').hasClass('menu-active')) {
            $(this).find('.submenu').hide();
        } else if ($('body').hasClass('menu-active')) {
            $(this).find('.submenu').show();
        }
    });
});

// debounce function
function debounce(func, timeout = 300){
    let timer;
    return (...args) => {
      clearTimeout(timer);
      timer = setTimeout(() => { func.apply(this, args); }, timeout);
    };
}


