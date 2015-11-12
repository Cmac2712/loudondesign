(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
		console.log('DOM ready');

		/**
		 * Toggle menu
		 */
		var mainNavButton = document.querySelector('#mainNav-button');

		mainNavButton.addEventListener('click', function (e) {
		    var togglee = document.getElementById(this.dataset.toggle);

		    this.classList.toggle('active');
		    togglee.classList.toggle('open');
		    e.preventDefault();

		});

		/**
		 * Menu Sub Menus Mobile
		 */
		var subMenuButton = $('.menu-item-has-children a');

		subMenuButton.on('click', function (e) {
		    if (window.innerWidth > 600) return;
		    console.log( this );
		    console.log( $(this).next() );
		    $(this).next()
		           .toggleClass('active');

		    e.preventDefault();
		});

		/**
		 * Toggle visible/hidden sections
		 */
		var toggleButtons = $('.toggle-button');

		toggleButtons.on('click', function (e) {
		    var section = $(this).data().section;
		    $(this).toggleClass('active');
		    $(section).toggleClass('visible');
		    e.preventDefault();
		});

		/**
		 * Contact Slide-down
		 */
		$('.contact--outer').removeAttr('style')
				    .css('max-height', '0');

		$('[href*="/contact"]').on('click', function (e) {
		    var contactPanel = $('.contact--outer');

		    contactPanel.toggleClass('active');

		    if (contactPanel.hasClass('active')) {
			contactPanel.velocity({
			    maxHeight: 800
			}, {
			    duration: 500
			}, "easeInSine");
		    scrollToTop();
		    } else {
			contactPanel.velocity({
			    maxHeight: 0
			},{
			    duration: 500
			}, "easeInSine");
		    }

		    e.preventDefault();
		});

		/** Scroll to top. */
		function scrollToTop () {
		    $('html, body').velocity('scroll', 300);
		};

	});

} ( this, jQuery ));
