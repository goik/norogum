$(document).ready(function() {


    function footerHeight() {
        footerHeightDetect = $(".footer-fix").css("height");
        $(".footer-bottom-spacer").css({
            height: footerHeightDetect
        });
    }

    footerHeight();

    $(window).resize(function() {
        footerHeight();
    });


    // target blank on link
    $(".tb").each(function() {
        $(this).attr("target", "_blank");
    });

    // hide visible tag alt & title
    var getAlt = "",
        getTitle = "";
    $("body").on("mouseenter", ".hta", function() {
        tag = $(this);
        getAlt = tag.attr("alt");
        getTitle = tag.attr("title");
        tag.attr("alt", "");
        tag.attr("title", "");
    });

    $("body").on("mouseleave", ".hta", function() {
        tag = $(this);
        tag.attr("alt", getAlt);
        tag.attr("title", getTitle);
    });


    //login drop down
    var dropDownTimeOut;

    $("body").on("click", ".enter-btn", function() {
        loginVisible();
        dropDown = $(this).find(".login-drop-down");
        dropDown.css({display: "block"}).stop().animate({opacity: 1}, 300);
        clearTimeout(dropDownTimeOut);
    });

    $("body").on("click", ".forgot-form-visible", function() {
        forgotVisible();
        return false;
    });

    $("body").on("click", ".login-form-visible", function() {
        loginVisible();
        return false;
    });


    $("body").on("click", ".login-drop-down-bottom", function() {
        return false;
    });

    function loginVisible(){
        $(".form-item").each(function(){$(this).css({display:"none",opacity:0});})
        $(".form-item").eq(0).css({display:"block"}).stop().animate({opacity:1});
    }


    function forgotVisible(){
        $(".form-item").each(function(){$(this).css({display:"none",opacity:0});})
        $(".form-item").eq(1).css({display:"block"}).stop().animate({opacity:1});
    }

    /*
    $("body").on("mouseleave", ".enter-btn", function() {
        dropDown = $(this).find(".login-drop-down");
        dropDownTimeOut = setTimeout(function() {
            dropDown.stop().animate({
                opacity: 0
            }, 300, function() {
                $(this).css({
                    display: "none"
                });
            });
        }, 600);
    });
    */
    $("body").on("click", ".js-drop-down-selector", function(e) {
        e.stopPropagation();
        return false;
    });

    $("body").click(function() {

        closeSelectBox($(this));

        clearTimeout(dropDownTimeOut);
        $(".login-drop-down").stop().animate({
            opacity: 0
        }, 300, function() {
            $(this).css({
                display: "none"
            });
        });
    });





    //tab system
    $("body").on("click", ".tab-cell-list-item", function() {
        $(".tab-cell-list-item").each(function() {
            $(this).removeClass("current");
        });
        $(this).addClass("current");
        return false;
    });

    // 
    /**/
    // input on focus 
    $("body").on("focus", ".def-inp", function() {
        $(this).closest(".def-inp-bg").addClass("inp-focus");
    });

    $("body").on("blur", ".def-inp", function() {
        $(this).closest(".def-inp-bg").removeClass("inp-focus");
    });

    // input on focus
    $("body").on("focus", ".def-inp-login", function() {
        $(this).closest(".default-inp-bg").addClass("inp-focus");
    });

    $("body").on("blur", ".def-inp-login", function() {
        $(this).closest(".default-inp-bg").removeClass("inp-focus");
    });


    // SelectBox Custom 
    /*
    $("body").on("click", ".drop-down-custom-select-box-cell", function() {
        openSelectBox($(this));
        return false;
    });
    */

    function openSelectBox(element) {
        element.find(".dd-box").css({
            display: "block"
        }).animate({
            opacity: 1
        }, 300);
    }

    function closeSelectBox(element) {
        element.find(".dd-box").animate({
            opacity: 0
        }, 300, function() {
            $(this).css({
                display: "none"
            });
        });
    }

    // Scroll in Custom Select Box
    jQuery('.scrollbar-inner').scrollbar();

    $('.fancybox').fancybox();
    var z = "s";

    // link anchor aminamte
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1200);
                return false;
            }
        }
    });

    // var owlDownload=$(".unique-slider-cell").owlCarousel({
    //      items:1,
    //      navigation:false, 
    //      slideSpeed:800, 
    //      lazyEffect : "fade",
    //      singleItem:true,
    //      transitionStyle:"fade",
    //      responsive:true,
    //      afterAction:function(elem){}
    // });



    /*=======================*/
    var carou1 = $(".services-slider").owlCarousel({
        items: 3,
        navigation: false,
        slideSpeed: 800,
        transitionStyle: "fadeUp",
        responsive: true,
        afterAction: function(elem) {}
    });
    $(".services-slider-arrow-prev").click(function() {
        carou1.trigger('owl.prev');
        return false;
    });
    $(".services-slider-arrow-next").click(function() {
        carou1.trigger('owl.next');
        return false;
    });
    /*=======================*/


    $("body").on("click", ".sidebar-menu-list-item-link", function() {

        $(".sidebar-menu-list-item-link").each(function() {
            $(this).find(".sidebar-menu-arrow").removeClass("rotate");
        });

        $(this).find(".sidebar-menu-arrow").addClass("rotate");

        $(".sub-cell").each(function() {
            $(this).stop().animate({
                height: 0
            }, 300);
        });
        
        item = $(this).closest(".sidebar-menu-list-item");
        heightDetect = item.find(".sub-cell-height-detect").css("height");
        item.find(".sub-cell").stop().animate({
            height: heightDetect
        }, 300);
        return false;
    });


    //===========

    $("body").on("click",".services-slider-item",function(){
        elementIndex=$(this).parent().index();
        $(".services-block-list-item").each(function(){$(this).css({display:"none"});});
        $(".services-block-list-item").eq(elementIndex).css({display:"block"});
        openServices();
        return false;
    });


    $("body").on("click",".close-services-block-list-cell",function(){
        closeServices();
        return false;
    });


    $(document).keyup(function(e) {
      if (e.keyCode == 27) {
        closeServices();
      }
    });

    var serv=$(".services-block-list-cell");

    function openServices(){
        serv.css({display:"block"}).stop().animate({opacity:1},300);
    }

    function closeServices(){
        serv.stop().animate({opacity:0},300,function(){
            $(this).css({display:"none"});
        });
    }

    $("body").on("click",".tab-cell-list-item",function(){
        getTabIndex=$(this).index();
        $(".tab-content-cell-list-item").each(function(){
            $(this).css({display:"none",opacity:0});
        });
        $(".tab-content-cell-list-item").eq(getTabIndex).css({display:"block"}).stop().animate({opacity:1},300);
    });

});