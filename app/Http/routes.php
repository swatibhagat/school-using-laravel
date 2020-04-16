<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
|---------------------------------------------------
|Admin Controller
|---------------------------------------------------
*/
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/login', 'Admin\AdminController@login');
Route::post('/admin/dologin', 'Admin\AdminController@doLogin');
Route::get('/admin/logout', 'Admin\AdminController@logout');

/*
|---------------------------------------------------
|Settings Controller
|---------------------------------------------------
*/
Route::get('/institute', 'Admin\AdminController@institute');
Route::post('/institute/save', 'Admin\AdminController@save_institute');

Route::get('/academic', 'Admin\AdminController@academicyear');
Route::get('/academic/add', 'Admin\AdminController@save_academicyear');
Route::post('/academic/create', 'Admin\AdminController@create_institute');
Route::get('/academic/delete/{id}', 'Admin\AdminController@delete_academicyear');

/*-------------------------Acadamic-------------------------------*/
Route::get('/batch', 'Admin\AdminController@batch');
Route::get('/batch/add', 'Admin\AdminController@save_batch');
Route::post('/batch/create', 'Admin\AdminController@create_batch');
Route::get('/batch/edit/{id}', 'Admin\AdminController@edit_batch');
Route::post('/batch/edit/update', 'Admin\AdminController@update_batch');
Route::get('/batch/delete/{id}', 'Admin\AdminController@delete_batch');


Route::get('/course', 'Admin\AdminController@course');
Route::get('/course/add', 'Admin\AdminController@save_course');
Route::post('/course/create', 'Admin\AdminController@create_course');
Route::get('/course/edit/{id}', 'Admin\AdminController@edit_course');
Route::post('/course/edit/update', 'Admin\AdminController@update_course');
Route::get('/course/delete/{id}', 'Admin\AdminController@delete_course');

Route::get('/teacher_allocate','Admin\AdminController@teacher_allocate');
Route::get('/teacher_allocate/add', 'Admin\AdminController@save_teacher_allocate');
Route::post('/teacher_allocate/create', 'Admin\AdminController@create_teacher_allocate');
Route::get('/teacher_allocate/edit/{id}', 'Admin\AdminController@edit_teacher_allocate');
Route::post('/teacher_allocate/edit/update', 'Admin\AdminController@update_teacher_allocate');
Route::get('/teacher_allocate/delete/{id}', 'Admin\AdminController@delete_teacher_allocate');
Route::get('/teacher_allocate/select_section_teacher/{id}', 'Admin\AdminController@select_section_teacher');
Route::get('/teacher_allocate/edit/select_section_edit_teacher/{id}', 'Admin\AdminController@select_section_edit_teacher');

/*---------------------------employee ------------------------------------------*/
/*employee type*/
Route::get('/employee_type', 'Admin\EmployeeController@employee_type');
Route::get('/employee_type/add', 'Admin\EmployeeController@save_employee_type');
Route::post('/employee_type/create', 'Admin\EmployeeController@create_employee_type');
Route::get('/employee_type/delete/{id}', 'Admin\EmployeeController@delete_employee_type');
Route::get('/employee_type/edit/{id}', 'Admin\EmployeeController@edit_employee_type');
Route::post('/employee_type/edit/update', 'Admin\EmployeeController@update_employee_type');

/*employee department*/
Route::get('/employee_dept', 'Admin\EmployeeController@employee_dept');
Route::get('/employee_dept/add', 'Admin\EmployeeController@save_employee_dept');
Route::post('/employee_dept/create', 'Admin\EmployeeController@create_employee_dept');
Route::get('/employee_dept/delete/{id}', 'Admin\EmployeeController@delete_employee_dept');
Route::get('/employee_dept/edit/{id}', 'Admin\EmployeeController@edit_employee_dept');
Route::post('/employee_dept/edit/update', 'Admin\EmployeeController@update_employee_dept');


/*employee Designation*/
Route::get('/employee_designation', 'Admin\EmployeeController@employee_desi');
Route::get('/employee_designation/add', 'Admin\EmployeeController@save_employee_desi');
Route::post('/employee_designation/create', 'Admin\EmployeeController@create_employee_desi');
Route::get('/employee_designation/delete/{id}', 'Admin\EmployeeController@delete_employee_desi');
Route::get('/employee_designation/edit/{id}', 'Admin\EmployeeController@edit_employee_desi');
Route::post('/employee_designation/edit/update', 'Admin\EmployeeController@update_employee_desi');

