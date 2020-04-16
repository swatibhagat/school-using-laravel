<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use \Input as Input;
class AdminController extends Controller {

	public function __construct(){
	}
	
	/**
	 * @Dashboard
	 */
	public function index(){ 
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 		    		 
		}			
		return view("admin.home");
	}
	
	/** 
	 * @Login
	 */
	public function login(){ 
		return view("admin.login");
	}
 
 	/** 
	 * @Logout
	 */	
	public function logout(Request $request){
		Session::flush();
		return redirect('admin/login');
	}
	
	public function doLogin(Request $request){
		$result = DB::table('zurich_user_login')->where(['username' => $request->input('username'),'password' => md5($request->input('password'))])->get();
 
		if($result) {
			Session::put('adid', $result[0]->id);
			Session::put('name', $result[0]->name);
			Session::put('username', $result[0]->username);
			Session::put('status', $result[0]->status);
			return redirect('admin');
		 } else {
		   return redirect('admin/login')->withErrors(['Username and password are not match']);
		 }
	}

	// Institute
	public function institute() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldata("zurich_institute","N");	 
		 
		return view("admin.institute",["institute"=>$data]);			
	}
	
	public function save_institute(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		
	    
	       if(Input::hasFile('logo')){ 
				$imageName=Input::file('logo');
				$request->file('logo')->getClientOriginalExtension();
				$request->file('logo')->move(
				base_path() . '/resources/assets/admin-lte/dist/img/', $imageName);
			}

	    
		if(!empty($imageName)){
		$data = [
			"name"=>$request->input('fullname'),
			"address"=>$request->input('fulladdress'),
			"phone"=>$request->input('phone'),
			"mobile"=>$request->input('mobile'),
			"email"=>$request->input('email'),
			"fax"=>$request->input('fax'),
			"institution_code"=>$request->input('code'),
			"country"=>$request->input('country'),
			"currency_type"=>$request->input('currency'),
			"admin_contact_person"=>$request->input('person'),
			"about"=>$request->input('about'),
			"logo"=>$imageName
			];
		}else{
			$data = [
			"name"=>$request->input('fullname'),
			"address"=>$request->input('fulladdress'),
			"phone"=>$request->input('phone'),
			"mobile"=>$request->input('mobile'),
			"email"=>$request->input('email'),
			"fax"=>$request->input('fax'),
			"institution_code"=>$request->input('code'),
			"country"=>$request->input('country'),
			"currency_type"=>$request->input('currency'),
			"admin_contact_person"=>$request->input('person'),
			"about"=>$request->input('about'),
			];
		}
		 $result = $this->updateRecords("zurich_institute","ins_id",$request->input('ins_id'),$data);
		 if($result > 0) {
		 	 return redirect('institute')->with('message', 'Saved...');
		 	} else {
		 		 return redirect('institute')->withErrors(['Some error occurred']);
		 	}
	}	

	
	// Academicyear
	public function academicyear() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldataDesc("zurich_academic","academic_id","Y");		
		return view("admin.academicyear_list",["data"=>$data,"i"=>1]);			
	}
	public function save_academicyear() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		return view("admin.academicyear_add",["data"=>""]);			
	}	
	
	public function create_institute(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"start_year"=>$request->input('startyear'),
			"start_month"=>$request->input('startmonth'),
			"end_year"=>$request->input('endyear'),
			"end_month"=>$request->input('endmonth'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_academic",$data);
		if(count($result) > 0) {
			 return redirect('academic')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('academic')->withErrors(['Some error occurred']);
		}	
	}	

	public function delete_academicyear($id){
		$result = $this->delete_data("zurich_academic","academic_id",$id);
		if(count($result) > 0) {
			 return redirect('academic')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('academic')->withErrors(['Some error occurred']);
		}	
	}
	/*Academic batch, course, class teacher alloted */
	
	
	/*Batch*/
	
	public function batch() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$course = $this->getAlldata("zurich_course","Y");
		$data = $this->getAlldataDesc("zurich_batch","batch_id","Y");	 
		 
		return view("admin.batch_list",["data"=>$data,"course"=>$course,"i"=>1]);			
	}
	public function save_batch() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_course","Y");
		
		return view("admin.batch_add",["data"=>$data]);			
	}
	public function create_batch(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"course_id"=>$request->input('cname'),
			"batch_name"=>$request->input('bname'),
			"max_student"=>$request->input('bmstudent'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_batch",$data);
		if(count($result) > 0) {
			 return redirect('batch')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('batch')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_batch(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_course","Y");
		$data_batch = $this->getrow("zurich_batch","batch_id",$id);
		return view("admin.edit_add_batch",["data"=>$data,"bdata"=>$data_batch]);			
	}
	
	public function update_batch(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
		
			"course_id"=>$request->input('cname'),
			"batch_name"=>$request->input('bname'),
			"max_student"=>$request->input('bmstudent'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_batch","batch_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('batch')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('batch')->withErrors(['Some error occurred']);
		}	
	}
	
	public function delete_batch($id){
		$result = $this->delete_data("zurich_batch","batch_id",$id);
		if(count($result) > 0) {
			 return redirect('batch')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('batch')->withErrors(['Some error occurred']);
		}	
	}
	
	
	/*Course*/
	
	
	public function course() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldataDesc("zurich_course","course_id","Y");	 
		 
		return view("admin.course_list",["data"=>$data,"i"=>1]);			
	}
	public function save_course() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		return view("admin.course_add",["data"=>""]);			
	}	
	public function create_course(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"name"=>$request->input('cname'),
			"code"=>$request->input('ccode'),
			"description"=>$request->input('desc'),
			"lecture_per_day"=>$request->input('lecture_per_day'),
			"minimun_attendence"=>$request->input('cattendence'),
			"attendence_type"=>$request->input('cattendencetype'),
			"working_days"=>$request->input('cwdays'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_course",$data);
		if(count($result) > 0) {
			 return redirect('course')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('course')->withErrors(['Some error occurred']);
		}	
	}
	
	public function edit_course(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		$data_batch = $this->getrow("zurich_course","course_id",$id);
		return view("admin.edit_course_add",["bdata"=>$data_batch]);			
	}
	
	public function update_course(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"name"=>$request->input('cname'),
			"code"=>$request->input('ccode'),
			"description"=>$request->input('desc'),
			"lecture_per_day"=>$request->input('lecture_per_day'),
			"minimun_attendence"=>$request->input('cattendence'),
			"attendence_type"=>$request->input('cattendencetype'),
			"working_days"=>$request->input('cwdays'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_course","course_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('course')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('course')->withErrors(['Some error occurred']);
		}	
	}
	
	public function delete_course($id){
		$result = $this->delete_data("zurich_course","course_id",$id);
		if(count($result) > 0) {
			 return redirect('course')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('course')->withErrors(['Some error occurred']);
		}	
	}

	
	/*Class teacher allocate*/
	
	
	public function teacher_allocate() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}	
		$data = $this->getAlldata("zurich_teacher_allocation","Y");	 
		$course = $this->getAlldata("zurich_course","Y"); 
		$batch = $this->getAlldata("zurich_batch","Y");
		$emp=$this->getAlldata("zurich_employee_regt","Y");
		return view("admin.teacher_allocate_list",["data"=>$data,"emp"=>$emp,"course"=>$course,"batch"=>$batch,"i"=>1]);			
	}
	public function save_teacher_allocate() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		$course = $this->getAlldata("zurich_course","Y"); 
		$batch = $this->getAlldata("zurich_batch","Y");
		$emp=$this->getAlldata("zurich_employee_regt","Y");
		return view("admin.teacher_allocate_add",["course"=>$course,"batch"=>$batch,"emp"=>$emp]);			
	} 
	public function create_teacher_allocate(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"course_id"=>$request->input('course'),
			"batch_id"=>$request->input('batch'),
			"teacher_id"=>$request->input('emp'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_teacher_allocation",$data);
		if(count($result) > 0) {
			 return redirect('teacher_allocate')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('teacher_allocate')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_teacher_allocate(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$course = $this->getAlldata("zurich_course","Y"); 
		$batch = $this->getAlldata("zurich_batch","Y");
		$emp=$this->getAlldata("zurich_employee_regt","Y");
		$data = $this->getrow("zurich_teacher_allocation","allocation_id",$id);
		return view("admin.edit_teacher_allocate",["data"=>$data,"emp"=>$emp,"course"=>$course,"batch"=>$batch]);			
	}
	
	public function update_teacher_allocate(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"course_id"=>$request->input('course'),
			"batch_id"=>$request->input('batch'),
			"teacher_id"=>$request->input('emp'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_teacher_allocation","allocation_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('teacher_allocate')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('teacher_allocate')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_teacher_allocate($id){
		$result = $this->delete_data("zurich_teacher_allocation","course_id",$id);
		if(count($result) > 0) {
			 return redirect('teacher_allocate')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('teacher_allocate')->withErrors(['Some error occurred']);
		}	
	}
	public function select_section_teacher($id){
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			foreach($batch as $dep){
				echo '<option value="'.$dep->batch_id.'">'.$dep->batch_name.'</option>';
			}
		}
							
	}
	public function select_section_edit_teacher($id){
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			
			foreach($batch as $batc){
				echo '<option value="'.$batc->batch_id.'">'.$batc->batch_name.'</option>';
			}
		}
	}


	
/*
| Common functions 
|
*/
	public function getAlldata($table,$flag) {
	    $results =  DB::table($table)->get();		
		if($flag=="Y"){
			if(count($results) > 0) {
			  $result = $results;	
			} else {
			  $result = '';
			}
		} else {
			$result  = $results[0];			 
		}
		return $result;
	}
	public function getAlldataDesc($table,$col,$flag) {
	    $results =  DB::table($table)->orderBy($col, 'desc')->get();		
		if($flag=="Y"){
			if(count($results) > 0) {
			  $result = $results;	
			} else {
			  $result = '';
			}
		} else {
			$result  = $results[0];			 
		}
		return $result;
	}
	
	
	public function getrow($table,$mid,$id) {
		//$rows = DB::select('select * from '.$table.' where '.$mid.' = ?',[$id]);
            //->update($data);
			$rows = DB::table($table) 
            ->where($mid, $id)
            ->get();
	    return $rows;
	}
	public function getrowdouble($table,$col1,$val1,$col2,$val2) {
		
			$rows = DB::table($table) 
            ->where($col1, $val1)
            ->where($col2, $val2)
            ->get();
	    return $rows;
	}
	public function updateRecords($table,$id,$value,$data) {
		$result = DB::table($table) 
            ->where($id, $value)
            ->update($data);
	    return $result;
	}

	public function save($table,$data) {
		$id = DB::table($table)->insertGetId($data);
	    return $id;
	}	
	
	public function delete_data($table,$col,$id){
		$del = DB::table($table)
		->where($col,$id)
		->delete();
		return $del;
	}

}
