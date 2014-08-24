@extends('themes.educativo-page.layout.index')

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
                    <img class="img-responsive" src="{{asset('themes/educativo-page/img/dog.png')}}" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
@stop()

@section('cuenta_profesor')
<div class="content-section-a" id="jump2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{trans('titulos.account_teacher')}}</h2>
                    <ul>
                        <li>{{trans('caracteristicas.Manage_students_class_group_wise')}}</li>
                        <li>{{trans('caracteristicas.Add_edit_delete_student')}}</li>
                        <li>{{trans('caracteristicas.View_profile_of_students')}}</li>
                        <li>{{trans('caracteristicas.View_marksheet_of_sudent')}}</li>
                        <li>{{trans('caracteristicas.View_ID_card_of_student')}}</li>
                        <li>{{trans('caracteristicas.View_teacher_profile')}}</li>
                        <li>{{trans('caracteristicas.Manage_Daily_Attendance')}}</li>
                        <li>{{trans('caracteristicas.Create_edit_delete_subjects_here_from_subject_menu')}}</li>
                        <li>{{trans('caracteristicas.Subjects_can_be_defined_seperately_according_to_each_classes')}}</li>
                        <li>{{trans('caracteristicas.Manage_exam_semester_listing')}}</li>
                        <li>{{trans('caracteristicas.Manage_marks_edit_update_and_attendance_exam_class_student_wise')}}</li>
                        <li>{{trans('caracteristicas.View_class_routine')}}</li>
                        <li>{{trans('caracteristicas.View_library_and_book_status')}}</li>
                        <li>{{trans('caracteristicas.View_school_transportation_routes_status')}}</li>
                        <li>{{trans('caracteristicas.View_edit_noticeboard_or_school_events')}}</li>
                        <li>{{trans('caracteristicas.Create_backup_and_restore_anytime')}}</li>
                        <li>{{trans('caracteristicas.manage_own_profile')}}</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="http://presentatenlaweb.nightzpy.com:8080/themes/educativo-page/img/ipad.png" alt="" pagespeed_url_hash="1068595440">
                </div>
            </div>
        </div>
       <!-- /.container -->
    </div>
@stop

@section('cuenta_estudiante')
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{trans('titulos.account_student')}}</h2>
                    <ul>
                        <li>{{trans('caracteristicas.View_teacher_profile')}}</li>
                        <li>{{trans('caracteristicas.View_own_class_subjects')}}</li>
                        <li>{{trans('caracteristicas.View_own_marks_and_attendances')}}</li>
                        <li>{{trans('caracteristicas.View_class_routine')}}</li>
                        <li>{{trans('caracteristicas.View_invoice_and_payment_list')}}</li>
                        <li>{{trans('caracteristicas.Make_online_or_offline_payment')}}</li>
                        <li>{{trans('caracteristicas.Online_payment_can_be_paid_via_[paypal]')}}</li>
                        <li>{{trans('caracteristicas.View_library_and_book_status')}}</li>
                        <li>{{trans('caracteristicas.View_school_transportaion_and_routes_status')}}</li>
                        <li>{{trans('caracteristicas.View_dormitory_listing_and_their_status')}}</li>
                        <li>{{trans('caracteristicas.View_noticeboard_and_school_events_in_calendar')}}</li>
                        <li>{{trans('caracteristicas.Manage_own_profile')}}</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="http://presentatenlaweb.nightzpy.com:8080/themes/educativo-page/img/xdog.png.pagespeed.ic.Ga_lvw8zSc.png" alt="" pagespeed_url_hash="473355468">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
@stop

