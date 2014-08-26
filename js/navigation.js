/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */


$(function () {
	$('.navbar-collapse').find('ul').addClass('nav navbar-nav');
	$('.navbar-collapse').attr('id','edennavbar')
	$('li.current_page_item').addClass('active');
	$('.carousel').carousel()

  var iScrollPos = 150;

  $(window).scroll(function (e) {

  	

    if ($(window).scrollTop()>=iScrollPos)
     {

        $('nav.navbar-default').addClass( "navbar-fixed-top" );

    } 
    else 
    {
       $('nav.navbar-default').removeClass( "navbar-fixed-top" );
    }

});
});