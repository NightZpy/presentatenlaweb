<!-- More info, part 2 -->
	<div id="more_info_page"><div class="dark_background"></div>
		
	  <a href="/#" id="show_main" class="button">Regresar</a><div class="clearfix"></div>
	
	  <!-- About -->
	  <section class="about">
	  
		<h2>Acerca de nosotros</h2>
		
		<!-- First paragraph -->		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porta cursus nunc, sit amet gravida orci fermentum id.</p>
		<p>Donec eu dolor arcu. Duis venenatis imperdiet justo vitae dignissim. <a href="/#">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit.</p>
		<!-- First paragraph end -->
	  
	    <!-- Second paragraph -->
		<h3>Ut elementum turpis</h3>
		<p>Curabitur adipiscing nisl urna, <a href="/#">vulputate</a> convallis quam. Integer vulputate mi quis risus feugiat eu condimentum tortor sodales.</p>
		<p>In ut libero ac turpis fringilla venenatis eu id nulla. In eget felis ligula.</p>
		<!-- Second paragraph end -->
	  
	    <!-- Third paragraph -->
		<h3>Nam porttitor pharetra</h3>
		<p>Nam porttitor pharetra risus, ac commodo mi malesuada pharetra. Integer convallis vehicula urna, vel luctus lacus interdum at.</p>
		<!-- Third paragraph end -->
	  	
		<!-- Social icons -->
		<h3>Social</h3>
		<a href="index.html"><img src="{{asset('themes/coming-soon/img/facebook.png')}}" alt="Facebook" class="social" /></a>
		<a href="index.html"><img src="{{asset('themes/coming-soon/img/twitter.png')}}" alt="Twitter" class="social" /></a>
		<a href="index.html"><img src="{{asset('themes/coming-soon/img/linkedin.png')}}" alt="LinkedIn" class="social" /></a>
		<a href="index.html"><img src="{{asset('themes/coming-soon/img/flickr.png')}}" alt="Flickr" class="social" /></a>
		<a href="index.html"><img src="{{asset('themes/coming-soon/img/youtube.png')}}" alt="YouTube" class="social" /></a>
		<!-- Social icons end -->
		
	  </section>
	  About end
	  
	
	  <!-- Contact -->
	  <section class="contact">
	  
		<h2>Contact</h2>
		
		<!-- First paragraph -->	
		<p>In ut libero ac turpis fringilla venenatis eu id nulla. In eget felis ligula.</p>	
		<!-- First paragraph end -->

		
		<!-- First person contact card -->
		<p class="person vcard">
		  <img src="{{asset('themes/coming-soon/img/avatar.png')}}" alt="John Doe" class="photo" />
		  <span class="fn n">John Doe <em>project manager</em></span>
		  <span class="email">manager@coming.soon</span>
		  <span class="tel">+421 000 111 222</span>
		  <span class="clearfix"></span>
		</p>
		<!-- First person contact card end -->
	  
	  
	    <!-- Second person contact card -->
		<p class="person vcard">
		  <img src="{{asset('themes/coming-soon/img/avatar.png')}}" alt="John Smith" class="photo" />
		  <span class="fn n">John Smith <em>designer</em></span>
		  <span class="email">designer@coming.soon</span>
		  <span class="tel">+421 111 222 333</span>
		  <span class="clearfix"></span>
		</p>
		<!-- Second person contact end -->
	  
		<div class="clearfix"></div>
	  
		<!-- Address -->
		<script>
		  $(function() {
			  marker = "Bratislava Castle, Bratislava"; // Set the address for marker
			  $("#map").attr("href", "http://maps.google.com/maps?q=" + escape(marker));
			  $("#map img").attr("src", "http://maps.google.com/maps/api/staticmap?markers=" + escape(marker) + "&size=360x190&sensor=false");
		  });
		</script>
		<h3>Address</h3>
		<figure class="address vcard">
		  <a href="index.html" id="map"><img src="{{asset('themes/coming-soon/img/map_placeholder.jpg')}}" alt="Map" /></a>
		  <figcaption>
		    <span class="fn">Coming Soon Inc.</span>,
			<span class="adr">30 Dummy Street, Town, Country</span>
		  </figcaption>
		</figure>
		<!-- Address end -->
		
	  </section>
	  <!-- Contact end-->
		  
	</div>
	<!-- More info, part 2 end -->