/** ==========================================================================================

  Project :   CapitalLAW - Responsive Multi-purpose HTML5 Template
  Version :   Bootstrap 4.1.1
  Author :    Themetechmount

========================================================================================== */


/** ===============

01. Preloader
02. TopSearch
03. Fixed-header
04. Menu
05. Number rotator
06. Skillbar
07. Tab
08. Accordion
09. Isotope
10. Prettyphoto
11. Slick_slider
15. Back to top 

 =============== */


(function($) {

   'use strict'


/*------------------------------------------------------------------------------*/
/* Preloader
/*------------------------------------------------------------------------------*/
   // makes sure the whole site is loaded
    $(window).on("load",function() {
            // will first fade out the loading animation
         $("#preloader").fadeOut();
            // will fade out the whole DIV that covers the website.
         $("#status").fadeOut(9000);
    })


/*------------------------------------------------------------------------------*/
/* TopSearch
/*------------------------------------------------------------------------------*/

    jQuery(".ttm-header-search-link a").on('click',function(){
        jQuery(".ttm-search-overlay").addClass('st-show');
        jQuery(".ttm-search-overlay").addClass('st-prevent-scroll');
        jQuery(".field.searchform-s").focus();return!1
    });

    jQuery(".ttm-search-overlay").on('click',function(){
        jQuery(".ttm-search-overlay").removeClass('st-show');
        jQuery(".ttm-search-overlay").removeClass('st-prevent-scroll');return!1
    });

    jQuery('.ttm-site-searchform').on('click',function(event){event.stopPropagation()});
   

/*------------------------------------------------------------------------------*/
/* Fixed-header
/*------------------------------------------------------------------------------*/

    $(window).scroll(function(){
        if ( matchMedia( 'only screen and (min-width: 1200px)' ).matches ) 
        {
            if ($(window).scrollTop() >= 50 ) {

                $('.ttm-stickable-header').addClass('fixed-header');
            }
            else {

                $('.ttm-stickable-header').removeClass('fixed-header');
            }
        }
    });



/*------------------------------------------------------------------------------*/
/* Menu
/*------------------------------------------------------------------------------*/

    $('ul li:has(ul)').addClass('has-submenu');
    $('ul li ul').addClass('sub-menu');

    var menu = {
        initialize: function() {
            this.Menuhover();
        },

        Menuhover : function(){
            var getNav = $("nav.main-menu"),
                getWindow = $(window).width(),
                getHeight = $(window).height(),
                getIn = getNav.find("ul.menu").data("in"),
                getOut = getNav.find("ul.menu").data("out");
            
            if ( matchMedia( 'only screen and (max-width: 1200px)' ).matches ) {
                                                     
                // Enable click event
                $("nav.main-menu ul.menu").each(function(){
                    
                    // Dropdown Fade Toggle
                    $("li.has-submenu > a", this).on('click', function (e) {
                        e.preventDefault();
                        var t = $(this);
                        t.toggleClass('active').next('ul').toggleClass('active');
                    });   
                }); 
            }
        },
    };

    $('.btn-show-menu-mobile').on('click', function(){
        $(this).toggleClass('is-active');
        $('.menu-mobile').slideToggle();
    });
    
    
    // Initialize
    $(document).ready(function(){
        menu.initialize();

    });


    /* side-menu */
    $(".side-menu-container").each(function(){  
        $(".side-menu > a", this).on("click", function(e){
            e.preventDefault();
            $(".side-overlay").toggleClass("on");
            $("body").toggleClass("on-side");
        });
    });
    $(".side .close-side").on("click", function(e){
        e.preventDefault();
        $(".side-overlay").removeClass("on");
        $("body").removeClass("on-side");
    });  


/*------------------------------------------------------------------------------*/
/* Animation on scroll: Number rotator
/*------------------------------------------------------------------------------*/
    
    $("[data-appear-animation]").each(function() {
    var self      = $(this);
    var animation = self.data("appear-animation");
    var delay     = (self.data("appear-animation-delay") ? self.data("appear-animation-delay") : 0);
        
        if( $(window).width() > 959 ) {
            self.html('0');
            self.waypoint(function(direction) {
                if( !self.hasClass('completed') ){
                    var from     = self.data('from');
                    var to       = self.data('to');
                    var interval = self.data('interval');
                    self.numinate({
                        format: '%counter%',
                        from: from,
                        to: to,
                        runningInterval: 2000,
                        stepUnit: interval,
                        onComplete: function(elem) {
                            self.addClass('completed');
                        }
                    });
                }
            }, { offset:'85%' });
        } else {
            if( animation == 'animateWidth' ) {
                self.css('width', self.data("width"));
            }
        }
    });


   
/*------------------------------------------------------------------------------*/
/* Skillbar
/*------------------------------------------------------------------------------*/
    
    $('.ttm-progress-bar').each(function() {
    $(this).find('.progress-bar').width(0);
    });

    $('.ttm-progress-bar').each(function() {

        $(this).find('.progress-bar').animate({
            width: $(this).attr('data-percent')
        }, 2000);
    });


    // Part of the code responsible for loading percentages:

    $('.progress-bar-percent[data-percentage]').each(function () {

        var progress = $(this);
        var percentage = Math.ceil($(this).attr('data-percentage'));

            $({countNum: 0}).animate({countNum: percentage}, {
                duration: 2000,
                easing:'linear',
                step: function() {
                // What todo on every count
                    var pct = '';
                    if(percentage == 0){
                        pct = Math.floor(this.countNum) + '%';
                    }else{
                        pct = Math.floor(this.countNum+1) + '%';
                    }
                    progress.text(pct);
                }
            });
    });

/*------------------------------------------------------------------------------*/
/* Tab
/*------------------------------------------------------------------------------*/ 

    $(document).ready(function() { 
        
        $('.content-tab').children('.content-inner').first().addClass('active');
        $('.ttm-tabs .tabs li').on('click', function(e) {  
            if (!$(this).hasClass('active')) { 
                var i = $(this).index(); 
                $('.ttm-tabs .tabs li.active').removeClass('active'); 
                $('.content-tab .active').hide().removeClass('active'); 
                $(this).addClass('active'); 
                $($('.content-tab').children('.content-inner')[i]).fadeIn(600).addClass('active');
                e.preventDefault();
            } 
        });
    });
    

/*------------------------------------------------------------------------------*/
/* Accordion
/*------------------------------------------------------------------------------*/

/*https://www.antimath.info/jquery/quick-and-simple-jquery-accordion/*/
// $(".accordion").each(function(){

//     var allPanels = $('.toggle').children(".toggle-content").hide();
//     $('.toggle').children(".toggle-content").eq(0).slideDown("easeOutExpo");
//     $('.toggle').children(".toggle-title").children("a").eq(0).addClass("active");

//     $('.toggle').children(".toggle-title").children("a").click(function(){        
//         var current = $(this).parent().next(".toggle-content");
//         $(".toggle-title > a").removeClass("active");
//         $(this).addClass("active");
//         allPanels.not(current).slideUp("easeInExpo");
//         $(this).parent().next().slideDown("easeOutExpo");                
//         return false;                
//     });


    
// });


const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
     const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
     if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
       currentlyActiveAccordionItemHeader.classList.toggle("active");
       currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
     }
    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
  });
});


