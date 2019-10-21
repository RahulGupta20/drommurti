// navbar fixed

// $(document).ready(function() {
//     $(".navbar").sticky({ topSpacing: 0, zIndex: 999 });
// });
// end navbar fixed

// hover visible dropdown
// $(document).ready(function() {
//     var navbarToggle = '.navbar-toggler'; // name of navbar toggle, BS3 = '.navbar-toggle', BS4 = '.navbar-toggler'  
//     $('.dropdown, .dropup').each(function() {
//         var dropdown = $(this),
//             dropdownToggle = $('[data-toggle="dropdown"]', dropdown),
//             dropdownHoverAll = dropdownToggle.data('dropdown-hover-all') || false;

//         // Mouseover
//         dropdown.hover(function() {
//             var notMobileMenu = $(navbarToggle).size() > 0 && $(navbarToggle).css('display') === 'none';
//             if ((dropdownHoverAll == true || (dropdownHoverAll == false && notMobileMenu))) {
//                 dropdownToggle.trigger('click');
//             }
//         })
//     });
// });
// end hover visible dropdown



// $(function() {
//     $(".dropdown").hover(
//         function() {
//             $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
//             $(this).toggleClass('open');
//             $('b', this).toggleClass("caret caret-up");
//         },
//         function() {
//             $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
//             $(this).toggleClass('open');
//             $('b', this).toggleClass("caret caret-up");
//         });
// });

// owl carosel home bannner
$(document).ready(function() {
    $('.home-banner').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        nav: true,
        navText: [
            "<span class='fa fa-angle-left'></span>",
            "<span class='fa fa-angle-right'></span>"
        ],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
});

// end owl carosel home bannner

// owl carousel for recent update
$(document).ready(function() {
    $('.recent_update').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<span class='fa fa-angle-left'></span>",
            "<span class='fa fa-angle-right'></span>"
        ],
        dots: true,
        // autoplay: true,
        // autoplayTimeout: 1000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
});

// owl carousel for recent update
$(document).ready(function() {
    $('.latest-gallery').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        // autoplay: true,
        // autoplayTimeout: 1000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
});

$(document).ready(function() {
    $('.affiliations').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
});


// end owl carousel for recent update


$(function() {
    $('.matchheight').matchHeight();
});


// for scroll up 

$(function() {
    $.scrollUp({
        scrollTitle: false, // Set a custom <a> title if required.
        scrollImg: true,
    });
});
// end for scroll up


// rahul for all carousel nav arrow
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        nav: true,
        navText: [
            "<span class='fa fa-angle-left'></span>",
            "<span class='fa fa-angle-right'></span>"
        ],
        dots: false,
        
    })
});
// end rahul for all carousel 