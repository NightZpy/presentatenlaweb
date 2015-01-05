<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">

    	<title>{{trans('titulos.Educational_institute_management_system')}}</title>
        <link rel="shortcut icon" href="{{asset('themes/meilleur/favicon.png')}}">

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('themes/eduktivo-page/css/bootstrap.css')}}" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">        

        <!-- Custom CSS -->
        <link href="{{asset('themes/eduktivo-page/css/landing-page.css')}}" rel="stylesheet">
        <link href="{{asset('themes/eduktivo-page/css/modificar_bootstrap.css')}}"/>
        <!-- Custom Fonts -->
        <!-- <link href="{{asset('themes/eduktivo-pagefont-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> -->

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
                	<a class="navbar-brand" href="#jump1">Eduktivo</a>
            	</div>
            	<!-- Collect the nav links, forms, and other content for toggling -->
            	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                	<ul class="nav navbar-nav navbar-right">
                    	<li>
                        	<a href="#jump2">{{trans('enlaces.feature')}}</a>
                    	</li>
                    	<li>
                        	<a href="#jump3">{{trans('enlaces.account_manager')}}</a>
                    	</li>
                    	<li>
                        	<a href="#jump4">{{trans('enlaces.account_teacher')}}</a>
                    	</li>
                    	<li>
                        	<a href="#jump5">{{trans('enlaces.account_student')}}</a>
                    	</li>
                        <li><a href="#jump6">{{trans('enlaces.account_parent')}}</a></li>
                        
                        <li><a href="#formulario">{{trans('enlaces.purchase')}}</a></li>
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
                   		<h1>Eduktivo</h1>
                        <h3>{{trans('titulos.Educational_institute_management_system')}}</h3>
                        <p>{{trans('textos.Educativo')}}</p>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="http://eduktivo.presentatenlaweb.com/index.php" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">{{trans('enlaces.demo')}}</span></a>
                            </li>
                            <li>
                           		<a href="#formulario" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">{{trans('enlaces.purchase')}}</span></a>
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

	<!-- Sección Caracteristicas -->
	@yield('caracteristicas')
    <!--Sección Solicitar-->
    @yield('solicitar')
	<!-- Sección Cuenta Administrador -->
	@yield('cuenta_administrador')
    <!-- Sección Cuenta Profesor -->
    @yield('cuenta_profesor')  
    <!--Sección Cuenta Estudiante -->
    @yield('cuenta_estudiante')  
    <!-- Sección Cuenta Representante -->
    @yield('cuenta_representante')
    <!-- Seccón usuarios de prueba -->
    @yield('usuarios_prueba')
    <!--Sección Precios -->
    @yield('precios')     
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
    <script src="{{asset('themes/eduktivo-page/js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('themes/eduktivo-page/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/meilleur/js/jquery.smooth-scroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes/eduktivo-page/js/custom.js')}}"></script>
</body>

</html>
