(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		console.log('Ready');

		// FACEBOOK FEED
		// var url = 'https://graph.facebook.com/v3.2/manoirdeslys.foriel?fields=posts.limit(1)%7Bmessage%2Cpicture%2Ccreated_time%2Cfull_picture%7D&access_token=EAAMcTfwxVWwBAGSNrtTWZB2Ahr0Dvba6WkyvKHeZBm3EshP9H3pf2HxJ3fvB3GHpFg4eDrZCMSe5cxsmCGCITkPvhSwWJanliYMzgvXm8Mh42KSyzWKA5ShlCvfH2x7G7cpRBWukuTVYh3x7kzDYwcMeXqktVZCNyrHhjUtPg8QymxsZBzMw4MpZB6pKCZAR85bIeNHl06JZAAZDZD';
		// $.getJSON(url, function(data){
		// 	console.log(data.posts.data);
		// 	$('#FBResult').html('<small>' + data.posts.data[0].message + '</small><br><img src="' + data.posts.data[0].picture + '">');
		// });

		// $("body").overlayScrollbars({});

		// *************************************************************
		// Conditions PAGES

		// Page Mariage
		if($('body').hasClass('page-id-23')){

			var positionTop;
			var positionL;

			$('#btGallery').on('click', function(e){
				positionTop = $(this).offset().top - $(window).scrollTop();
				positionL = $(this).position();
				e.preventDefault();
				$('body').css('overflow' , 'hidden').addClass('scroll');
				$('#photos').show();
				$('#photos').css({
					position : 'fixed',
					top : positionTop,
					left : positionL.left
				}).animate({
					width : '100%',
					height : '100vh',
					top: 0,
					left: 0
				}, 800, function(){
					$('#close').slideDown(800);					
					// On lance le Slide
					$(".galleryMariage").owlCarousel({
						items: 1,
						loop: true,
						nav: true,
						autoplay: true
					});
					$('.galleryMariage').css('visibility', 'visible').animate({
						opacity : 1
					}, 1000);
				});				
			});

			$('#close').on('click', function(e){
				e.preventDefault();
				console.log('je ferme');
				$(this).slideUp(500);
				$('.galleryMariage').animate({
					opacity : 0
				}, 1000, function(){
					$('.galleryMariage').css('visibility', 'hidden');
					$(".galleryMariage").owlCarousel('destroy');
					$('#photos').animate({
						top : positionTop,
						left : positionL.left,
						width : '150px',
						height : '150px'
					}, 500, function(){					
						$('#photos').hide();
						$('body').css('overflow' , 'auto').removeClass('scroll');
					});
				});
				// $(".galleryMariage").owlCarousel('destroy');
				$('#btGallery').show(500);
				
			});
			
		}
		// Conditions PAGES
		// *************************************************************

		$(window).on("load", function(e){			
			console.log('Chargé');
			$('#loader').fadeOut();
			$('body').removeClass('noScroll');
			new WOW().init();

			if($('body').hasClass('home')){
				console.log("c'est la page d'accueil");			

				$("#slideGalerie").owlCarousel({
					items: 1,
					loop: true,
					nav: true,
					autoplay: true
				});
				$("#slideTemoignage").owlCarousel({
					animateOut: 'fadeOut',
					animateIn: 'fadeIn',
					items: 1,
					loop: true,
					dots: false,
					mouseDrag: false,
					touchDrag: false,
					// autoHeight:true,
					// smartSpeed:2000,
					autoplay: true,
					autoplayTimeout: 7000
				});

				mapGoogle();

			}

		});

		$('#btBurger').on('click', function(){	
			$('body').toggleClass('noScroll');
			$(this).toggleClass('open');
			$('nav, nav>ul').toggleClass('show');
		});

		$('.menu-item-has-children').on('click', function(){
			$(this).toggleClass('more');
			$(this).find('.sub-menu').slideToggle();
		});

		$('nav a').on('click', function(e){
			e.preventDefault();			
			var target = $(this).attr('href');				
			if(target != '#'){
				$('header').animate({
					right : '-70px'
				}, 800);
				$('.load').animate({
					width : '100%'
				},1000, function(){
					$(this).css({
						left : 'auto',
						right : 0
					}).animate({
						width: 0
					},1000);
				});
				
				$('#btBurger').removeClass('open');
				$('nav>ul').toggleClass('show');				
				setTimeout(function(){
					window.location.href = target;
				}, 2000);
			}
		});

		// Au Scroll on anime le header pour la version Desktop
		$(window).on('scroll', function(){
			var winHeight = $(window).height();
			winHeight = winHeight/2
			if ($(this).scrollTop() > winHeight){
				$('body').addClass('scroll');
			}
			else {
				$('body').removeClass('scroll');
			}
		});	

		if($(window).width() < 640) {
			$("*").removeClass('scrollme wow animated');
		}
		
		// FONCTION MAPS

		function mapGoogle(){

			//THEME MAPS	  
			var styles = {
				'monTheme': [{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#00aaff"},{"saturation":-100},{"gamma":2.15},{"lightness":12}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":24}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":57}]}]
			};


			var mapOptions = {
				zoom: 8,
				center: new google.maps.LatLng(50.504365, 2.479004),
				mapTypeId: google.maps.MapTypeId.ROADMAP, // Thème par defaut
				disableDefaultUI: false, //désactiver les options
				scrollwheel: false,
				mapTypeId: 'monTheme'
			}
			var map = new google.maps.Map(document.getElementById('maps'), mapOptions);
			var styledMapType = new google.maps.StyledMapType(styles['monTheme'], {
				name: 'monTheme'
			}); // pour activer le thème perso
			map.mapTypes.set('monTheme', styledMapType); // pour activer le thème perso

			var image = {
				size: new google.maps.Size(80,80),
				url : imageMap //	marker-map
			};		
			var myLatLng = new google.maps.LatLng(50.504365, 2.479004);
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				icon: image,        
				title: 'Wardrecques'
			});

			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 id="firstHeading" class="firstHeading">Manoir des Lys</h2>'+
			'<div id="bodyContent">'+
			'<p>2 bd de la paix<br>'+
			'62260 AUCHEL</p>' +
			'</div>'+
			'</div>';

			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});

			marker.addListener('click', function() {
				infowindow.open(map, marker);
			});

		}
		
	});
	
})(jQuery, this);