/*------------------------------------------------------------------------------*/
/* Isotope
/*------------------------------------------------------------------------------*/

    $(window).on('load', function() {

    var $container = $('#isotopeContainer');

    // filter items when filter link is clicked
    $('#filters a').on('click', function(){
      var selector = $(this).attr('data-filter');
      $container.isotope({ filter: selector });
      return false;
    });

    var $optionSets = $('#filters li'),
        $optionLinks = $optionSets.find('a');

        $optionLinks.on('click',function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
              return false;
            }
            var $optionSet = $this.parents('#filters');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');

            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
              // changes in layout modes need extra logic
              changeLayoutMode( $this, options )
            } else {
              // otherwise, apply new options
              $container.isotope( options );
            }

            return false;
        });
   });


    
/*------------------------------------------------------------------------------*/
/* Prettyphoto
/*------------------------------------------------------------------------------*/
$(function () {

     // Normal link
    jQuery('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').each(function(){
        if( jQuery(this).attr('target')!='_blank' && !jQuery(this).hasClass('prettyphoto') && !jQuery(this).hasClass('modula-lightbox') ){
            var attr = $(this).attr('data-gal');
            if (typeof attr !== typeof undefined && attr !== false && attr!='prettyPhoto' ) {
                jQuery(this).attr('data-rel','prettyPhoto');
            }
        }
    });     

    jQuery('a[data-gal^="prettyPhoto"]').prettyPhoto();
    jQuery('a.ttm_prettyphoto').prettyPhoto();
    jQuery('a[data-gal^="prettyPhoto"]').prettyPhoto();
    jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'})

});
    


/*------------------------------------------------------------------------------*/
/* Slick_slider
/*------------------------------------------------------------------------------*/
    $(".slick_slider").slick({
        speed: 1000,
        infinite: true,
        arrows: false,
        dots: false,                   
        autoplay: false,
        

        responsive: [{

            breakpoint: 1360,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3
            }
        },
        {

            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3
            }
        },
        {

            breakpoint: 880,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 555,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });


    /* testimonials */
    var testinav=jQuery('.testimonials-nav',this);
    var testiinfo=jQuery('.testimonials-info',this);

    jQuery('.testimonials-info',this).slick({
        slidesToShow    : 1,
        slidesToScroll  : 1,
        fade            : false,
        arrows          : false,
        asNavFor        : testinav,
        adaptiveHeight  : true,
        speed           : 1500,
        autoplay        : true,
        autoplaySpeed   : 1500,
        infinite        : true,
    });

    jQuery('.testimonials-nav',this).slick({

        slidesToShow    : 1,
        slidesToScroll  : 1,
        asNavFor        : testiinfo,
        centerMode      : true,
        centerPadding   : 0,
        focusOnSelect   : true,
        autoplay        : true,
        autoplaySpeed   : 1500,
        speed           : 1500,
        arrows          : true,
        dots            : false,
        variableWidth   : true,
        infinite        : true,

        
    }); 



/*------------------------------------------------------------------------------*/
/* Back to top
/*------------------------------------------------------------------------------*/

// ===== Scroll to Top ==== 
jQuery('#totop').hide();

jQuery(window).scroll(function() {
    "use strict";
    if (jQuery(this).scrollTop() >= 100) {        // If page is scrolled more than 50px
        jQuery('#totop').fadeIn(200);    // Fade in the arrow
        jQuery('#totop').addClass('top-visible');
    } else {
        jQuery('#totop').fadeOut(200);   // Else fade out the arrow
        jQuery('#totop').removeClass('top-visible');
    }
});

jQuery('#totop').click(function() {      // When arrow is clicked
    jQuery('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
    return false;
});



$(function() {

    });

})(jQuery);