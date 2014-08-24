<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">

    	<title>Eduktivo Sistema De Control De Procesos Escolares</title>

    	<!-- Bootstrap Core CSS -->
    	<link href="{{asset('themes/educativo-page/css/bootstrap.min.css')}}" rel="stylesheet">

    	<!-- Custom CSS -->
    	<link href="{{asset('themes/educativo-page/css/landing-page.css')}}" rel="stylesheet">

    	<!-- Custom Fonts -->
    	<link href="{{asset('themes/educativo-pagefont-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    	<link href="http://foassetnts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    	<!--[if lt IE 9]>
        	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       	 	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
	</head>

	<body>
    	<!-- Navigation -->
    	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        	<div class="container">
            	<!-- Brand and toggle get grouped for better mobile display -->
            	<div class="navbar-header">
                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    	<span class="sr-only">Toggle navigation</span>
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>
                	</button>
                	<a class="navbar-brand" href="#">Start Bootstrap</a>
            	</div>
            	<!-- Collect the nav links, forms, and other content for toggling -->
            	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                	<ul class="nav navbar-nav navbar-right">
                    	<li>
                        	<a href="#jump1">About</a>
                    	</li>
                    	<li>
                        	<a href="#jump2">Services</a>
                    	</li>
                    	<li>
                        	<a href="#jump3">Contact</a>
                    	</li>
                    	<li>
                        	<a href="#jump4">Contact</a>
                    	</li>
                	</ul>
            	</div>
            	<!-- /.navbar-collapse -->
        	</div>
        	<!-- /.container -->
    	</nav>

	<!-- Header -->
	<div class="intro-header" id="jump1">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-12">
               		<div class="intro-message">
                   		<h1>Educativo</h1>
                        <h3>Sistema De Control De Procesos Escolares</h3>
                        <p>Educativo te ayudará a gestionar eficientemente el trabajo de todo tipos de instituciones educativas</p>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                           		<a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->
    <!-- Page Content -->

	<!-- Seccion Caracteristicas -->
	@yield('caracteristicas')
	<!-- Seccion Cuenta Administrador -->
	@yield('cuenta_administrador')
	<!-- Seccion Cuenta Profesor -->
    @yield('cuenta_profesor')  
    <!--Seccion Cuenta Estudiante -->
    @yield('cuenta_estudiante')  
    <!-- Seccion Cuenta Representante -->
    @yield('cuenta_representante')
       
    <!-- Footer -->
    <!--<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>-->

    <!-- jQuery Version 1.11.0 -->
    <script src="{{asset('themes/educativo-page/js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('themes/educativo-page/js/bootstrap.min.js')}}"></script>
    <!--<script type="text/javascript" src="{{asset('themes/meilleur/js/jquery.smooth-scroll.min.js')}}"></script>-->
    <script type="text/javascript" src="{{asset('themes/educativo-page/js/custom.js')}}"></script>
</body>

</html>
