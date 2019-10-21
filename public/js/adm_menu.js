// global. currently active menu item 
let current_item = 0;

// few settings
let section_hide_time = 1000;
let section_show_time = 1000;

// jQuery
jQuery(document).ready(function($) {

	// Switch section
	$("a", '.adm_menu').click(function() 
	{
		if( ! $(this).hasClass('active') ) { 
			current_item = this;
			// fermées les divs avec class .section
			$('.section:visible').fadeOut( section_hide_time, function() { 
				$('a', '.adm_menu').removeClass( 'active' );  
				$(current_item).addClass( 'active' );
				let new_section = $( $(current_item).attr('href') );
				new_section.fadeIn( section_show_time );
			} );
		}
		return false;
	});		
});