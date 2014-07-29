<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  
  <!-- Page title -->
  <title>Presentate en la web, muy pronto</title>

  <link rel="shortcut icon" href="{{asset('themes/coming-soon/favicon.png')}}">
  
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

	@yield('customization')


    <!-- Image background -->
    <img src="{{asset('themes/coming-soon/img/background.jpg')}}" id="background_image" alt="" class="hidden" />
	<!-- Image background end -->
	
  
	<!-- Main page -->
    <div id="main_page">
  
	  <!-- Header -->
	  <header>
	    <h1>Muy pronto Presentate en la Web</h1> <!-- Set the page title -->	    
	  </header>
	  
	  <!-- Additional content -->
	  <div id="content"> &nbsp;	  
		  
		  
		  <!-- Custom text -->		  
		  @yield('text')
		  <!-- Custom text end -->
	  
	  
		  <!-- Countdown -->
		  {{-- @yield('countdown') --}}
		  <!-- Countdown end -->
		  
		  
		  <!-- Progress -->
		  @yield('progress')
		  <!-- Progress end -->		  
		  
		  
		  <!-- Short description -->
		  @yield('shortDescription')		  
		  <!-- Short description end -->
		  
		  
		  <!-- Twitter widget -->
		  {{-- @yield('twitterWidget') --}}
		  <!-- Twitter widget end -->
		  
		  
		  <!-- Subscription form -->
		  @yield('suscriptionForm')
		  <!-- Subscription form end -->
		  
		  
		  <!-- More info, part 1 -->
		  {{-- @yield('moreInfo') --}}
		  <!-- More info, part 1 end -->
		  
		  
	  </div>
	  
	</div>
	<!-- Main page end -->	

	<!-- More info, part 2 -->
	{{-- @yield('moreInfoContent') --}}
	<!-- More info, part 2 end -->

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
