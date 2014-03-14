jQuery(document).ready(function() {
  
  	// test for jquery working
	console.log('jQuery is working');

	// makes div clickable, add clickableparentdiv to parent of a element to make div clickable
	jQuery(".clickableparentdiv").click(function(){
	     window.location = jQuery(this).find("a").attr("href"); 
	     return false;
	});

});