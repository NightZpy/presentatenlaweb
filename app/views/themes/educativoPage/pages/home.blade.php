@extends('themes.educativoPage.layout.index')

@section('caracteristicas')	
	<div class="content-section-a" id="jump2">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-5 col-sm-6">
                	<hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{ trans('textos.features_educativo') }}</h2>
                    <p class="lead">{{trans('textos.educativo')}}</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                	<img class="img-responsive" src="{{asset('themes/educativo-page/img/ipad.png')}}" alt="">
              	</div>
            </div>
        </div>
       <!-- /.container -->
    </div>
@stop()
