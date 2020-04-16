<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use \Input as Input;
class SubjectController extends Controller {

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
	
	
	
	/*-----------------------------------------------Subject--------------------------------------*/
	
	public function subject(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldataDesc("zurich_subject","id","Y");
		
		return view("admin.subject_list",["data"=>$data]);			
	}
	public function save_subject() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		return view("admin.suject_add",["data"=>""]);			
	} 
	public function create_subject(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"sub_name"=>$request->input('sub_name'),
			"sub_code"=>$request->input('sub_code'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_subject",$data);
		if(count($result) > 0) {
			 return redirect('subject')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('subject')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_subject($id){
		$result = $this->delete_data("zurich_subject","id",$id);
		if(count($result) > 0) {
			 return redirect('subject')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('subject')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_subject(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		$data = $this->getrow("zurich_subject","id",$id);
		return view("admin.edit_suject",["data"=>$data]);			
	}
	
	public function update_subject(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"sub_name"=>$request->input('sub_name'),
			"sub_code"=>$request->input('sub_code'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_subject","id",$id,$data);
		if(count($result) > 0) {
			 return redirect('subject')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('subject')->withErrors(['Some error occurred']);
		}	
	}
	
	/*Assign Subject*/
	
	public function assign_subject(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldataDesc("zurich_assign_subject","id","Y");
		$academic = $this->getAlldata("zurich_academic","Y"); 
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$subject=$this->getAlldata("zurich_subject","Y");
		return view("admin.assign_subject_list",["data"=>$data,"academic"=>$academic,"course"=>$course,"batch"=>$batch,"subject"=>$subject]);			
	}
	public function save_assign_subject() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$course=$this->getAlldata("zurich_course","Y");
		$academic = $this->getAlldata("zurich_academic","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$subject=$this->getAlldata("zurich_subject","Y");
		return view("admin.assign_subject_add",["academic"=>$academic,"course"=>$course,"batch"=>$batch,"subject"=>$subject]);			
	} 
	public function create_assign_subject(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"course_id"=>$request->input('course'),
			"batch_id"=>$request->input('batch'),
			"subject"=>$request->input('subject'),
			"academic"=>$request->input('academic'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_assign_subject",$data);
		if(count($result) > 0) {
			 return redirect('assign_subject')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('assign_subject')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_assign_subject($id){
		$result = $this->delete_data("zurich_assign_subject","id",$id);
		if(count($result) > 0) {
			 return redirect('assign_subject')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('assign_subject')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_assign_subject(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$subject=$this->getAlldata("zurich_subject","Y");
		$academic = $this->getAlldata("zurich_academic","Y");
		$data = $this->getrow("zurich_assign_subject","id",$id);
		return view("admin.edit_assign_subject",["data"=>$data,"academic"=>$academic,"course"=>$course,"batch"=>$batch,"subject"=>$subject]);			
	}
	
	public function update_assign_subject(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"academic"=>$request->input('academic'),
			"course_id"=>$request->input('course'),
			"batch_id"=>$request->input('batch'),
			"subject"=>$request->input('subject'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_assign_subject","id",$id,$data);
		if(count($result) > 0) {
			 return redirect('assign_subject')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('assign_subject')->withErrors(['Some error occurred']);
		}	
	}
	public function select_section($id){
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			foreach($batch as $dep){
				echo '<option value="'.$dep->batch_id.'">'.$dep->batch_name.'</option>';
			}
		}
							
	}
	public function select_section_edit($id){
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			
			foreach($batch as $batc){
				echo '<option value="'.$batc->batch_id.'">'.$batc->batch_name.'</option>';
			}
		}
	}
	/*Subject allocation*/
	
	public function subject_allocation(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldataDesc("zurich_subject_allocation","allocation_id","Y");
		$emp=$this->getAlldata("zurich_employee_regt","Y");
		$dept=$this->getAlldata("zurich_employee_dept","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$subject=$this->getAlldata("zurich_subject","Y");
		$academic = $this->getAlldata("zurich_academic","Y"); 
		return view("admin.subject_allocation",["data"=>$data,"academic"=>$academic,"course"=>$course,"batch"=>$batch,"subject"=>$subject,"dept"=>$dept,"emp"=>$emp]);			
	}
	public function save_subject_allocation() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$emp=$this->getAlldata("zurich_employee_regt","Y");
		$dept=$this->getAlldata("zurich_employee_dept","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$subject=$this->getAlldata("zurich_subject","Y");
		$academic = $this->getAlldata("zurich_academic","Y"); 
		return view("admin.subject_allocation_add",["academic"=>$academic,"course"=>$course,"batch"=>$batch,"subject"=>$subject,"dept"=>$dept,"emp"=>$emp]);			
	} 
	
	
	public function select_dept_employee($id){
		//echo $id;
		$emp = $this->getrow("zurich_employee_regt","emp_dept",$id);
		if($emp!=""){
			echo '<option value="">Select Employee</option>';
			foreach($emp as $em){
				echo '<option value="'.$em->emp_id.'">'.$em->emp_fname." ".$em->emp_mid_name." ".$em->emp_lname.'</option>';
				
				
			}
		}
							
	}
	
	public function create_subject_allocation(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
			$academic=$request->input('academic');
			$course=$request->input('course');
			$batch=$request->input('batch');
			$subject=$request->input('subject');
			$alloted=["academic"=>$academic,
			"course"=>$course,
			"batch"=>$batch,
			"subject"=>$subject];
		$get_data = $this->getrowconditions("zurich_subject_allocation",$alloted);
		if(!empty($get_data)){
			return redirect('subject_allocation')->withErrors(['Already Exist...']);
		}else{
			$data = [
			"dept"=>$request->input('dept'),
			"emp_name"=>$request->input('e_name'),
			"academic"=>$academic,
			"course"=>$course,
			"batch"=>$batch,
			"subject"=>$subject,
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
			$result = $this->save("zurich_subject_allocation",$data);
			if(count($result) > 0) {
				 return redirect('subject_allocation')->with('message', 'Added successfully...');				 	
			} else {
				return redirect('subject_allocation')->withErrors(['Some error occurred']);
			}	
		}
		
	}
	public function delete_subject_allocation($id){
		$result = $this->delete_data("zurich_subject_allocation","allocation_id",$id);
		if(count($result) > 0) {
			 return redirect('subject_allocation')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('subject_allocation')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_subject_allocation(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$emp=$this->getAlldata("zurich_employee_regt","Y");
		$dept=$this->getAlldata("zurich_employee_dept","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$subject=$this->getAlldata("zurich_subject","Y");
		$academic = $this->getAlldata("zurich_academic","Y"); 
		$data = $this->getrow("zurich_subject_allocation","allocation_id",$id);
		return view("admin.edit_subject_allocation",["academic"=>$academic,"data"=>$data,"course"=>$course,"batch"=>$batch,"subject"=>$subject,"dept"=>$dept,"emp"=>$emp]);			
	}
	
	public function update_subject_allocation(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$academic=$request->input('academic');
			$course=$request->input('course');
			$batch=$request->input('batch');
			$subject=$request->input('subject');
			$alloted=["academic"=>$academic,
			"course"=>$course,
			"batch"=>$batch,
			"subject"=>$subject];
		$get_data = $this->getrowconditions("zurich_subject_allocation",$alloted);
		if(!empty($get_data)){
			return redirect('subject_allocation')->withErrors(['Already Exist...']);
		}else{
			$data = [
				"dept"=>$request->input('dept'),
				"emp_name"=>$request->input('e_name'),
				"academic"=>$request->input('academic'),
				"course"=>$request->input('course'),
				"batch"=>$request->input('batch'),
				"subject"=>$request->input('subject'),
				"date"=>date('Y-m-d'),
				"status"=>1			
				];
			$result = $this->updateRecords("zurich_subject_allocation","allocation_id",$id,$data);
			if(count($result) > 0) {
				 return redirect('subject_allocation')->with('message', 'Updated successfully...');				 	
			} else {
				return redirect('subject_allocation')->withErrors(['Some error occurred']);
			}	
		}	
	}
	public function select_section_for_allocation($id){
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			foreach($batch as $dep){
				echo '<option value="'.$dep->batch_id.'">'.$dep->batch_name.'</option>';
			}
		}
							
	}
	public function select_section_edit_for_allocation($id){
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			
			foreach($batch as $batc){
				echo '<option value="'.$batc->batch_id.'">'.$batc->batch_name.'</option>';
			}
		}
	}
	
	public function fetch_allocated_subject($str){
		$data=explode("---",$str);
		$val=["course_id"=>$data[0],"batch_id"=>$data[1],"academic"=>$data[2]];
		$sub = $this->getrowconditions("zurich_assign_subject",$val);
		$sub_name=$this->getAlldata("zurich_subject","Y");
		//print_r($sub_name);
		if($sub!=""){
			echo '<option value="">Select Subject</option>';
			
			foreach($sub as $su){
				foreach($sub_name as $su_name){
					if($su_name->id == $su->subject){
						echo '<option value="'.$su->subject.'">'.$su_name->sub_name.'</option>';
					}
				}
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
	public function getrowconditions($table,$data) {
		$rows = DB::table($table) 
            ->where($data)
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
	
	public function doublewhere($table,$col1,$val1,$col2,$val2){
		$row=DB::table($table)->where($col1,$val1)->where($col2,$val2)->get();
		return $row;
	}
	public function triplewhere($table,$col1,$val1,$col2,$val2,$col3,$val3){
		$row=DB::table($table)->where($col1,$val1)->where($col2,$val2)->where($col3,$val3)->get();
		return $row;
	}

}
