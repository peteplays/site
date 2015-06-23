//--change to mobile menu
function changeToMobileMenu() {
    $('#floating_menu').removeClass('float_menu').addClass('float_menu_mobile');
    $('#floating_menu_2, #floating_menu_4').removeClass('fa_ellipsis').addClass('fa_ellipsis_mobile');
}
//--scroll to section when floating menu clicked
function scrollToSection(selector) {
    var element = $(selector);
    var offset = element.offset();
    var element_position = offset.top;
    $('html, body').animate({
        scrollTop: element_position
    }, 700);     
}
//--remove active class from floating menu
function removeActiveClassFromFloatingMenu() {
    $('#floating_menu_1, #floating_menu_2, #floating_menu_3, #floating_menu_4, #floating_menu_5').removeClass('floating_menu_selected');
}
$(window).on('scroll', function () {
    //--check if mobile device
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      //alert("Mobile Detected: ");
    } else {
        //--fade in/out logo when scrolling form tops
        if( $(this).scrollTop() === 0 ) {
            $('.plays_banner').slideDown('ease');
        } else {
            $('.plays_banner').slideUp('ease');
        }
    }   
    //--hi lite floating menu when in section
    if ( $(window).scrollTop() <= 12 ) {
        removeActiveClassFromFloatingMenu();
        $('#floating_menu_1').addClass('floating_menu_selected');
    }
    var d2 = $('#quotes_section').offset().top;
    var d2a = d2 - 500;
    if ( $(window).scrollTop() >= d2a ) {
        removeActiveClassFromFloatingMenu();
        $('#floating_menu_2').addClass('floating_menu_selected');
    }
    var d3 = $('#project_section').offset().top;
    var d3a = d3 - 800;
    if ( $(window).scrollTop() >= d3a ) {
        removeActiveClassFromFloatingMenu();
        $('#floating_menu_3').addClass('floating_menu_selected');
    }
    var d4 = $('#more_section').offset().top;
    var d4a = d4 - 500;
    if ( $(window).scrollTop() >= d4a ) {
        removeActiveClassFromFloatingMenu();
        $('#floating_menu_4').addClass('floating_menu_selected');
    }
    var d5 = $('#footer_section').offset().top;
    var d5a = d5 - 800;
    if ( $(window).scrollTop() >= d5a ) {
        removeActiveClassFromFloatingMenu();
        $('#floating_menu_5').addClass('floating_menu_selected');
    }    
});
//--scroll to section when floating menu clicked
$('#floating_menu_1, #floating_menu_2, #floating_menu_3, #floating_menu_4, #floating_menu_5').on('click', function() {
    switch( this.id ) {
        case 'floating_menu_1':
            scrollToSection('#top_section');
            break;
        case 'floating_menu_2':
            scrollToSection('#quotes_section');
            break;
        case 'floating_menu_3':
            scrollToSection('#project_section');
            break;
        case 'floating_menu_4':
            scrollToSection('#more_section');
            break;
        case 'floating_menu_5':
            scrollToSection('#footer_section');
            break;              
    }
    removeActiveClassFromFloatingMenu();
    $(this).addClass('floating_menu_selected');
});
//--change menu to mobile vesion
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    changeToMobileMenu();
}