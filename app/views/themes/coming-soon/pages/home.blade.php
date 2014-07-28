@extends('themes.coming-soon.layouts.default')

@section('customization')
	<div id="customization">
		<h2>Selecciona un color:</h2>
		<div class="colors">
			<a href="/#" class="green">#339966</a>
			<a href="/#" class="blue">#417E89</a>
			<a href="/#" class="dark_green">#537765</a>
			<a href="/#" class="brown">#78715F</a>
			<a href="/#" class="black">#555555</a>
		</div>
		<!-- <h2>Or pick an image:</h2>
			<img src="{{asset('themes/coming-soon/img/background_thumb.jpg')}}" alt="" class="bg_image" />
			<hr />
		<h2>Qué quieres ver?</h2>
			<form>
					<ul>
								<li><input type="checkbox" name="text" /> Texto</li>
										<li><input type="checkbox" name="countdown" /> Contador</li>
								<li><input type="checkbox" name="progress" checked="checked" /> Progreso</li>
								<li><input type="checkbox" name="description" /> Descripción</li>
								<li><input type="checkbox" name="twitter" /> Twitter</li>
								<li><input type="checkbox" name="subscribe" /> Suscribete</li>
								<li><input type="checkbox" name="more_info" /> Más información</li>
					</ul>
		</form>	   -->
	</div>
@stop

@section('text')
	<section class="text">
		<p>Tu presencia es importante en Internet.</p>
	</section>
@stop

@section('countdown')
	<!-- Load jQuery Countdown library -->
	<script src="{{asset('themes/coming-soon/js/jquery.countdown.min.js')}}"></script>
	<script>
		$(function() {
			launchTime = new Date(); // Set launch: [year], [month], [day], [hour]...
				launchTime.setDate(launchTime.getDate() + 20); // Add 15 days
			$("#countdown").countdown({until: launchTime, format: "odHMS"});
		});
	</script>
	<section class="countdown">
		<div id="countdown"></div>
	</section>
@stop

@section('progress')
	<script>
		$(function() {
			$("#progressbar").animate({width: $(".progress h2").text()}, 2000);
		});
	</script>
	<section class="progress">
		<div id="progressbar"></div>
		<h2>65%</h2> {{-- Asignar el porcentaje de la barra de progreso --}}
	</section>
@stop

@section('shortDescription')
	<section class="description">
		<div class="description_top"></div>
		<div class="description_content">
			<p>Pronto estaremos ofreciendo un excelente servicio.</p>
			<p>Tenemos proyectos SaaS en mente y en desarrollo para su empresa, a la medida y personalizados.</p>
			<!-- <p>Get new subscribers and let them know when your project is ready for launch.</p> -->
		</div>
		<div class="description_bottom"></div>
	</section>
	@stop

	@section('twitterWidget')
	<script src="{{asset('themes/coming-soon/js/jquery.tweet.js')}}"></script> <!-- Load jQuery Twitter library -->
	<script>
	$(function() {
					$("#tweet").tweet({
			username: "envatowebdev", // Your Twitter username
			count: 1, // Number of tweets to show up
			loading_text: "Loading tweets...",
			fetch: 10, filter: function(t){ return ! /^@\w+/.test(t["tweet_raw_text"]); }, // Fetch more tweets and filter out replies
				callback: function () {	$(".tweet_list").fadeIn(); }
		});
	});
	</script>
	<section class="twitter">
		<div id="tweet"></div>
	</section>
@stop

@section('suscriptionForm')
	<script>
	$(function() {
		$("input.submit").click(function (event) {
			event.preventDefault();
			event.returnValue = false;
			$.ajax({
				type: "POST",
				url: "subscribe.php",
				data: {email: $("input[name=email]").val()},
				success: function(data) {
					if (data == "successful") {
						$(".subscribe p").html("Gracias por suscribirte, pronto te estaremos dando a conocer nuestros servicios.").slideDown();
					} else if (data == "already_subscribed") {
						$(".subscribe p").html("Este email ya está registrado.").slideDown();
					} else if (data == "invalid_email") {
						$(".subscribe p").html("Este email es inválido.").slideDown();
					} else {
							$(".subscribe p").html("Algo salió mal, por favor intenta de nuevo.").slideDown();
					}
				},
				error: function () {
					$(".subscribe p").html("La suscripción no está disponible.").slideDown();
				}
			});
		});
	});
	</script>
	<section class="subscribe">
		<p></p>
		<form method="post">
			<input name="email" placeholder="Tu e-mail...">
			<input type="submit" class="submit" value="Mantenerme informado.">
		</form>
	</section>