@section('cuenta_representante')
    <div class="content-section-a" id="jump2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{trans('titulos.account_parent')}}</h2>
                    <ul>
                        <li>{{trans('caracteristicas.View_teacher_profile')}}</li>
                        <li>{{trans('caracteristicas.View_own_childs_marks_and_attendances_and_other_comments_from_teacher')}}</li>
                        <li>{{trans('caracteristicas.View_own_childs_class_routine')}}</li>
                        <li>{{trans('caracteristicas.View_own_childs_invoice_and_payment_list')}}</li>
                        <li>{{trans('caracteristicas.Make_online_or_offline_payment')}}</li>
                        <li>{{trans('caracteristicas.Online_payment_can_be_paid_via_[paypal]')}}</li>
                        <li>{{trans('caracteristicas.View_library_and_book_status')}}</li>
                        <li>{{trans('caracteristicas.View_school_transportaion_and_routes_status')}}</li>
                        <li>{{trans('caracteristicas.View_noticeboard_and_school_events_in_calendar')}}</li>
                        <li>{{trans('caracteristicas.Manage_own_profile')}}</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="http://presentatenlaweb.nightzpy.com:8080/themes/educativo-page/img/xipad.png.pagespeed.ic.Hj9CKpLnDh.png" alt="" pagespeed_url_hash="1068595440">
                </div>
            </div>
        </div>
       <!-- /.container -->
    </div>
@stop()

@section('elegir_idioma')
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{trans('titulos.Convert_to_your_language')}}</h2>
                    <p class="lead">{{trans('caracteristicas.Converting_the_software_to_your_native_language_is_so_easy_Follow_these_steps')}}</p>
                    <ul>
                        <li>{{trans('caracteristicas.Login_to_administrative_panel')}}</li>
                        <li>{{trans('caracteristicas.Go_to_settings_manage_language')}}</li>
                        <li>{{trans('caracteristicas.You_can_add_delete_any_language_to_the_database')}}</li>
                        <li>{{trans('caracteristicas.Update_the_default_phrases_into_your_language_and_save_it')}}</li>
                        <li>{{trans('caracteristicas.Simply_and_easily_make_the_software_your_native')}}</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="http://presentatenlaweb.nightzpy.com:8080/themes/educativo-page/img/xdog.png.pagespeed.ic.Ga_lvw8zSc.png" alt="" pagespeed_url_hash="473355468">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
@stop()

@section('importar_paquete_de_idioma')
    <div class="content-section-a" id="jump2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{trans('titulos.Import_language_pack')}}</h2>
                    <p class="lead">{{trans('caracteristicas.From_version_there_are_20_language_pack_available_Follow_these_steps_to_import_language_pac')}}</p>
                    <ul>
                        <li>{{trans('caracteristicas.')}}</li>
                        <li>{{trans('caracteristicas.Login_to_phpmyadmin')}}</li>
                        <li>{{trans('caracteristicas.Go_to_your_database_where_you_have_installed_this_script')}}</li>
                        <li>{{trans('caracteristicas.Go_to_import_menu_in_right_side')}}</li>
                        <li>{{trans('caracteristicas.Upload_the_language_sql_file_from_uploads_directory_and_import_it')}}</li>
                        <li>{{trans('caracteristicas.You_will_see_20_language_pack_is_installed_in_your_admin_panel')}}</li>
                        <li>{{trans('caracteristicas.Simply_and_easily_make_the_software_your_native')}}</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="http://presentatenlaweb.nightzpy.com:8080/themes/educativo-page/img/xipad.png.pagespeed.ic.Hj9CKpLnDh.png" alt="" pagespeed_url_hash="1068595440">
                </div>
            </div>
        </div>
       <!-- /.container -->
    </div>
@stop()

@section('alineacion_de_texto')
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{trans('titulos.Right_To_Left_text_align_option')}}</h2>
                    <p class="lead">{{trans('caracteristicas.Text_alignment_can_be_changed_from_adminpanel_settings_menu')}}</p>
                    <ul>
                        <li>{{trans('caracteristicas.Login_to_admin')}}</li>
                        <li>{{trans('caracteristicas.Go_to_your_settings_menu_general_settings')}}</li>
                        <li>{{trans('caracteristicas.Select_text_align_option_as_you_needed')}}</li>
                        <li>{{trans('caracteristicas.Save_settings_and_you_will_see_the_text_alignment_as_you_have_selected_changed')}}</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="http://presentatenlaweb.nightzpy.com:8080/themes/educativo-page/img/xdog.png.pagespeed.ic.Ga_lvw8zSc.png" alt="" pagespeed_url_hash="473355468">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
@stop()

