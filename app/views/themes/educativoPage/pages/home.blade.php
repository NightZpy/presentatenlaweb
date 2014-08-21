@extends('themes.educativoPage.layout.index')

@section('caracteristicas')	
	<div class="content-section-a" id="jump2">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-5 col-sm-6">
                	<hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{ trans('titulos.features_educativo') }}</h2>
                    <p class="lead">{{trans('textos.educativo')}}</p>
					<ul>
						<li>1. {{trans('titulos.manager')}}</li>
						<li>2. {{trans('titulos.teacher')}}</li>
						<li>3. {{trans('titulos.student')}}</li>
						<li>4. {{trans('titulos.parent')}}</li>
					</ul>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                	<img class="img-responsive" src="{{asset('themes/educativo-page/img/ipad.png')}}" alt="">
              	</div>
            </div>
        </div>
       <!-- /.container -->
    </div>
@stop()

@section('cuenta_administrador')
	<div class="content-section-b">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                	<hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
                    <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/dog.png" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
@stop()