/* employee_detail*/
Route::get('/employee_detail', 'Admin\EmployeeController@employee_detail');
Route::get('/employee_detail/add', 'Admin\EmployeeController@save_employee_detail');
Route::post('/employee_detail/create', 'Admin\EmployeeController@create_employee_detail');
Route::get('/employee_detail/delete/{id}', 'Admin\EmployeeController@delete_employee_detail');
Route::get('/employee_detail/edit/{id}', 'Admin\EmployeeController@edit_employee_detail');
Route::post('/employee_detail/edit/update', 'Admin\EmployeeController@update_employee_detail');

/*Bank*/
Route::get('/bank', 'Admin\EmployeeController@bank');
Route::get('/bank/add', 'Admin\EmployeeController@save_bank');
Route::post('/bank/create', 'Admin\EmployeeController@create_bank');
Route::get('/bank/delete/{id}', 'Admin\EmployeeController@delete_bank');

/*Employee Bank Details*/
Route::get('/emplyoyee_bank', 'Admin\EmployeeController@emplyoyee_bank');
Route::get('/emplyoyee_bank/add', 'Admin\EmployeeController@save_emplyoyee_bank');
Route::post('/emplyoyee_bank/create', 'Admin\EmployeeController@create_emplyoyee_bank');
Route::get('/emplyoyee_bank/delete/{id}', 'Admin\EmployeeController@delete_emplyoyee_bank');
Route::get('/emplyoyee_bank/get_employee_code/{id}', 'Admin\EmployeeController@get_employee_code');
Route::get('/emplyoyee_bank/get_employee_name/{id}', 'Admin\EmployeeController@get_employee_name');

/*Employee Attendance*/
Route::get('/emplyoyee_daily_attendance', 'Admin\EmployeeController@emplyoyee_daily_attendance');
Route::get('/emplyoyee_daily_attendance/select/{id}', 'Admin\EmployeeController@emplyoyee_select_attendance');
Route::get('/taking_attendance/take/{id}', 'Admin\EmployeeController@taking_attendance');

/*View Employee Attendance*/
Route::get('/view_employee_attendance', 'Admin\EmployeeController@view_employee_attendance');
Route::get('/view_daily_attendance/select/{id}', 'Admin\EmployeeController@view_daily_attendance');



/*------------------------------transport --------------------------------------*/
/*transport vehicle */
Route::get('/vehicle', 'Admin\TransportController@transport_vehicle');
Route::get('/vehicle/add', 'Admin\TransportController@save_transport_vehicle');
Route::post('/vehicle/create', 'Admin\TransportController@create_transport_vehicle');
Route::get('/vehicle/delete/{id}', 'Admin\TransportController@delete_transport_vehicle');
Route::get('/vehicle/edit/{id}', 'Admin\TransportController@edit_transport_vehicle');
Route::post('/vehicle/edit/update', 'Admin\TransportController@update_transport_vehicle');

/*transport driver */
Route::get('/driver', 'Admin\TransportController@transport_driver');
Route::get('/driver/add', 'Admin\TransportController@save_transport_driver');
Route::post('/driver/create', 'Admin\TransportController@create_transport_driver');
Route::get('/driver/delete/{id}', 'Admin\TransportController@delete_transport_driver');
Route::get('/driver/edit/{id}', 'Admin\TransportController@edit_transport_driver');
Route::post('/driver/edit/update', 'Admin\TransportController@update_transport_driver');

/*transport route */
Route::get('/route', 'Admin\TransportController@transport_route');
Route::get('/route/add', 'Admin\TransportController@save_transport_route');
Route::post('/route/create', 'Admin\TransportController@create_transport_route');
Route::get('/route/delete/{id}', 'Admin\TransportController@delete_transport_route');
Route::get('/route/edit/{id}', 'Admin\TransportController@edit_transport_route');
Route::post('/route/edit/update', 'Admin\TransportController@update_transport_route');

/*transport destination fees */
Route::get('/destination_fee', 'Admin\TransportController@transport_destination_fee');
Route::get('/destination_fee/add', 'Admin\TransportController@save_transport_destination_fee');
Route::post('/destination_fee/create', 'Admin\TransportController@create_transport_destination_fee');
Route::get('/destination_fee/delete/{id}', 'Admin\TransportController@delete_transport_destination_fee');
Route::get('/destination_fee/edit/{id}', 'Admin\TransportController@edit_transport_destination_fee');
Route::post('/destination_fee/edit/update', 'Admin\TransportController@update_transport_destination_fee');

