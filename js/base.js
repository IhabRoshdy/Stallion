jQuery(document).ready(function(){
	"use strict";

	/* Flexslider */
	jQuery(window).load(function() {
		jQuery('.flexslider').flexslider({
			animation: "fade",
			animationLoop: true,
			start: function(slider) {
				jQuery( '.flexslider' ).removeClass('loading');
			}
		});
	});

	/* Flexslider - Testimonials */
	jQuery(document).ready(function () {
		$(window).load(function() {
			$('.testimonials').flexslider({
			animation: "fade"
			});
		});
	});

	/* Mean Menu */
	jQuery(document).ready(function () {
		jQuery('.site-navigation').meanmenu();
	});

	/* Toggle for Search form */
	jQuery(".search-form a").click(function () {
		jQuery(this).parent().toggleClass('active');
	});

	/* Masonry */
	jQuery(window).on('load', function() {
		var container = document.querySelector('#js-masonry');
		var msnry = new Masonry( container, {
		  // options
		  itemSelector: '.item'
		});
	});

	/* Tabs */
	jQuery(function() {
		jQuery( "#tabs" ).tabs();
	});


	/* Go Top */
	jQuery(".go-top").click(function() {
	  jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});

	/* Tabs */
	jQuery('.panes div').hide();
	jQuery(".tabs a:first").addClass("selected");
	jQuery(".tabs_table").each(function(){
			jQuery(this).find('.panes div:first').show();
			jQuery(this).find('a:first').addClass("selected");
	});
	jQuery('.tabs a').click(function(){
			var which = jQuery(this).attr("rel");
			jQuery(this).parents(".tabs_table").find(".selected").removeClass("selected");
			jQuery(this).addClass("selected");
			jQuery(this).parents(".tabs_table").find(".panes").find("div").hide();
			jQuery(this).parents(".tabs_table").find(".panes").find("#"+which).fadeIn(800);
	});

	/* Toggle */
	jQuery(".toggle-content .expand-button").click(function() {
		jQuery(this).toggleClass('close').parent('div').find('.expand').slideToggle(250);
	});

});