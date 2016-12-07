$(document).ready(function () {
    $(function () {
        $(".preloader").fadeOut();
        $("body").trigger("resize");
    });
    //Loads the correct sidebar on window load,
    //collapses the sidebar on window resize.
    // Sets the min-height of #page-wrapper to window size
    $(function () {
        $(window).bind("load resize", function () {
            topOffset = 60;
            height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
            height = height - topOffset;
            if (height < 1) height = 1;
            if (height > topOffset) {
                $("#page-wrapper").css("min-height", (height) + "px");
            }
        });
    });
    // Collapse Panels
    (function ($, window, document) {
        var panelSelector = '[data-perform="panel-collapse"]';
        $(panelSelector).each(function () {
            var $this = $(this)
                , parent = $this.closest('.panel')
                , wrapper = parent.find('.panel-wrapper')
                , collapseOpts = {
                    toggle: false
                };
            if (!wrapper.length) {
                wrapper = parent.children('.panel-heading').nextAll().wrapAll('<div/>').parent().addClass('panel-wrapper');
                collapseOpts = {};
            }
            wrapper.collapse(collapseOpts).on('hide.bs.collapse', function () {
                $this.children('i').removeClass('ti-minus').addClass('ti-plus');
            }).on('show.bs.collapse', function () {
                $this.children('i').removeClass('ti-plus').addClass('ti-minus');
            });
        });
        $(document).on('click', panelSelector, function (e) {
            e.preventDefault();
            var parent = $(this).closest('.panel');
            var wrapper = parent.find('.panel-wrapper');
            wrapper.collapse('toggle');
        });
    }(jQuery, window, document));
    // Remove Panels
    (function ($, window, document) {
        var panelSelector = '[data-perform="panel-dismiss"]';
        $(document).on('click', panelSelector, function (e) {
            e.preventDefault();
            var parent = $(this).closest('.panel');
            removeElement();

            function removeElement() {
                var col = parent.parent();
                parent.remove();
                col.filter(function () {
                    var el = $(this);
                    return (el.is('[class*="col-"]') && el.children('*').length === 0);
                }).remove();
            }
        });
    }(jQuery, window, document));
    //tooltip
    $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        //Popover
    $(function () {
            $('[data-toggle="popover"]').popover()
        })
        // Task
    $(".list-task li label").click(function () {
        $(this).toggleClass("task-done");
    });
    $(".settings_box a").click(function () {
        $("ul.theme_color").toggleClass("theme_block");
    });
});
//Colepsible toggle
$(".collapseble").click(function () {
    $(".collapseblebox").fadeToggle(350);
});
// slimeScroll
$('.slimscrollright').slimScroll({
    height: '100%'
    , position: 'right'
    , size: "5px"
    , color: '#dcdcdc'
, });
$('.mini-nav, .sidebar-menu').slimScroll({
    height: '100%'
    , position: 'right'
    , size: "0px"
    , color: '#dcdcdc'
, });
$('.scrollable-right').slimScroll({
    height: '100%'
    , position: 'right'
    , size: "0px"
    , color: '#dcdcdc'
, });
$('.chat-list').slimScroll({
    height: '100%'
    , position: 'right'
    , size: "0px"
    , color: '#dcdcdc'
, });
// Resize all charts elements
$("body").trigger("resize");
// visited ul li
$('.visited li a').click(function (e) {
    $('.visited li').removeClass('active');
    var $parent = $(this).parent();
    if (!$parent.hasClass('active')) {
        $parent.addClass('active');
    }
    e.preventDefault();
});
// Login and recover password
$('#to-recover').click(function () {
    $("#loginform").slideUp();
    $("#recoverform").fadeIn();
});
// this is for the left-aside-fix in content area with scroll
$(function () {
    $(window).load(function () { // On load
        $('.chat-left-inner').css({
            'height': (($(window).height()) - 240) + 'px'
        });
    });
    $(window).resize(function () { // On resize
        $('.chat-left-inner').css({
            'height': (($(window).height()) - 240) + 'px'
        });
    });
});
$(".open-panel").click(function () {
    $(".chat-left-aside").toggleClass("open-pnl");
    $(".open-panel i").toggleClass("ti-angle-left");
});
// This is for resize window
$(function () {
    $(window).bind("load resize", function () {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 1270) {
            $('body').addClass('content-wrapper');
            $('.mini-nav > li.selected').addClass('cnt-none');
            $('#togglebtn').hide();
        }
        else {
            $('body').removeClass('content-wrapper');
            $('#togglebtn').show();
            $('.mini-nav > li.selected').removeClass('cnt-none');
        }
    });
});
// This is for click on open close button
// Sidebar open close
$(".mini-nav > li, #togglebtn").on('click', function () {
    if ($("body").hasClass("rmv-sidebarmenu")) {
        $("body").trigger("resize");
        $("#togglebtn").hide();
    }
    else {
        $("body").trigger("resize");
        $("#togglebtn").show();
    }
});
$(".mini-nav > li, #togglebtn").on('click', function () {
    if ($("body").hasClass("content-wrapper")) {
        $('.mini-nav > li.selected').removeClass('cnt-none');
        $("#togglebtn").show();
    }
    else {}
});
// Sidemenu toggle
$(".mini-nav").css("overflow", "hidden").parent().css("overflow", "visible");
$('#togglebtn').click(function () {
    $('#togglebtn').hide();
    $('.mini-nav > li.selected').addClass('cnt-none');
});
$('.mini-nav > li').click(function () {
    $('#togglebtn').show();
    $('.mini-nav > li.selected').removeClass('cnt-none');
    $('body').removeClass('rmv-sidebarmenu');
});
$('.mini-nav > li').on('click', function () {
    $('.mini-nav > li.selected').removeClass('selected');
    $(this).addClass('selected');
});
// Add or removed class from body   
$('#togglebtn').on('click', function () {
    $('body').removeClass('content-wrapper');
    $('body').addClass('content-wrapper');
});
// This is the active menu js
$(function () {
    var url = window.location;
    var element = $('ul.sidebar-menu a').filter(function () {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});
// Sidemenu style
$.sidemenu = function (menu) {
    var animationSpeed = 300;
    $(menu).on('click', 'li a', function (e) {
        if ($(this).next().is('.sub-menu') && $(this).next().is(':visible')) {
            $(this).next().slideUp(animationSpeed, function () {
                $(this).next().removeClass('menu-open');
            });
            $(this).next().parent("li").removeClass("active");
        }
        else if (($(this).next().is('.sub-menu')) && (!$(this).next().is(':visible'))) {
            var parent = $(this).parents('ul').first();
            parent.find('ul:visible').slideUp(animationSpeed).removeClass('menu-open');
            $(this).next().slideDown(animationSpeed, function () {
                $(this).next().addClass('menu-open');
                parent.find('li.active').removeClass('active');
                $(this).parent("li").addClass('active');
            });
        }
    });
}
$.sidemenu($('.sidebar-menu'))
    // This is for resize rightside panel window
$(function () {
    $(window).bind("load resize", function () {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 1549) {
            $('body').addClass('rmv-right-panel');
            $('.right-side-toggle i').addClass('ti-arrow-left');
        }
        else {
            $('body').removeClass('rmv-right-panel');
            $('.right-side-toggle i').removeClass('ti-arrow-left');
        }
    });
});
//Open-Close-right sidebar
$(".right-side-toggle").on('click', function () {
    $('body').toggleClass('rmv-right-panel');
    $('.right-side-toggle i').toggleClass('ti-arrow-left');
});