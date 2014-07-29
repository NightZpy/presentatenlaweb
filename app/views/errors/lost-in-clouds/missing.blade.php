<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Perdido en las nubes - Error 404</title>
		<meta name="description" content="Estas perdido en el sitio, te fuiste a las nubes">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="{{asset('errors/lost-in-clouds/css/reset.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('errors/lost-in-clouds/css/main.css')}}">
		<link rel="shortcut icon" href="{{asset('errors/lost-in-clouds/favicon.ico')}}">
		
		<!--[if lte IE 8]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<div id="stage" class="stage">
				<div id="clouds" class="stage" style="background-position: 826.7000000000146px 0px;"></div>
			</div>
			
			<div id="ticket">
				<section id="ticket_left">
					<p class="text1_a">Perdido</p>
					<p class="text2_a">No encontrado</p>
					<p class="text3_a">Error 404</p>
					<p class="text4_a">Ops!</p>
					<p class="text5_a">De</p>
					<p class="text6_a">Internet</p>
					<p class="text7_a">Hacia</p>
					<p class="text8_a"><a href="/">Home</a></p>
					<p class="text9_a">Asiento</p>
					<p class="text10_a">404</p>
					<p class="text11_a">Intenta otro vuelo</p>
					<nav class="text12_a">
						<ul>
							<li><a href="/">Home</a></li>
						</ul>
					</nav>
				</section>
			</div>
		</div>
		<script src="{{asset('themes/coming-soon/js/jquery-1.5.1.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('errors/lost-in-clouds/js/jquery.spritely-0.5.js')}}" type="text/javascript"></script>
		<script type="text/javascript">
			(function($) {
				$(document).ready(function() {
					$('#clouds').pan({fps: 40, speed: 0.7, dir: 'right', depth: 10});
				});
				})(jQuery);
		</script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-53298821-1', 'auto');
		  ga('send', 'pageview');

		</script>		
	</body>
</html>