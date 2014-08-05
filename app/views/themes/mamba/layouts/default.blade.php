
	<head>
  		<meta charset="utf-8">
 		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    	<!-- css -->
    	<link href="{{asset('themes/mamba/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    	<link href="{{asset('themes/mamba/css/style.css')}}" rel="stylesheet" media="screen">
		<link href="{{asset('themes/mamba/color/default.css')}}" rel="stylesheet" media="screen">
		<script src="{{asset('themes/mamba/js/modernizr.custom.js')}}"></script>
	</head>

	<body>
		@yield('menu_area')
		
		<!-- js -->	
    	<script src="{{asset('themes/mamba/js/jquery.js')}}"></script>
   	 	<script src="{{asset('themes/mamba/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('themes/mamba/js/jquery.smooth-scroll.min.js')}}"></script>
		<script src="{{asset('themes/mamba/js/jquery.dlmenu.js')}}"></script>
		<script src="{{asset('themes/mamba/js/wow.min.js')}}"></script>
		<script src="{{asset('themes/mamba/js/custom.js')}}"></script> 

	</body>
</html>
