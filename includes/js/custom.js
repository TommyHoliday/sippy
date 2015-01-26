jQuery(document).ready(function(){

	var venogallery = jQuery(".gallery");
	var venolink = jQuery("img.attachment-thumbnail").parent("a");
	
	venolink.addClass("venobox").attr("data-gall", "gallery");	

	jQuery('.venobox').venobox({
		framewidth: '800px',
		frameheight: '600px'
	}); 

	jQuery(document).keyup(function(e) {
  		if (e.keyCode == 27) { jQuery('.vbox-close').trigger("click");	 }   // esc
	});





});