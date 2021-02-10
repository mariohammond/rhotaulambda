// RTL Scripts

$(document).ready(function() {
	$desktopWidth = $(".desktopCheck").css("display") == "block";
	$tabletWidth = $(".tabletCheck").css("display") == "block";
	$mobileWidth = $(".mobileCheck").css("display") == "block";
	
	$currentWidth = "desktop";
	if ($tabletWidth)	$currentWidth = "tablet";
	if ($mobileWidth)	$currentWidth = "mobile";
	
	$(window).resize(function() {
		$desktopWidth = $(".desktopCheck").css("display") == "block";
		$tabletWidth = $(".tabletCheck").css("display") == "block";
		$mobileWidth = $(".mobileCheck").css("display") == "block";
		
		$currentWidth = "desktop";
		if ($tabletWidth)	$currentWidth = "tablet";
		if ($mobileWidth)	$currentWidth = "mobile";
	});
});

$(document).ready(function() {
	// Add image placeholder
	$("img").on("error", function () {
		//this.src = "/images/placeholder.jpg";
	});
	
	// Setup menu layout and functionality
	if ($mobileWidth) {
		$(".menu").css("height", window.innerHeight + 100);
		$(".cover-container").css("height", window.innerHeight + 100);
	} else {
		$documentHeight = $(document).height();
		$(".menu").css("height", $documentHeight);
		$(".cover-container").css("height", $documentHeight);
	}
	
	$(window).resize(function() {
		if ($mobileWidth) {
			$(".menu").css("height", window.innerHeight + 100);
			$(".cover-container").css("height", window.innerHeight + 100);
		} else {
			$documentHeight = $(document).height();
			$(".menu").css("height", $documentHeight);
			$(".cover-container").css("height", $documentHeight);
		}
	});
	
	$(".header").on("click", ".menu-button", function(e) {
		$(".menu").css("left", "0");
		$(".cover-container").show();
		e.preventDefault();
	});
	
	$(".menu-close").click(function(e) {
		$(".menu").css("left", "-230");
		$(".cover-container").hide();
		e.preventDefault();
	});
	
	$(".menu-chevron.more").click(function(e) {
		var subMenu = $(this).attr("id");
		$(".menu-chevron.more#" + subMenu).hide();
		$(".menu-chevron.less#" + subMenu).show();
		$(".menu-option.sub-menu." + subMenu).slideDown();
		e.preventDefault();
	});
	
	$(".menu-chevron.less").click(function(e) {
		var subMenu = $(this).attr("id");
		$(".menu-chevron.less#" + subMenu).hide();
		$(".menu-chevron.more#" + subMenu).show();
		$(".menu-option.sub-menu." + subMenu).slideUp();
		e.preventDefault();
	});
	
	$(".cover-container").click(function(e) {
        $(".menu-close").click();
    });
	
	// Set width of photo gallery
	if ($("#page-home").length) {
		var currentSlide = 1;
		var photos = $("#page-home .photo").length;
		var galleryWidth = parseInt($("#page-home #slideshow").css("width").replace("px", ""));
		
		// Left and right button functions
		$("#page-home .fa-angle-left").click(function(e) {
			var currentPos = parseInt($("#page-home .photo-gallery").css("left").replace("px", ""));
			$("#page-home .fa").removeClass("fade");
			if (currentSlide > 1) {
				$("#page-home .photo-gallery").css("left", currentPos + galleryWidth);
				currentSlide--;
			} else {
				$(this).addClass("fade");	
			}
		});
		$("#page-home .fa-angle-right").click(function(e) {
			if ($currentWidth == "desktop") var slideCount = photos;
			else var slideCount = photos;
			
			var currentPos = $("#page-home .photo-gallery").css("left").replace("px", "");
			$("#page-home .fa").removeClass("fade");
			if (currentSlide < slideCount) {
				$("#page-home .photo-gallery").css("left", currentPos - galleryWidth);
				currentSlide++;
			} else {
				$(this).addClass("fade");	
			}
		});
	}
	
	// Photo Gallery
	if ($(".bwg_lightbox_0").length) {
		//$(".bwg_lightbox_0").attr("target", "_blank");	
	}
	
	// Home Page - Share Event Button
	$(".share-event a").click(function(e) {
        $(".addthis-share").slideToggle();
    });

    // Barn Dance Page - PayPal Link
	$("#ticketSelect").change(function() {
		var ticketPrice = $(this).val() * 55;
		console.log("ticketPrice: " + ticketPrice);
		$("#ticketForm").attr("action", "https://www.paypal.me/RhoTauLambda/" + ticketPrice);
	});
});
