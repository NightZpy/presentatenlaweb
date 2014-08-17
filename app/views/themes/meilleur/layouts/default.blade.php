<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>{{trans('titulos.Software_Development_Company')}}</title>
    	
		<!-- Stylesheets -->
    	<link type="text/css" href="{{asset('themes/meilleur/css/bootstrap.css')}}" rel="stylesheet">
    	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,500italic,500,300italic,300'
    	rel='stylesheet' type='text/css'>
		<link type="text/css" href="{{asset('themes/meilleur/icons/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    	<link type="text/css" href="{{asset('themes/meilleur/icons/rondo/style.css')}}" rel="stylesheet">
    	<link href="{{asset('themes/meilleur/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />
    	<link type="text/css" href="{{asset('themes/meilleur/css/style.css')}}" rel="stylesheet">
	</head>

	<body>
		<header class="header" id="jump">
       		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
           		<div class="container">
               		<div class="navbar-header">
                   		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                       		<span class="sr-only">Toggle navigation</span>
                       		<span class="icon-bar"></span>
                       		<span class="icon-bar"></span><span class="icon-bar"></span>
                   		</button>
                 		<a class="navbar-brand" href="{{ URL::to('test') }}">
                      		<img src="{{asset('themes/meilleur/img/logo.png')}}" alt="" />
                  		</a>
              		</div>
  
              		<div class="collapse navbar-collapse hidden-xs">
                 		<ul class="nav navbar-nav navbar-right">
                      		<li class="active"><a href="#jump0">{{trans('enlaces.Home')}}</a></li>
                     		<li><a href="#jump1">{{trans('enlaces.Services')}}</a></li>
                      		<li><a href="#jump2">{{trans('enlaces.Portfolio')}}</a></li>
                      		<!--<li><a href="#jump3">{{trans('enlaces.Pricing')}}</a></li>-->
                      		<!--<li><a href="#jump4">Our Team</a></li>
                      		<li><a href="#jump5">Testimonials</a></li>-->
                      		<li><a href="#jump6">{{trans('enlaces.Contact_Us')}}</a></li>
							<!--<li class="dropdown">
                            	<a id="idiomas" href="" class="dropdown-toggle" data-toggle="dropdown">{{trans('enlaces.languages')}}<b class="caret"></b></a>
                               	<ul class="dropdown-menu">
									<li><a id="idioma1" href="{{ URL::to('change_locale/es') }}">{{trans('enlaces.Spanish')}}</a></li>
    								<li><a id="idioma2" href="{{ URL::to('change_locale/en') }}">{{trans('enlaces.English')}}</a></li>
								</ul>
                        	</li>-->
                  		</ul>
              		</div>
              		<!-- /.navbar-collapse -->
              		<div class="collapse navbar-responsive-collapse">
                  		<ul class="nav navbar-nav">
                      		<li class="active"><a href="#jump0" data-toggle="collapse" data-target=".navbar-responsive-collapse">Home</a></li>
                      		<li><a href="#jump1" data-toggle="collapse" data-target=".navbar-responsive-collapse">Services</a></li>
                      		<li><a href="#jump2" data-toggle="collapse" data-target=".navbar-responsive-collapse">Portfolio</a></li>
                      		<li><a href="#jump3" data-toggle="collapse" data-target=".navbar-responsive-collapse">Pricing</a></li>
                      		<li><a href="#jump4" data-toggle="collapse" data-target=".navbar-responsive-collapse">Team</a></li>
                      		<li><a href="#jump5" data-toggle="collapse" data-target=".navbar-responsive-collapse">Clients</a></li>
                      		<li><a href="#jump6" data-toggle="collapse" data-target=".navbar-responsive-collapse">Contact</a></li>
                  		</ul>
              		</div>
              		<!-- /.navbar-responsive-collapse -->
          		</div>
      		</nav>
  		</header>
		<div class="jumper" id="jump0">
    	</div>

    	<div class="section type-1 big splash">
        	<div class="splash-cover">
        	</div>

        	<div class="container">
            	<div class="splash-block">
                	<div class="centered">
                    	<div class="container">
                       		<div class="section-headlines">
                            	<h1>Presentatenlaweb</h1>
                            	<p></p>
                        	</div>
                        	<a href="#jump2" class="btn btn-outline btn-lg">{{trans('enlaces.Our_Portfolio')}}</a>&nbsp; 
							<a href="#jump6" class="btn btn-outline btn-lg">{{trans('enlaces.Contact_Us')}}</a>
                    	</div>
                	</div>
            	</div>
        	</div>
    	</div>
		
		<!-- jump1 -->	
		@yield('our_services')
		<!-- jump1 end -->

		<!--jump2 -->
		@yield('featured_works')
		<!--jump2 end-->	

		<!--jump2 -->
        <!--jump2 end-->
		
		<!--jump2 -->
        <!--jump2 end--> 		

		<!--jump2 -->
        <!--jump2 end-->			
		
		<!--jump2 -->
        @yield('contact_us')
        <!--jump2 end--> 
	
		<footer class="footer">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-12">
                   		 &copy; Copyright  by presentatenlaweb.com - All Rights Reserved.</a>
                	</div>
            	</div>
        	</div>
    	</footer>
		
		<!--Scripts-->
    	<script type="text/javascript" src="{{asset('themes/meilleur/js/jquery-1.10.2.min.js')}}"></script>
   	 	<script type="text/javascript" src="{{asset('themes/meilleur/js/bootstrap.min.js')}}"></script>
    	<script type="text/javascript" src="{{asset('themes/meilleur/js/jquery.smooth-scroll.min.js')}}"></script>
    	<script type="text/javascript" src="{{asset('themes/meilleur/js/jquery.mixitup.min.js')}}"></script>
    	<script src="{{asset('themes/meilleur/js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
    	<script src="{{asset('themes/meilleur/js/modernizr.js')}}" type="text/javascript"></script>
    	<script src="{{asset('themes/meilleur/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
    	<script type="text/javascript" src="{{asset('themes/meilleur/js/custom.js')}}"></script>
	</body>
</html>
