$('.custom1').owlCarousel({
    animateOut: 'slideOutDown',
    animateOut: 'fadeOut',
    items:1,
    margin:0,
    dots:true,
    loop:true,
});

$(window).bind("load", function() { var footerHeight = 0, footerTop = 0, $footer = $(".footer_cell"); 
positionFooter(); function positionFooter() { footerHeight = $footer.height(); 
footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px"; if ( ($(document.body).height()+footerHeight) < $(window).height()) { $footer.css({ position: "fixed", bottom: "0px", left: "0", right: "0" }) } else { $footer.css({ position: "relative", display: "block" }) } } $(window) 
.scroll(positionFooter) .resize(positionFooter) });

$('.eq_height').equalHeights();