@stop

@section('moreInfo')
	<script>
	$(function() {
		$("#show_more_info").click(function () {
			$("#main_page").fadeOut("slow", function () {
								$("#more_info_page").fadeIn("slow");
			});
		});
		$("#show_main").click(function () {
			$("#more_info_page").fadeOut("slow", function () {
								$("#main_page").fadeIn("slow");
			});
		});
	});
	</script>
	<section class="more_info">
		<a href="/#" id="show_more_info" class="button">Más información</a>
	</section>
@stop

@section('moreInfoContent')
	<div id="more_info_page"><div class="dark_background"></div>

	<a href="index.html#" id="show_main" class="button">Back</a><div class="clearfix"></div>

	<!-- About -->
	<section class="about">
		
		<h2>About</h2>
		
		<!-- First paragraph -->
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porta cursus nunc, sit amet gravida orci fermentum id.</p>
		<p>Donec eu dolor arcu. Duis venenatis imperdiet justo vitae dignissim. <a href="index.html#">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit.</p>
		<!-- First paragraph end -->
		
		<!-- Second paragraph -->
		<h3>Ut elementum turpis</h3>
		<p>Curabitur adipiscing nisl urna, <a href="index.html#">vulputate</a> convallis quam. Integer vulputate mi quis risus feugiat eu condimentum tortor sodales.</p>
		<p>In ut libero ac turpis fringilla venenatis eu id nulla. In eget felis ligula.</p>
		<!-- Second paragraph end -->
		
		<!-- Third paragraph -->
		<h3>Nam porttitor pharetra</h3>
		<p>Nam porttitor pharetra risus, ac commodo mi malesuada pharetra. Integer convallis vehicula urna, vel luctus lacus interdum at.</p>
		<!-- Third paragraph end -->
		
		<!-- Social icons -->
		<h3>Social</h3>
		<a href="index.html"><img src="img/facebook.png" alt="Facebook" class="social" /></a>
		<a href="index.html"><img src="img/twitter.png" alt="Twitter" class="social" /></a>
		<a href="index.html"><img src="img/linkedin.png" alt="LinkedIn" class="social" /></a>
		<a href="index.html"><img src="img/flickr.png" alt="Flickr" class="social" /></a>
		<a href="index.html"><img src="img/youtube.png" alt="YouTube" class="social" /></a>
		<!-- Social icons end -->
		
	</section>
	<!-- About end -->


	<!-- Contact -->
	<section class="contact">
		
		<h2>Contact</h2>
		
		<!-- First paragraph -->
		<p>In ut libero ac turpis fringilla venenatis eu id nulla. In eget felis ligula.</p>
		<!-- First paragraph end -->
		
		<!-- First person contact card -->
		<p class="person vcard">
		<img src="img/avatar.png" alt="John Doe" class="photo" />
		<span class="fn n">John Doe <em>project manager</em></span>
		<span class="email">manager@coming.soon</span>
		<span class="tel">+421 000 111 222</span>
		<span class="clearfix"></span>
		</p>
		<!-- First person contact card end -->
		
		
		<!-- Second person contact card -->
		<p class="person vcard">
		<img src="img/avatar.png" alt="John Smith" class="photo" />
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
			<a href="index.html" id="map"><img src="img/map_placeholder.jpg" alt="Map" /></a>
			<figcaption>
			<span class="fn">Coming Soon Inc.</span>,
			<span class="adr">30 Dummy Street, Town, Country</span>
			</figcaption>
		</figure>
		<!-- Address end -->
		
	</section>
	<!-- Contact end-->

	</div>
@stop