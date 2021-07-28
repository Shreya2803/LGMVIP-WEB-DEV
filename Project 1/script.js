$(document).ready(function() {
	
	// Change image on selection
	$("#gallery img").click(function() {
		// Get current image source
		var image = $(this).attr("src");
		// Apply grayscale to thumbnails except selected
		$("#gallery")
			.find("img")
			.css("filter", "grayscale(1)");
		$(this).css("filter", "none");
		// Change image
		$("#gallery-img").css("background-image", "url(" + image + ")");
		// Apply link to image
		$("#gallery-link").attr("href", image);
		// Use id for count
		$("#count").text($(this).attr("id"));
	});
	
	// Get total number of images
	var gallerySize = $(".gallery-thumbnails img").length;
	$("#total").text(gallerySize);
	
	var display = $("#imgDisplay");
	var scroll = $("#imgScroll");
	var scale = $("#imgScale");
	
	// Image display
	display.change( function() {
		if(display.val() === "contain") {
			$("#gallery-img").css("background-size","contain");
		} else {
			$("#gallery-img").css("background-size","cover");
		}
	});
	
	// Scroll
	scroll.change( function() {
		if(scroll.val() === "yes") {
			$("#gallery-box").css("overflow","scroll");
		} else {
			$("#gallery-box").css("overflow","hidden");
		}
	});
	
	// Scale
	var changeScale = scale.change( function() {
		$("#gallery-img").css("background-size", scale.val() + "px");
	});

});
