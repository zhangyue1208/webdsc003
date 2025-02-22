jQuery(document).ready(function($)
{
	var header_h = $("#header-wrapper").height() + 0;
	var menu_h = $("#menu").height();
	var speed = 500;
	var logo2_url = $("link[rel='alternate']").attr("href");
	var logo2_link = $("link[rel='start']").attr("href");
	
	var scroll_critical = parseInt(header_h - menu_h);
	var window_y = 0;
	var menu_left_margin = 100;
	menu_left_margin = parseInt($(".header").css("width")) - parseInt($("ul.menu").width());
	
	window_y = $(window).scrollTop();
	var $logo2_link = $("<a/>", {"href": logo2_link})
	var $logo2 = $("<img />", {"src" : logo2_url, "class" : "logo2"}).appendTo($logo2_link);
	
	
	if ( (window_y > scroll_critical) && !(is_touch_device()) ) header_transform();
	
	function header_transform(){
		//alert("head transform")
			window_y = $(window).scrollTop();
			var wp_admin_height = "0px";
			if ($("#wpadminbar").length > 0){
				wp_admin_height = parseInt($("#wpadminbar").height()) + "px";
			}
			if (window_y > scroll_critical) {
				if (!($("#header-wrapper").hasClass("fixed"))){
						$("#header-wrapper").hide();
						$("#wrapper").css("margin-top", header_h + "px");
						$("#header-wrapper").addClass("fixed").css("top", wp_admin_height);
						$("#header-wrapper").fadeIn(500);
						$logo2_link.fadeIn().appendTo(".header");
				}

				
			} else {
				if (($("#header-wrapper").hasClass("fixed"))){
					$("#header-wrapper").fadeOut(500, function(){
						$("#header-wrapper").removeClass("fixed");
						$("#wrapper").css("margin-top", "");
						$("#header-wrapper").fadeIn(300)
					});
					
					$logo2_link.fadeOut().remove();
				}

			}
	}

	$(window).scroll(function(){
		if (!(is_touch_device())) header_transform();			

	})
});