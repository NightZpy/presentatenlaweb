<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  
  <!-- Page title -->
  <title>Minimal Coming Soon</title>

  <link rel="shortcut icon" href="favicon.png">
  
  <!-- Stylesheet -->
  <link rel="stylesheet" href="{{asset('themes/coming-soon/css/style.css')}}"> <!-- Regular stylesheet -->
  <link rel="stylesheet" href="{{asset('themes/coming-soon/css/green.css')}}"> <!-- Pick color scheme (black.css, blue.css, dark_green.css, green.css, white.css)-->
  
  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Cantarell:regular,italic,bold" rel="stylesheet" type="text/css">
  
  <!-- JavaScript -->
  <script src="{{asset('themes/coming-soon/js/jquery-1.5.1.min.js')}}"></script> <!-- Load jQuery library -->
  <script src="{{asset('themes/coming-soon/js/modernizr-1.7.min.js')}}"></script> <!-- Load Modernizr -->
  <script>
	$(function () {
		
		/* Customization */
		$("#customization input").change(function () {
			if ( $(this).is(":checked") ) {
				$("." + $(this).attr("name")).slideDown();
			} else {
				$("." + $(this).attr("name")).slideUp();
			}					 
		});
		$("#bg_images img").click(function () {
			src = $(this).attr("alt");
			$("body").css("background", "#000000");
			$("#background_image").fadeOut(function () {
				$(this).attr("src", src).fadeIn();
			});
		});
		$(".colors a").each(function () {
			$(this).css("background-color", $(this).text());
			$(this).text("");
		});
		$("#customization input").each(function () {
			if ( !$(this).is(":checked") ) {
				$("." + $(this).attr("name")).addClass("hidden");
			}
		});
		$(".colors a").click(function () {
			color = $(this).attr("class");
			$("#background_image").addClass("hidden");
			$("body").removeClass("active_bg_image");
			$("header").css("background-image", "url(themes/coming-soon/img/bg_header_" + color + ".png)");
			$("body").css("background-color", $(this).css("background-color"));
			$("#progressbar").css("background-image", "url(themes/coming-soon/img/progressbar_fill_" + color + ".png)");
			$("input[type=submit]").css("background-image", "url(themes/coming-soon/img/form_button_" + color + ".png)");
		});
		$(".bg_image").click(function () {
			$("#background_image").removeClass("hidden");
			$("body").addClass("active_bg_image");
			$("header").css("background-image", "url(themes/coming-soon/img/bg_header_white.png)");
			$("body").css("background-color", "#FFFFFF");
			$("#progressbar").css("background-image", "url({themes/coming-soon/img/progressbar_fill_white.png)");
			$("input[type=submit]").css("background-image", "url(themes/coming-soon/img/form_button_white.png)");
		});
		
		/* Put your JavaScript here */
			
	});
  </script>
</head>

<body>
  <div id="pattern"><div id="gradient">

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


    <!-- Image background -->
    <img src="{{asset('themes/coming-soon/img/background.jpg')}}" id="background_image" alt="" class="hidden" />
	<!-- Image background end -->
	
  
	<!-- Main page -->
    <div id="main_page">
  
	  <!-- Header -->
	  <header>
	    <h1>Muy pronto Presentate en la Web</h1> <!-- Set the page title -->
	    @yield('content')
	  </header>
	  
	  <!-- Additional content -->
	  <div id="content"> &nbsp;	  
		  
		  
		  <!-- Custom text -->
		  <section class="text">
			<p>Tu presencia es importante en Internet.</p>
		  </section>
		  <!-- Custom text end -->
	  
	  
		  <!-- Countdown -->
		  <script src="{{asset('themes/coming-soon/js/jquery.countdown.min.js')}}"></script> <!-- Load jQuery Countdown library -->
		  <script>
			$(function() {
				launchTime = new Date(); // Set launch: [year], [month], [day], [hour]...
					launchTime.setDate(launchTime.getDate() + 20); // Add 15 days
				$("#countdown").countdown({until: launchTime, format: "odHMS"});
			});
		  </script>
		  <!-- <section class="countdown">
			<div id="countdown"></div>
		  </section> -->
		  <!-- Countdown end -->
		  
		  
		  <!-- Progress -->
		  <script>
		    $(function() {
				$("#progressbar").animate({width: $(".progress h2").text()}, 2000);
			});
		  </script>
		  <section class="progress">
			<div id="progressbar"></div>
			<h2>65%</h2> <!-- Set your progress, must be percentage -->
		  </section>
		  <!-- Progress end -->		  
		  
		  
		  <!-- Short description -->
		  <section class="description">
			<div class="description_top"></div>
			<div class="description_content">
			  <p>Pronto estaremos ofreciendo un excelente servicio.</p>
			  <p>Tenemos proyectos SaaS en mente y en desarrollo para su empresa, a la medida y personalizados.</p>
			  <!-- <p>Get new subscribers and let them know when your project is ready for launch.</p> -->
			</div>
			<div class="description_bottom"></div>
		  </section>		  
		  <!-- Short description end -->
		  
		  
		  <!-- Twitter widget -->
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
		  <!-- <section class="twitter">
			<div id="tweet"></div>
		  </section> -->
		  <!-- Twitter widget end -->
		  
		  
		  <!-- Subscription form -->
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
								$(".subscribe p").html("Gracias por suscribirte, pronto te estaremos dando a conocer nuestros servicios-").slideDown();
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
		  <!-- Subscription form end -->
		  
		  
		  <!-- More info, part 1 -->
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
		  <!-- <section class="more_info">
			<a href="/#" id="show_more_info" class="button">Más información</a>
		  </section> -->
		  <!-- More info, part 1 end -->
		  
		  
	  </div>
	  
	</div>
	<!-- Main page end -->	
  </div>
  </div>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2529322-8']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>