/*transport allocation */
Route::get('/transport_allocation', 'Admin\TransportController@transport_allocation');
Route::get('/transport_allocation/add', 'Admin\TransportController@save_transport_allocation');
Route::post('/transport_allocation/create', 'Admin\TransportController@create_transport_allocation');
Route::get('/transport_allocation/delete/{id}', 'Admin\TransportController@delete_transport_allocation');
Route::get('/transport_allocation/edit/{id}', 'Admin\TransportController@edit_transport_allocation');
Route::post('/transport_allocation/edit/update', 'Admin\TransportController@update_transport_allocation');


/*------------------------Change Controller-----------------------------------------------------------------*/
/*-----------------------------------Suject----------------------------------------*/
/*Subject */
Route::get('/subject', 'Admin\SubjectController@subject');
Route::get('/subject/add', 'Admin\SubjectController@save_subject');
Route::post('/subject/create', 'Admin\SubjectController@create_subject');
Route::get('/subject/delete/{id}', 'Admin\SubjectController@delete_subject');
Route::get('/subject/edit/{id}', 'Admin\SubjectController@edit_subject');
Route::post('/subject/edit/update', 'Admin\SubjectController@update_subject');


/*Assign Subject */
Route::get('/assign_subject', 'Admin\SubjectController@assign_subject');
Route::get('/assign_subject/add', 'Admin\SubjectController@save_assign_subject');
Route::post('/assign_subject/create', 'Admin\SubjectController@create_assign_subject');
Route::get('/assign_subject/delete/{id}', 'Admin\SubjectController@delete_assign_subject');
Route::get('/assign_subject/edit/{id}', 'Admin\SubjectController@edit_assign_subject');
Route::post('/assign_subject/edit/update', 'Admin\SubjectController@update_assign_subject');
Route::get('/assign_subject/select_section/{id}', 'Admin\SubjectController@select_section');
Route::get('/assign_subject/edit/select_section_edit/{id}', 'Admin\SubjectController@select_section_edit');

/*Subject Allocation*/
Route::get('/subject_allocation', 'Admin\SubjectController@subject_allocation');
Route::get('/subject_allocation/select_dept_employee/{id}', 'Admin\SubjectController@select_dept_employee');
Route::get('/subject_allocation/add', 'Admin\SubjectController@save_subject_allocation');
Route::post('/subject_allocation/create', 'Admin\SubjectController@create_subject_allocation');
Route::get('/subject_allocation/delete/{id}', 'Admin\SubjectController@delete_subject_allocation');
Route::get('/subject_allocation/edit/{id}', 'Admin\SubjectController@edit_subject_allocation');
Route::get('/subject_allocation/edit/select_dept_employee/{id}', 'Admin\SubjectController@select_dept_employee');
Route::post('/subject_allocation/edit/update', 'Admin\SubjectController@update_subject_allocation');
Route::get('/subject_allocation/select_section_for_allocation/{id}', 'Admin\SubjectController@select_section_for_allocation');
Route::get('/subject_allocation/fetch_allocated_subject/{id}', 'Admin\SubjectController@fetch_allocated_subject');
Route::get('/subject_allocation/edit/fetch_allocated_subject/{id}', 'Admin\SubjectController@fetch_allocated_subject');
Route::get('/subject_allocation/edit/select_section_edit_for_allocation/{id}', 'Admin\SubjectController@select_section_edit_for_allocation');



/**-----------------------------Student -------------------------------------------------*/
/*Student Category */
Route::get('/student_category', 'Admin\StudentController@student_category');
Route::get('/student_category/add', 'Admin\StudentController@save_student_category');
Route::post('/student_category/create', 'Admin\StudentController@create_student_category');
Route::get('/student_category/delete/{id}', 'Admin\StudentController@delete_student_category');
Route::get('/student_category/edit/{id}', 'Admin\StudentController@edit_student_category');
Route::post('/student_category/edit/update', 'Admin\StudentController@update_student_category');

/*Student Registration */
Route::get('/student_registration', 'Admin\StudentController@student_registration');
Route::get('/student_registration/add', 'Admin\StudentController@save_student_registration');
Route::post('/student_registration/create', 'Admin\StudentController@create_student_registration');
Route::get('/student_registration/delete/{id}', 'Admin\StudentController@delete_student_registration');
Route::get('/student_registration/edit/{id}', 'Admin\StudentController@edit_student_registration');
Route::get('/student_registration/select_section_for_reg/{id}', 'Admin\StudentController@select_section_for_reg');

/*Parents Registration */
Route::get('/parent_registration', 'Admin\StudentController@parent_registration');
Route::get('/parent_registration/view/{id}', 'Admin\StudentController@view_parent_registration');

