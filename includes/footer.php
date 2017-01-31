
        
			<footer id="footer">
				
				
			
            	<div class="footer-last row mtf clearfix">
					<span class="copyright">Copyright © The Toys Library
					.</span>
					
					<div class="menu-footer-menu-container">
					
						<ul id="menu-footer-menu" class="foot-menu">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="about-us.html">About Us</a></li>

							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul>
					
					</div> 


				</div><!-- end last footer -->

			</footer><!-- end footer -->

		</div><!-- end layout -->
	
	</div><!-- end frame -->


	<div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->

	<!-- Javascript -->
	<script type='text/javascript' src='js/jquery/jquery.js?ver=1.11.0'></script>
	<script type='text/javascript' src='js/revslider/jquery.themepunch.tools.min.js?rev=4.6.0&#038;ver=3.9.6'></script>
	<script type='text/javascript' src='js/revslider/jquery.themepunch.revolution.min.js?rev=4.6.0&#038;ver=3.9.6'></script>
	<script type='text/javascript' src='js/themetor.js?ver=1.0'></script>
	<script type='text/javascript' src='js/jquery.flexslider-min.js?ver=2.1'></script>
	<script type='text/javascript' src='js/owl.carousel.min.js?ver=2.0.0'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js?ver=3.1.6'></script>
	<script type='text/javascript' src='js/waypoints.min.js?ver=4.3.2'></script>	
	<script type='text/javascript' src='js/jquery.tt_chart.js?ver=4.3.2'></script>
	<script type='text/javascript' src='js/jquery.nicescroll.min.js?ver=3.5.1'></script>
	<script type='text/javascript' src='js/ProgressCircle.js?ver=1'></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type='text/javascript' src='js/custom.js?ver=1.0'></script>
	<script src="js/readmore.min.js"></script>

<script type="text/javascript">

	/******************************************
		-	PREPARE PLACEHOLDER FOR SLIDER	-
	******************************************/
	

	var setREVStartSize = function() {
		var	tpopt = new Object();
			tpopt.startwidth = 1040;
			tpopt.startheight = 430;
			tpopt.container = jQuery('#rev_slider_2_1');
			tpopt.fullScreen = "off";
			tpopt.forceFullWidth="off";

		tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
	};

	/* CALL PLACEHOLDER */
	setREVStartSize();


	var tpj=jQuery;
	tpj.noConflict();
	var revapi2;

	tpj(document).ready(function() {

	if(tpj('#rev_slider_2_1').revolution == undefined)
		revslider_showDoubleJqueryError('#rev_slider_2_1');
	else
	   revapi2 = tpj('#rev_slider_2_1').show().revolution(
		{
			dottedOverlay:"none",
			delay:9000,
			startwidth:1040,
			startheight:430,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:2,
			
									
			simplifyAll:"off",

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:"navbar-old",

			touchenabled:"on",
			onHoverStop:"on",
			nextSlideOnWindowFocus:"off",

			swipe_threshold: 0.7,
			swipe_min_touches: 1,
			drag_block_vertical: false,
			
									
									
			keyboardNavigation:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			spinner:"spinner3",
			
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",
			
			
			hideTimerBar:"on",
			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

									hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0					});



		
	});	/*ready*/

</script>
<script>

	jQuery(document).ready(function($) {
		$('.readMore').readmore({
		  speed: 75,
		  lessLink: '<a href="#">Read less</a>'
		});		
		// portfolio Carousel /////////////////////////////
		try {

				$("#pc_tt1").owlCarousel({
					items:4,
					loop: true,
					margin:12,
					nav:true,
					navSpeed:700,
					navText:['<i class="icon-angle-right"></i>','<i class="icon-angle-left"></i>'],
					dots:false,
					autoplay:true,
					rtl:false,
					autoplayTimeout:4000,
					autoplaySpeed:700,
					autoplayHoverPause:true,
					responsive : {0 : {items : 1,nav : false}, 480 : {items : 2}, 768 : {items : 4}}
					
				});
				
				
		} catch(e){}
			
	//End Document.ready//
	});	
</script>

<script>
	jQuery(document).ready(function($) {
		
		// Testimonial Javascript /////////////////////////////
		try {

			if ($("#tst_tt1")[0]) {
				jQuery('#tst_tt1').flexslider({
					animation: "slide",
					slideshowSpeed: 8000,
					animationSpeed: 800,
					directionNav: true,
					controlNav: false,
					pauseOnHover: true,
					initDelay: 0,
					randomize: false,
					smoothHeight: true,
					keyboardNav: false
				});
			}
		} catch(e){}

	});	
</script>

<script>
	jQuery(document).ready(function($) {
		$('article').readmore({
			speed: 500,
			collapsedHeight: 175,
			moreLink:'<a  style="width:130px;" class="tbutton medium tbutton5 color1" href="#" target="_self"><span>Read More</span></a>',
			lessLink: '<a  style="width:130px;" class="tbutton medium tbutton5 color1" href="#" target="_self"><span>Close</span></a>'
			
		});
		// Clients Carousel /////////////////////////////
		try {
			
			$("#cc_tt1").owlCarousel({
					items:5,
					loop: true,
					margin:12,
					nav:true,
					navSpeed:700,
					navText:['<i class="icon-angle-right"></i>','<i class="icon-angle-left"></i>'],
					dots:false,
					autoplay:true,
					rtl:false,
					autoplayTimeout:4000,
					autoplaySpeed:700,
					autoplayHoverPause:true,
					responsive : {0 : {items : 1,nav : false}, 480 : {items : 2}, 768 : {items : 5}}
					
				});
	
		} catch(e){}

	});	
</script>

<script>
	jQuery(document).ready(function($) {
		
		// posts Carousel /////////////////////////////
		try {
				
				$("#poc_tt1").owlCarousel({
					items:2,
					loop: true,
					margin:12,
					nav:true,
					navSpeed:700,
					navText:['<i class="icon-angle-right"></i>','<i class="icon-angle-left"></i>'],
					dots:false,
					autoplay:true,
					rtl:false,
					autoplayTimeout:4000,
					autoplaySpeed:700,
					fallbackEasing:'easeInOutExpo',
					autoplayHoverPause:true,
					responsive : {0 : {items : 1,nav : false}, 480 : {items : 2}, 768 : {items : 2}}
					
				});

			
		} catch(e){}
			
	//End Document.ready//
	});	
</script>


</body>
</html>