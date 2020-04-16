<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use \Input as Input;
class StudentController extends Controller {

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
	
	
	
/*-------------------------Student--------------------------------------------------------*/	
	/*Student Category*/
	
	public function student_category(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_student_category","Y");
		//$route=$this->getAlldata("zurich_transport_route","Y");
		return view("admin.student_category",["data"=>$data]);//,"route"=>$route]);			
	}
	public function save_student_category() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		//$data=$this->getAlldata("zurich_transport_route","Y");
		return view("admin.student_category_add",["data"=>""]);			
	} 
	public function create_student_category(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$data = [
			"stu_category"=>$request->input('category'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->save("zurich_student_category",$data);
		if(count($result) > 0) {
			 return redirect('student_category')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('student_category')->withErrors(['Some error occurred']);
		}	
	}
	public function delete_student_category($id){
		$result = $this->delete_data("zurich_student_category","stu_id",$id);
		if(count($result) > 0) {
			 return redirect('student_category')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('student_category')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_student_category(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		
		$data = $this->getrow("zurich_student_category","stu_id",$id);
		return view("admin.edit_student_category",["data"=>$data]);			
	}
	
	public function update_student_category(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$id=$request->input('token');
		$data = [
			"stu_category"=>$request->input('category'),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$result = $this->updateRecords("zurich_student_category","stu_id",$id,$data);
		if(count($result) > 0) {
			 return redirect('student_category')->with('message', 'Updated successfully...');				 	
		} else {
			return redirect('student_category')->withErrors(['Some error occurred']);
		}	
	}
	
	
	/*Student Registration*/
	
	public function student_registration(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldataDesc("zurich_student_registration","student_id","Y");
		$data_parent = $this->getAlldata("zurich_student_parents","Y");
		$academic=$this->getAlldata("zurich_academic","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		return view("admin.student_registration_list",["data"=>$data,"academic"=>$academic,"course"=>$course,"batch"=>$batch,"data_parent"=>$data_parent]);			
	}
	public function save_student_registration() {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$country=$this->getAlldata("country","Y");
		$state=$this->getAlldata("states_cities","Y");
		$academic=$this->getAlldata("zurich_academic","Y");
		$cat = $this->getAlldata("zurich_student_category","Y");
		return view("admin.student_registration_add",["course"=>$course,"academic"=>$academic,"batch"=>$batch,"country"=>$country,"cat"=>$cat,"state"=>$state]);			
	} 
	public function select_section_for_reg($id){
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			foreach($batch as $dep){
				echo '<option value="'.$dep->batch_id.'">'.$dep->batch_name.'</option>';
			}
		}
							
	}
	public function create_student_registration(Request $request) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		}
		$identity=$request->input('present_identity');
		$parent_info = $this->getrow("zurich_student_parents","f_aadhar",$identity);
		foreach($parent_info as $row){
			$parentid=$row->parent_id;
			$aadhar=$row->f_aadhar;
			$stu_id=$row->student_id;
		}
		if(empty($parent_info)){
			$pass='zurich'.rand(999,99999);
		
		if(Input::hasFile('parent_photo')){
			
			$file = Input::file('parent_photo');
			$file->move('upload', $file->getClientOriginalName());
				$parent_filename = $file->getClientOriginalName();
		}else{
			return redirect('employee_detail/add')->withErrors(['Please select Parent Photo']);
		}
		$parent = [
			
			"f_name"=>$request->input('present_name'),
			"f_mobile"=>$request->input('present_contact'),
			"f_job"=>$request->input('present_job'),
			"f_email"=>$request->input('present_email'),
			"income"=>$request->input('income'),
			"p_pass"=>$pass,
			"p_image"=>$parent_filename,	
			"f_aadhar"=>$request->input('present_identity'),
			"student_id"=>$request->input(''),
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
		$parentid = $this->save("zurich_student_parents",$parent);	
		}
		if(Input::hasFile('photo')){
			
			$file = Input::file('photo');
			$file->move('upload', $file->getClientOriginalName());
				$filename = $file->getClientOriginalName();
		}else{
			return redirect('employee_detail/add')->withErrors(['Please select Photo']);
		}
		$data = [
			"acadmic_year"=>$request->input('acadamic_year'),
			"registration_no"=>$request->input('reg_no'),
			"doj"=>$request->input('doj'),
			"course"=>$request->input('course'),
			"batch"=>$request->input('batch'),
			"roll_no"=>$request->input('roll_no'),
			"fname"=>$request->input('fname'),
			"mname"=>$request->input('mname'),
			"lname"=>$request->input('lname'),
			"dob"=>$request->input('dob'),
			"gender"=>$request->input('gender'),
			"blood_group"=>$request->input('blood'),
			"birth_place"=>$request->input('b_place'),
			"nationality"=>$request->input('nationality'),
			"mother_tongue"=>$request->input('m_tonge'),
			"category"=>$request->input('category'),
			"religion"=>$request->input('religion'),
			"cast"=>$request->input('Cast'),
			"stu_aadhar"=>$request->input('aadhar'),
			"present_add"=>$request->input('present_add'),
			"permanent_add"=>$request->input('parmanent_add'),
			"city"=>$request->input('city'),
			"pin"=>$request->input('pin'),
			"country"=>$request->input('country'),
			"state"=>$request->input('state'),
			"phone"=>$request->input('phone'),
			"mobile"=>$request->input('mobile'),
			"email"=>$request->input('email'),
			"qualification"=>$request->input(''),
			"father_name"=>$request->input('parent_name'),
			"mother_name"=>$request->input('p_aadhar'),
			"parent_id"=>$parentid,
			"photo"=>$filename,
			"p_school"=>$request->input('s_name'),
			"p_school_add"=>$request->input('s_add'),
			"p_qualification"=>$request->input('p_quali'),
			"fees"=>$request->input('fees'),
			"transport"=>$request->input('check'),
			
			"date"=>date('Y-m-d'),
			"status"=>1			
			];
			//print_r($data);
		$result = $this->save("zurich_student_registration",$data);
		if(count($result) > 0) {
			if(!empty($stu_id)){
			$student_id=$stu_id.','.$result;
			}else{$student_id=$result;}
			
			$student_id=array("student_id"=>$student_id);
			$parent_result = $this->updateRecords("zurich_student_parents","parent_id",$parentid,$student_id);
			 return redirect('student_registration/add')->with('message', 'Added successfully...');				 	
		} else {
			return redirect('student_registration/add')->withErrors(['Some error occurred']);
		}
	}
	public function delete_student_registration($id){
		$result = $this->delete_data("zurich_student_registration","student_id",$id);
		
		if(count($result) > 0) {
			$result = $this->delete_data("zurich_student_parents","parent_id",$id);
			 return redirect('student_registration')->with('message', 'Deleted successfully...');				 	
		} else {
			return redirect('student_registration')->withErrors(['Some error occurred']);
		}	
	}
	public function edit_student_registration(Request $request,$id) {
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$country=$this->getAlldata("country","Y");
		$state=$this->getAlldata("states_cities","Y");
		$cat = $this->getAlldata("zurich_student_category","Y");
		$data = $this->getrow("zurich_student_registration","student_id",$id);
		
		$data_parent = $this->getAlldata("zurich_student_parents","Y");
		return view("admin.view_student_registration",["data"=>$data,"course"=>$course,"batch"=>$batch,"country"=>$country,"cat"=>$cat,"state"=>$state,"data_parent"=>$data_parent]);			
	}


	/*Parent Registration*/
	
	
	public function parent_registration(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_student_registration","Y");
		$data_parent = $this->getAlldataDesc("zurich_student_parents","parent_id","Y");
		
		return view("admin.parent_registration_list",["data"=>$data,"data_parent"=>$data_parent]);			
	}
	public function view_parent_registration($id){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getrow("zurich_student_registration","student_id",$id);
		$data_parent = $this->getrow("zurich_student_parents","student_id",$id);
		$country=$this->getAlldata("country","Y");
		$state=$this->getAlldata("states_cities","Y");
		return view("admin.view_parent_registration",["data"=>$data,"data_parent"=>$data_parent,"country"=>$country,"state"=>$state]);			
	}
	
	/*Roll Number*/
	
	public function roll_number_allote(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_student_registration","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$acadamic_year=$this->getAlldata("zurich_academic","Y");
		
		return view("admin.roll_number_allote",["data"=>$data,"course"=>$course,"batch"=>$batch,"acadamic_year"=>$acadamic_year]);			
	}
	
	public function select_section_roll($id){
		//echo $id;
		$batch = $this->getrow("zurich_batch","course_id",$id);
		if($batch!=""){
			echo '<option value="">Select Section</option>';
			foreach($batch as $dep){
				echo '<option value="'.$dep->batch_id.'">'.$dep->batch_name.'</option>';
			}
		}
							
	}
	
	/*ajax code to display employee on the daily attendance page*/
	public function select_roll_number_allote($id){
		
		$nid=(explode("---",$id));
		
		//echo $nid[0]." ".$nid[1];
		$student = $this->triplewhere("zurich_student_registration","course",$nid[0],"batch",$nid[1],"acadmic_year",$nid[2]);
		
		//print_r($student);
		$i=1;$j=1;$update=1;
		echo '<style>th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style><table border="1" cellpadding: 0 cellspacing="0" align="center" style=" border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;">
					<tr>
						<th style="padding: 5px;">S. No.</th>
						<th >Registration No.</th>
						<th >Student Name</th>
						<th >Roll No.</th>
						<th >Update</th>
					</tr>';
					
					foreach($student as $dep){
						echo '
					<tr>
						<td style="padding: 5px;">'.$j++.'</td>
						<td >'.$dep->registration_no.'</td>
						<td >'.$dep->fname.' '. $dep->mname.' '.$dep->lname .'</td>
						<td style="padding: 5px;" ><input type="text"  name="remark'.$i.'" id="remark'.$i.'" value="'.$dep->roll_no.'" ></td>
						<td style="padding: 5px;" ><input type="button"  value="Update" name="'.$i.'" onclick="update_roll_number('.$dep->student_id.',this.name);" ></td>
					</tr>
					';$i++;} echo '</table>';
	}
	
	public function allote_roll_nuber($id){
		//echo $id;
		$edata=explode('---',$id);
		$s_id=$edata[0];
		$remark=$edata[1];
		$data=array("roll_no"=>$remark);
		$result = $this->updateRecords("zurich_student_registration","student_id",$s_id,$data);
		if($result>0){
			echo "Updated successfully...";
		}
	}
	
	/*student attendance*/
	
	public function student_attendance(){
		if(!Session::get('adid')) {		 		    
		   return redirect('admin/login')->withErrors(['Please login']); 	    		 
		} 	
		$data = $this->getAlldata("zurich_student_registration","Y");
		$course=$this->getAlldata("zurich_course","Y");
		$batch=$this->getAlldata("zurich_batch","Y");
		$acadamic_year=$this->getAlldata("zurich_academic","Y");
		return view("admin.student_attendance",["data"=>$data,"course"=>$course,"batch"=>$batch,"acadamic_year"=>$acadamic_year]);	
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
	public function student_display($id){
		$nid=(explode("---",$id));
		//echo $nid[0]." ".$nid[1];
		//$student = $this->doublewhere("zurich_student_registration","course",$nid[0],"batch",$nid[1]);
		$student = $this->triplewhere("zurich_student_registration","course",$nid[0],"batch",$nid[1],"acadmic_year",$nid[2]);
		//print_r($student);
		$i=1;$j=1;$update=1;
		echo '<style>th, td {text-align: center;padding: 8px;}

		tr:nth-child(even){background-color: #f2f2f2}
		</style>
		<table border="1" cellpadding: 0 cellspacing="0" align="center" style=" border-collapse: collapse;
			border-spacing: 0;
			width: 100%;
			border: 1px solid #ddd;">
					<tr>
						<th style="padding: 5px;">S. No.</th>
						
						<th >Registration No.</th>
						<th >Roll No.</th>
						<th >Student Name</th>
						<th >Attendance</th>
						
					</tr>';
					
					foreach($student as $dep){
						echo '
					<tr>
						<td style="padding: 5px;">'.$j++.'</td>
						<td >'.$dep->registration_no.'</td>
						<td >'.$dep->roll_no.'</td>
						<td >'.$dep->fname.' '. $dep->mname.' '.$dep->lname .'</td>
						<td style="padding: 5px;" >
						<input type="radio" name="attendance'.$i.'" id="attendance'.$i.'" onchange="take_attendance(this.value,'.$dep->roll_no.');" value="Present"> Present
						<input type="radio" name="attendance'.$i.'" id="attendance'.$i.'" onchange="take_attendance(this.value,'.$dep->roll_no.');" value="Absent"> Absent
						
						</td>
						
					</tr>
					';$i++;} echo '</table>';
					
	}
	
	public function take_attendance($value){
		//echo $value;
		$values=explode("---",$value);
		//print_r($values);
		$course=$values[4];
		$batch=$values[3];
		$attendance=$values[0];
		$att_date=$values[2];
		$roll_no=$values[1];
		if($roll_no=="undefined"){
			echo "Enrollment number required for attendance...";
		}else{
			$res = $this->doublewhere("zurich_student_attendance","roll_no",$roll_no,"att_date",$att_date);
			if(count($res)>0){
				
				foreach($res as $row){$id=$row->att_id;}
				
				$data=array(
					"course"=>$course,
					"batch"=>$batch,
					"attendance"=>$attendance,
					"att_date"=>$att_date,
					"roll_no"=>$roll_no,
					"date"=>date('Y-m-d'),
					"status"=>1,
				);
				$result = $this->updateRecords("zurich_student_attendance","att_id",$id,$data);
				if(count($result)>0){
					echo "Updated successfully...";
				}
			}else{
				$data=array(
					"course"=>$course,
					"batch"=>$batch,
					"attendance"=>$attendance,
					"att_date"=>$att_date,
					"roll_no"=>$roll_no,
					"date"=>date('Y-m-d'),
					"status"=>1,
				);
				$result = $this->save("zurich_student_attendance",$data);
				if(count($result) > 0) {
					 echo 'Added successfully...';				 	
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
