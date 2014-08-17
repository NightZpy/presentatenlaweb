@extends('themes.meilleur.layouts.default')

@section('our_services')
    <div id="jump1" class="jumper">
    </div>
    <div class="section type-2">
        <div class="container">
            <div class="section-headlines">
                <h4>{{ trans('titulos.our_services') }}</h4>
                <div>
                    {{ trans('textos.our_services') }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 features">
                    <div class="media">
                        <i class=" icon-wrench pull-left animated bounce"></i>
                        <div class="media-body">
                            <h3>{{ trans('titulos.websites') }}</h3>
                            <div>{{ trans('textos.websites') }}</div>
                        </div>
                    </div>
                    <br class="gap-30">
                    <div class="media">
                        <i class=" icon-bar-chart pull-left animated bounce"></i>
                        <div class="media-body">
                            <h3>{{ trans('titulos.web_design') }}</h3>
                            <div>{{ trans('textos.web_design') }}</div>
                        </div>
                    </div>
                    <br class="gap-30">
                    <div class="media">
                        <i class=" icon-mobile-phone pull-left animated bounce"></i>
                        <div class="media-body">
                            <h3>{{ trans('titulos.mobile_applications') }}</h3>
                            <div>{{ trans('textos.mobile_applications') }}</div>
                        </div>
                    </div>
                    <!--<br class="gap-30">
                    <div class="media">
                        <i class=" icon-bar-chart pull-left animated bounce"></i>
                        <div class="media-body">
                            <h3>{{ trans('titulos.hosting _and_Domains') }}</h3>
                            <div>{{ trans('textos.hosting _and_Domains') }}</div>
                            </div>
                       </div>-->

                    <div class="visible-xs visible-sm">
                        <br class="gap-30">
                        <hr class="gap-divider">
                        <br class="gap-30">
                    </div>
                </div>
                <div class="col-lg-6 features">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        {{ trans('titulos.Responsive_Layout') }}<i class="icon-plus"></i><i class="icon-minus"></i></a>
                                </h3>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    {{ trans('textos.Responsive_Layout') }}
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">{{ trans('titulos.Built_Using_Bootstrap_3') }}<i class="icon-plus"></i><i class="icon-minus">
                                        </i></a>
                                </h3>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    {{ trans('textos.Built_Using_Bootstrap_3') }}
                                </div>
                            </div>
                        </div>
                        <!--<div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">{{ trans('') }} <i class="icon-plus"></i><i class="icon-minus">
                                        </i></a>
                                </h3>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    {{ trans('') }}
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="visible-xs visible-sm">
                        <br class="gap-30">
                        <hr class="gap-divider">
                        <br class="gap-30">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-6 features">
                    <h3>{{ trans('titulos.Our_Skills') }}</h3>
                    <div class="skills">
                        <p>{{ trans('titulos.HTML5_and_CSS3') }}</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            </div>
                        </div>
                        <hr>
                        <p>{{ trans('titulos.Mobile_Apps_Development') }}</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            </div>
                        </div>
                        <hr>
                        <p>{{ trans('titulos.Software_Development') }}</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            </div>
                        </div>
                        <hr>
                        <p>{{ trans('titulos.Javascript') }}</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 features">
                    <h3>{{ trans('titulos.Get_To_Know_Us') }}</h3>
                    <p>
                        {{ trans('textos.Get_To_Know_Us') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('featured_works')
    <div id="jump2" class="jumper">
    </div>

    <div class="section type-1" style="padding-bottom: 0">
        <div class="container">
            <div class="section-headlines">
                <h4>{{trans('titulos.FEATURED_WORKS')}}</h4>
                <h2>{{trans('titulos.Exceptional_Work')}}</h2>
                <div>
                    {{trans('textos.Exceptional_Work')}}
                </div>
            </div>
            <div class="gallery-control">
                <div data-toggle="buttons">
                    <label class="btn btn-outline filter active" data-filter="phone tablet desktop">
                        <input type="radio" name="options" id="option1">
                        All
                    </label>
                    <label class="btn btn-outline filter" data-filter="phone">
                        <input type="radio" name="options" id="option2">
                        Phone
                    </label>
                    <label class="btn btn-outline filter" data-filter="tablet">
                        <input type="radio" name="options" id="option3">
                        Tablet
                    </label>
                    <label class="btn btn-outline filter" data-filter="desktop">
                        <input type="radio" name="options" id="option3">
                        Desktop
                    </label>
                </div>
            </div>
        </div>

        <div class="mixitup">
            <ul id="portfolio" class="unstyled">
                <li class="mix phone">
                    <div>
                        <div class="media-thumb">
                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-7.jpg">
                            <div class="media-desc">
                                <div>
                                    <p>
                                        <b>A Project</b></p>
                                    <div>
                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,
                                        or non-characteristic words etc.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="mix tablet">

                    <div>

                        <div class="media-thumb">

                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-7.jpg">

                            <div class="media-desc">

                                <div>

                                    <p>

                                        <b>A Project</b></p>

                                    <div>

                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,

                                        or non-characteristic words etc.</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

                <li class="mix desktop">

                    <div>

                        <div class="media-thumb">

                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-3.jpg">

                            <div class="media-desc">

                                <div>

                                    <p>

                                        <b>A Project</b></p>

                                    <div>

                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,

                                        or non-characteristic words etc.</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

                <li class="mix tablet">

                    <div>

                        <div class="media-thumb">

                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-4.jpg">

                            <div class="media-desc">

                                <div>

                                    <p>

                                        <b>A Project</b></p>

                                    <div>

                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,

                                        or non-characteristic words etc.</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

                <li class="mix tablet">

                    <div>

                        <div class="media-thumb">

                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-5.jpg">

                            <div class="media-desc">

                                <div>

                                    <p>

                                        <b>A Project</b></p>

                                    <div>

                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,

                                        or non-characteristic words etc.</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

                <li class="mix tablet">

                    <div>

                        <div class="media-thumb">

                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-6.jpg">

                            <div class="media-desc">

                                <div>

                                    <p>

                                        <b>A Project</b></p>

                                    <div>

                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,

                                        or non-characteristic words etc.</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

                <li class="mix tablet">

                    <div>

                        <div class="media-thumb">

                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-7.jpg">

                            <div class="media-desc">

                                <div>

                                    <p>

                                        <b>A Project</b></p>

                                    <div>

                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,

                                        or non-characteristic words etc.</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

                <li class="mix phone">

                    <div>

                        <div class="media-thumb">

                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-8.jpg">

                            <div class="media-desc">

                                <div>

                                    <p>

                                        <b>A Project</b></p>

                                    <div>

                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,

                                        or non-characteristic words etc.</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

                <li class="mix tablet">

                    <div>

                        <div class="media-thumb">

                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-9.jpg">

                            <div class="media-desc">

                                <div>

                                    <p>

                                        <b>A Project</b></p>

                                    <div>

                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,

                                        or non-characteristic words etc.</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

                <li class="mix desktop">

                    <div>

                        <div class="media-thumb">

                            <img src="http://www.egrappler.com/meilleur/img/portfolio/place-10.png">

                            <div class="media-desc">

                                <div>

                                    <p>

                                        <b>A Project</b></p>

                                    <div>

                                        The generated Lorem Ipsum is therefore always free from repetition, injected humour,

                                        or non-characteristic words etc.</div>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

            </ul>

        </div>

        <!--end:.mixitup-->

    </div>
@stop

@section('pricing_plans')
    <div id="jump3" class="jumper">
    </div>

    <div class="section type-2">
        <div class="container">
            <div class="section-headlines">
                <h4>{{trans('titulos.Pricing_Plans')}}</h4>
                <h2>{{trans('titulos.Our_Pricing_Packages')}}</h2>
                <div>
                </div>
            </div>
            <div class="pricing-plans row">
                <div class="col-lg-3">
                    <div class="plan radius3">
                        <div class="plan-name">
                            <h2>Beginner</h2>
                            <p class="muted">Simple dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="plan-price">
                            <b>$1</b> / month
                        </div>
                        <div class="plan-details">
                            <div>
                                <span class="icon-remove"></span>&nbsp; <b>Beginner</b> Feature
                            </div>
                            <div>
                                <span class="icon-ok"></span>&nbsp; Feature 2
                            </div>
                            <div>
                                <span class="icon-ok"></span>&nbsp; Paid Support
                            </div>
                        </div>
                        <div class="plan-action">
                            <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a>
                        </div>
                    </div>

                    <div class="visible-xs visible-sm">

                        <br class="gap-30" />

                        <hr class="gap-divider" />

                        <br class="gap-30" />

                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="plan radius3">

                        <div class="plan-name">

                            <h2>

                                Basic</h2>

                            <p class="muted">

                                Simple dummy text of the printing and typesetting industry.</p>

                        </div>

                        <div class="plan-price">

                            <b>$10</b> / month

                        </div>

                        <div class="plan-details">

                            <div>

                                <span class="icon-remove"></span>&nbsp; <b>Basic</b> Feature

                            </div>

                            <div>

                                <span class="icon-ok"></span>&nbsp; <b>Feature</b> Number 2

                            </div>

                            <div>

                                <span class="icon-ok"></span>&nbsp; <b>Free</b> Support

                            </div>

                        </div>

                        <div class="plan-action">

                            <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a>

                        </div>

                    </div>

                    <div class="visible-xs visible-sm">

                        <br class="gap-30" />

                        <hr class="gap-divider" />

                        <br class="gap-30" />

                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="plan plan-featured radius3">

                        <div class="plan-name">

                            <h2>

                                HOT!</h2>

                            <p class="muted">

                                Simple dummy text of the printing and typesetting industry.</p>

                        </div>

                        <div class="plan-price">

                            <b>$15</b> / month

                        </div>

                        <div class="plan-details">

                            <div>

                                <span class="icon-ok"></span>&nbsp; <b>Hot</b> Feature

                            </div>

                            <div>

                                <span class="icon-ok"></span>&nbsp; <b>Awesome</b> Services

                            </div>

                            <div>

                                <span class="icon-ok"></span>&nbsp; <b>Feature</b> No. 3

                            </div>

                        </div>

                        <div class="plan-action">

                            <a href="#" class="btn btn-success btn-block btn-large">Buy</a>

                        </div>

                    </div>

                    <div class="visible-xs visible-sm">

                        <br class="gap-30" />

                        <hr class="gap-divider" />

                        <br class="gap-30" />

                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="plan radius3">

                        <div class="plan-name">

                            <h2>

                                Enterprise</h2>

                            <p class="muted">

                                Simple dummy text of the printing and typesetting industry.</p>

                        </div>

                        <div class="plan-price">

                            <b>$30</b> / month

                        </div>

                        <div class="plan-details">

                            <div>

                                <span class="icon-ok"></span>&nbsp; <b>Awesome</b> Services

                            </div>

                            <div>

                                <span class="icon-ok"></span>&nbsp; <b>Awesome</b> Services

                            </div>

                            <div>

                                <span class="icon-ok"></span>&nbsp; <b>Awesome</b> Services

                            </div>

                        </div>

                        <div class="plan-action">

                            <a href="#" class="btn btn-inverse btn-block btn-large">Buy</a>

                        </div>

                    </div>

                    <div class="visible-xs visible-sm">

                        <br class="gap-30" />

                        <hr class="gap-divider" />

                        <br class="gap-30" />

                    </div>

                </div>

            </div>

            <!--end:.pricing-table-->

        </div>

    </div>
@stop

@section('our_team')
    <div id="jump4" class="jumper">

    </div>

    <div class="section type-3">

        <div class="container">

            <div class="section-headlines">

                <h4>

                    Our Team</h4>

                <h2>

                    We are a small team with lots of friends!</h2>

                <div>

                    It is a long established fact that a reader will be distracted by the readable content

                    of a page when looking at its layout.

                </div>

            </div>

            <div class="row">

                <div class="col-lg-4">

                    <div class="person media">

                        <div class="person-avatar pull-left">

                            <img src="{{asset('themes/meilleur/img/avatar/avatar-1.jpg')}}" class="avatar  img-circle">

                        </div>

                        <div class="media-body">

                            <h4 class="person-name">

                                John Donga</h4>

                            <p class="person-brief muted">

                                Account and Marketing</p>

                            <div class="social-links">

                                <a href="#"><i class="social-icon-twitter"></i></a><a href="#"><i class="social-icon-facebook">

                                </i></a><a href="#"><i class="social-icon-linkedin"></i></a><a href="#"><i class="social-icon-instagram">

                                </i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <!--end:.col-->

                <div class="col-lg-4">

                    <div class="person media">

                        <div class="person-avatar pull-left">

                            <img src="{{asset('themes/meilleur/img/avatar/avatar-2.jpg')}}" class="avatar size-default img-circle">

                        </div>

                        <div class="media-body">

                            <h4 class="person-name">

                                Julia Donga</h4>

                            <p class="person-brief muted">

                                Strateg and Photography</p>

                            <div class="social-links">

                                <a href="#"><i class="social-icon-twitter"></i></a><a href="#"><i class="social-icon-facebook">

                                </i></a><a href="#"><i class="social-icon-linkedin"></i></a><a href="#"><i class="social-icon-instagram">

                                </i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <!--end:.col-->

                <div class="col-lg-4">

                    <div class="person media">

                        <div class="person-avatar pull-left">

                            <img src="{{asset('themes/meilleur/img/avatar/avatar-2.jpg')}}" class="avatar size-default img-circle">

                        </div>

                        <div class="media-body">

                            <h4 class="person-name">

                                Julia Donga</h4>

                            <p class="person-brief muted">

                                Strateg and Photography</p>

                            <div class="social-links">

                                <a href="#"><i class="social-icon-twitter"></i></a><a href="#"><i class="social-icon-facebook">

                                </i></a><a href="#"><i class="social-icon-linkedin"></i></a><a href="#"><i class="social-icon-instagram">

                                </i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <!--end:.col-->

            </div>

            <!--end:.row-->

            <br>

            <br>

            <br>

            <div class="row">

                <div class="col-lg-4">

                    <div class="person media">

                        <div class="person-avatar pull-left">

                            <img src="{{asset('themes/meilleur/img/avatar/avatar-1.jpg')}}" class="avatar  img-circle">

                        </div>

                        <div class="media-body">

                            <h4 class="person-name">

                                John Donga</h4>

                            <p class="person-brief muted">

                                Account and Marketing</p>

                            <div class="social-links">

                                <a href="#"><i class="social-icon-twitter"></i></a><a href="#"><i class="social-icon-facebook">

                                </i></a><a href="#"><i class="social-icon-linkedin"></i></a><a href="#"><i class="social-icon-instagram">

                                </i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <!--end:.col-->

                <div class="col-lg-4">

                    <div class="person media">

                        <div class="person-avatar pull-left">

                            <img src="{{asset('themes/meilleur/img/avatar/avatar-1.jpg')}}" class="avatar size-default img-circle">

                        </div>

                        <div class="media-body">

                            <h4 class="person-name">

                                Julia Donga</h4>

                            <p class="person-brief muted">

                                Strateg and Photography</p>

                            <div class="social-links">

                                <a href="#"><i class="social-icon-twitter"></i></a><a href="#"><i class="social-icon-facebook">

                                </i></a><a href="#"><i class="social-icon-linkedin"></i></a><a href="#"><i class="social-icon-instagram">

                                </i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <!--end:.col-->

                <div class="col-lg-4">

                    <div class="person media">

                        <div class="person-avatar pull-left">

                            <img src="{{asset('themes/meilleur/img/avatar/avatar-2.jpg')}}" class="avatar size-default img-circle">

                        </div>

                        <div class="media-body">

                            <h4 class="person-name">

                                Julia Donga</h4>

                            <p class="person-brief muted">

                                Strateg and Photography</p>

                            <div class="social-links">

                                <a href="#"><i class="social-icon-twitter"></i></a><a href="#"><i class="social-icon-facebook">

                                </i></a><a href="#"><i class="social-icon-linkedin"></i></a><a href="#"><i class="social-icon-instagram">

                                </i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <!--end:.col-->

            </div>

            <!--end:.row-->

        </div>

        <!--end:.container-->

    </div>
@stop

@section('testimonial')
    <div id="jump5" class="jumper">

    </div>

    <div class="section type-2">

        <div class="container">

            <div class="section-headlines">

                <h4>

                    Testimonials</h4>

                <h2>

                    Read our clients talking about us!</h2>

                <div>

                    We worked on digital strategies for 200 brands worldwide.

                </div>

            </div>

            <div id="carousel-testimonial" class="carousel slide bs-docs-carousel-example">

                <ol class="carousel-indicators">

                    <li data-target="#carousel-testimonial" data-slide-to="0" class=""></li>

                    <li data-target="#carousel-testimonial" data-slide-to="1" class=""></li>

                    <li data-target="#carousel-testimonial" data-slide-to="2" class=""></li>

                </ol>

                <div class="carousel-inner">

                    <div class="item active">

                        <div class="testimonial media">

                            <div class="testimonial-avatar pull-right hidden-xs ">

                                <img src="{{asset('themes/meilleur/img/avatar/avatar-2.jpg')}}" class="avatar size-default img-circle">

                            </div>

                            <div class="testimonial-content media-body">

                                <p class="lead">

                                    It is a long established fact that a reader will be distracted by the readable content

                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it

                                    has a more-or-less normal distribution of letters, as opposed to using 'Content

                                    here, content here', making it look like readable English.

                                </p>

                                Founder at EGrappler.com - <b>John Donga</b>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="testimonial media">

                            <div class="testimonial-avatar pull-right hidden-xs ">

                                <img src="{{asset('themes/meilleur/img/avatar/avatar-3.jpg')}}" class="avatar size-default img-circle">

                            </div>

                            <div class="testimonial-content media-body">

                                <p class="lead">

                                    It is a long established fact that a reader will be distracted by the readable content

                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it

                                    has a more-or-less normal distribution of letters, as opposed to using 'Content

                                    here, content here', making it look like readable English.

                                </p>

                                Founder at Greepit.com - <b>John Donga</b>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="testimonial media">

                            <div class="testimonial-avatar pull-right hidden-xs ">

                                <img src="{{asset('themes/meilleur/img/avatar/avatar-2.jpg')}}" class="avatar size-default img-circle">

                            </div>

                            <div class="testimonial-content media-body">

                                <p class="lead">

                                    It is a long established fact that a reader will be distracted by the readable content

                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it

                                    has a more-or-less normal distribution of letters, as opposed to using 'Content

                                    here, content here', making it look like readable English.

                                </p>

                                Founder at EGrappler.com - <b>John Donga</b>

                            </div>

                        </div>

                    </div>

                    <div class="item">

                        <div class="testimonial media">

                            <div class="testimonial-avatar pull-right hidden-xs ">

                                <img src="{{asset('themes/meilleur/img/avatar/avatar-1.jpg')}}" class="avatar size-default img-circle">

                            </div>

                            <div class="testimonial-content media-body">

                                <p class="lead">

                                    It is a long established fact that a reader will be distracted by the readable content

                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it

                                    has a more-or-less normal distribution of letters, as opposed to using 'Content

                                    here, content here', making it look like readable English.

                                </p>

                                Founder at EGrappler.com - <b>John Donga</b>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="carousel-controller btn-group">

                    <a class="btn btn-xs btn-inverse" href="#carousel-testimonial" data-slide="prev"><i

                        class="icon-angle-left"></i></a><a class="btn btn-xs btn-inverse" href="#carousel-testimonial"

                            data-slide="next"><i class="icon-angle-right"></i></a>

                </div>

            </div>

        </div>

    </div>
@stop

@section('contact_us')
<div id="jump6" class="jumper">
</div>

<div class="section type-1 section-contact">
    <div class="container">
        <div class="section-headlines">
            <h4>{{trans('titulos.Contact_Us')}}</h2>
            <h2>{{trans('titulos.have_a_coffee')}}</h2>
        </div>
            <div class="row">
                <div class="col-lg-2">
                    	<!--a<address>				
							<div class="address-row">
                    			<div class="address-sign">
                      				<i class="icon-map-marker"></i>
                       			</div>
                       			<div style="address-info">
                        			<b>Oficina</b>,<br>
									 Dirección: Calle 5 Norte. No 18A - 122 Bambusa Plaza | Armenia, Quindío CO.<br>
							     	 Telefono Fijo: +57 6-7482760 <br>
 								 	 Móvil: +57 3174399301 <br>
 							    	 E-mail: info@rhiss.net <br>
                        		</div>
                     		</div>	
							<div class="address-row">
                            	<div class="address-sign">
                                	<i class="icon-map-marker"></i>
                            	</div>
                            	<div style="address-info">
									<b>Horario de Atención</b><br>
									Lunes a Viernes: 8:00am a 12:00m y 2:00pm a 6:00pm<br>
	 								Sábados: 8:00 am a 12:00 pm<br>
 									Domingos y Festivos: info@rhiss.net
                                </div>
                        	</div>
                    	</address>-->
                    <div class="visible-xs visible-sm">
                        <br class="gap-30" />
                        <hr class="gap-divider" />
                        <br class="gap-30" />
                    </div>
                </div>
                <div class="col-lg-7 col-lg-offset-1">
                    <form role="form" method="post" action="#" id="frmContact">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{trans('formulario.Your_Name')}} *"><br class="gap-15" />
                                    <label for="name" id="name-error"></label>
                                    <br class="gap-15" />
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="{{trans('formulario.Your_Email')}} *">
                                    <label for="email" id="email-error"></label>
                                </div>                                    
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="{{trans('formulario.Subject')}}">
                            <label for="subject" id="subject-error"></label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="8"></textarea>
                            <label for="message" id="message-error"></label>
                        </div>
                        <button id="button-send" class="btn btn-block btn-success">
                            
                        </button>
                        <div id="success">
                           {{trans('formulario.Success')}}
                        </div>
                        <div id="error">
                            {{trans('formulario.Error')}}
                        </div>
                        <input type="hidden" id="btnSending" value="{{trans('formulario.Sending_E_mail')}}">
                        <input type="hidden" id="btnSend" value="{{trans('formulario.Send_E_mail')}}">
                    </form>
                </div>
            </div>
    </div>
</div>
@stop
