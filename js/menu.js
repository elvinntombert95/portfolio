//NAVBAR A AFFICHER
				$( ".cross" ).hide();
	$( ".menu" ).hide();
	$( ".hamburger" ).click(function() {
	$( ".menu" ).slideToggle( "slow", function() {
	$( ".hamburger" ).hide();
	$( ".cross" ).show();
	});
	});

	$( ".cross" ).click(function() {
	$( ".menu" ).slideToggle( "slow", function() {
	$( ".cross" ).hide();
	$( ".hamburger" ).show();
	});
	});

	(function ($) {
  $(document).ready(function(){

    // hide .navbar first
    $("header").hide();
//NAVBAR A AFFICHER - FIN

// CACHER LE HEADER JUSQU'AU ('ABOUT')
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 1323) {
                $('header').fadeIn();
            } else {
                $('header').fadeOut();
            }
        });
    });

});
  }(jQuery));
// CACHER LE HEADER JUSQU'AU ('ABOUT') FIN