/*Roll Number*/
Route::get('/roll_number_allote', 'Admin\StudentController@roll_number_allote');
Route::get('/select_roll_number_allote/{id}', 'Admin\StudentController@select_roll_number_allote');
Route::get('/allote_roll_nuber/{id}', 'Admin\StudentController@allote_roll_nuber');
Route::get('/select_section_roll/{id}', 'Admin\StudentController@select_section_roll');

/*Student Attendance*/
Route::get('/student_attendance', 'Admin\StudentController@student_attendance');
Route::get('/select_section/{id}', 'Admin\StudentController@select_section');
Route::get('/student_display/{id}', 'Admin\StudentController@student_display');
Route::get('/take_attendance/{id}', 'Admin\StudentController@take_attendance');




/*fee category*/
Route::get('/fee_category', 'Admin\FeesController@fee_category');
Route::get('/fee_category/add', 'Admin\FeesController@save_fee_category');
Route::post('/fee_category/create', 'Admin\FeesController@create_fee_category');
Route::get('/fee_category/delete/{id}', 'Admin\FeesController@delete_fee_category');
Route::get('/fee_category/edit/{id}', 'Admin\FeesController@edit_fee_category');
Route::post('/fee_category/edit/update', 'Admin\FeesController@update_fee_category');

/*fee category*/
Route::get('/fee_sub_category', 'Admin\FeesController@fee_sub_category');
Route::get('/fee_sub_category/add', 'Admin\FeesController@save_fee_sub_category');
Route::post('/fee_sub_category/create', 'Admin\FeesController@create_fee_sub_category');
Route::get('/fee_sub_category/delete/{id}', 'Admin\FeesController@delete_fee_sub_category');
Route::get('/fee_sub_category/edit/{id}', 'Admin\FeesController@edit_fee_sub_category');
Route::post('/fee_sub_category/edit/update', 'Admin\FeesController@update_fee_sub_category');

/*fee Allocation*/
Route::get('/fee_allocation', 'Admin\FeesController@fee_allocation');
Route::get('/fee_allocation/add', 'Admin\FeesController@save_fee_allocation');
Route::get('/fee_allocation/select_batch_for_allocation/{id}', 'Admin\FeesController@select_batch_for_allocation');
Route::post('/fee_allocation/create', 'Admin\FeesController@create_fee_allocation');
Route::get('/fee_allocation/delete/{id}', 'Admin\FeesController@delete_fee_allocation');
Route::get('/fee_allocation/edit/{id}', 'Admin\FeesController@edit_fee_allocation');
Route::post('/fee_allocation/edit/update', 'Admin\FeesController@update_fee_allocation');
Route::get('/fee_allocation/edit/select_section_edit_allocation/{id}', 'Admin\FeesController@select_section_edit_allocation');

/*fee collection*/
Route::get('/fee_collection', 'Admin\FeesController@fee_collection');
Route::get('/select_batch/{id}', 'Admin\FeesController@select_batch');
Route::get('/select_student/{id}', 'Admin\FeesController@select_student');
Route::get('/fetch_fee_sub_category', 'Admin\FeesController@fetch_fee_sub_category');
Route::post('/submit_fee', 'Admin\FeesController@submit_fee');

/*-------------------------------------Time Table----------------------------------------*/


Route::get('/create_time_table', 'Admin\TimeTableController@create_time_table');
Route::get('/select_section_for_allocation/{id}', 'Admin\TimeTableController@select_section_for_allocation');
Route::get('/select_subject/{id}', 'Admin\TimeTableController@select_subject');
Route::get('/select_teacher/{id}', 'Admin\TimeTableController@select_teacher');
Route::post('/create', 'Admin\TimeTableController@insert_time_table');

/*View Time table*/
Route::get('/view_time_table', 'Admin\TimeTableController@view_time_table');
Route::get('/select_time_table/{id}', 'Admin\TimeTableController@select_time_table');

/*Edit Time table*/

Route::get('/view_time_table/edit_time_table/{id}', 'Admin\TimeTableController@edit_time_table');
Route::get('/view_time_table/delete/{id}', 'Admin\TimeTableController@delete_time_table');
Route::get('/view_time_table/edit_time_table/select_section_for_allocation/{id}', 'Admin\TimeTableController@select_section_for_allocation');
Route::get('/view_time_table/edit_time_table/select_subject/{id}', 'Admin\TimeTableController@select_subject');
Route::get('/view_time_table/edit_time_table/select_teacher/{id}', 'Admin\TimeTableController@select_teacher');
Route::post('/view_time_table/edit_time_table/update', 'Admin\TimeTableController@update_time_table');
