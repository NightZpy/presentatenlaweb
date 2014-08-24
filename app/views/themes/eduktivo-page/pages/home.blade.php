@extends('themes.eduktivo-page.layout.default')

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
                	<img class="img-responsive" src="{{asset('themes/eduktivo-page/img/ipad.png')}}" alt="">
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
                    <h2 class="section-heading">{{trans('titulos.account_administrator')}}</h2>
					<ul>
						<li>{{trans('caracteristicas.manage_students_class_group_wise')}}</li>
						<li>{{trans('caracteristicas.add_edit_delete_student')}}</li>
						<li>{{trans('caracteristicas.view_profile_of_students')}}</li>
						<li>{{trans('caracteristicas.view_marksheet_of_sudent')}}</li>
						<li>{{trans('caracteristicas.view_ID_card_of_student')}}</li>
						<li>{{trans('caracteristicas.Manage_teacher_profile')}}</li>
						<li>{{trans('caracteristicas.Add_edit_delete_teacher_information')}}</li>
                        <li>{{trans('caracteristicas.Manage_parent_according_to_student_classwise')}}</li>
						<li>{{trans('caracteristicas.Create_edit_delete_parent_information')}}</li>
                        <li>{{trans('caracteristicas.Create_edit_delete_class_group_for_students')}}</li>
						<li>{{trans('caracteristicas.Create_edit_delete_subjects_here_from_subject_menu')}}</li>
                        <li>{{trans('caracteristicas.Subjects_can_be_defined_seperately_according_to_each_classes')}}</li>
						<li>{{trans('caracteristicas.Manage_exam_semester_listing')}}</li>
                        <li>{{trans('caracteristicas.Manage_marks_edit_update_and_attendance_exam_class_student_wise')}}</li>
						<li>{{trans('caracteristicas.Manage_exam_grades')}}</li>
                       	<li>{{trans('caracteristicas.Manage_class_routine')}}</li>
						<li>{{trans('caracteristicas.Create_edit_delete_class_routine_schedule_on_7days_a_week')}}</li>
                        <li>{{trans('caracteristicas.Manage_payment_for_student')}}</li>
						<li>{{trans('caracteristicas.Create_edit_delete_invoice_listing')}}</li>
                        <li>{{trans('caracteristicas.View_invoice_and_print_them')}}</li>
						<li>{{trans('caracteristicas.Manage_library')}}</li>
                        <li>{{trans('caracteristicas.Create_edit_delete_booklist')}}</li>
						<li>{{trans('caracteristicas.Manage_transportation_routes_for_school')}}</li>
                        <li>{{trans('caracteristicas.Manage_dormitory_listing_for_school')}}</li>
						<li>{{trans('caracteristicas.Manage_noticeboard_of_school')}}</li>
                        <li>{{trans('caracteristicas.Create_edit_delete_notices_according_to_date')}}</li>
						
						<li>{{trans('caracteristicas.Notices_are_visible_in_calendar_in_dashboard')}}</li>
                        <li>{{trans('caracteristicas.Edit_system_settings')}}</li>
                        <li>{{trans('caracteristicas.Paypal_email_in_system_settings_is_paypal_payment_gateway_for_student_invoice_online_payments')}}</li>
                        <li>{{trans('caracteristicas.Manage_language_of_the_software')}}</li>
                        <li>{{trans('caracteristicas.Create_your_own_language_and_convert_the_language_phrases_easily')}}</li>
                        <li>{{trans('caracteristicas.Create_backup_and_restore_anytime')}}</li>
                        <li>{{trans('caracteristicas.Manage_own_profile')}}</li>
                        <li>{{trans('caracteristicas.Access_account_from_anywhere_by_any_device_like_desktop_laptop_smartphone_and_tablet')}}</li>		
					</ul>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="{{asset('themes/eduktivo-page/img/dog.png')}}" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>  
@stop()

@section('solicitar')
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-11 col-sm-offset-1 col-sm-11">
                    <form class="form-inline" role="form">
                        <input type="hidden" name="software_id" value="eduktivo">  
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                <input class="form-control input-lg" type="text" id="name" name="name" placeholder="Ingresar nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="icon-envelope"></i></div>
                                <input class="form-control input-lg" type="email" id="email" name="email" placeholder="Ingresar e-mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-phone"></i></span>
                                <input class="form-control input-lg" type="phone" id="phone" name="phone" placeholder="Ingresar teléfono">
                            </div>
                        </div>                                                              
                        <div class="form-group">
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary btn-lg pull-right"><i class="icon-check"></i>Solicitar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>  
@stop()
